<?php
include("../config/db_connect.php");

$name    = htmlspecialchars($_POST['name']);
$email   = htmlspecialchars($_POST['email']);
$phone   = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO leads (name, email, phone, message)
        VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql)) {
    echo json_encode(["status" => "success"]);
    
    // OPTIONAL: Send Email
    // mail("youremail@gmail.com", "New Lead", $message);
} else {
    echo json_encode(["status" => "error"]);
}
?>
