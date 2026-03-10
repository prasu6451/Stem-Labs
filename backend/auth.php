<?php
// backend/auth.php

session_start();
require_once "db.php";

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../admin/login.php");
    exit;
}

// Get form data
$username = trim($_POST["username"] ?? '');
$password = trim($_POST["password"] ?? '');

if ($username === "" || $password === "") {
    header("Location: ../admin/login.php?error=empty");
    exit;
}

// Fetch admin from database
$sql = "SELECT id, username, password FROM admins WHERE username = ? LIMIT 1";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Query error");
}

mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($admin = mysqli_fetch_assoc($result)) {

    // Verify hashed password
    if (password_verify($password, $admin["password"])) {

        // Login success → create session
        $_SESSION["admin_id"] = $admin["id"];
        $_SESSION["admin_username"] = $admin["username"];
        $_SESSION["logged_in"] = true;

        header("Location: ../admin/dashboard.php");
        exit;

    } else {
        // Wrong password
        header("Location: ../admin/login.php?error=invalid");
        exit;
    }

} else {
    // Admin not found
    header("Location: ../admin/login.php?error=invalid");
    exit;
}
