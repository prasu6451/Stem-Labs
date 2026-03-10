<?php
session_start();
include("../config/db_connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE username='$username'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['admin'] = $user['id'];
    echo "success";
} else {
    echo "failed";
}
?>
