<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid request");
}

$name    = trim($_POST["name"] ?? "");
$email   = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $message === "") {
    exit("error");
}

$stmt = $conn->prepare(
    "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conn->close();
