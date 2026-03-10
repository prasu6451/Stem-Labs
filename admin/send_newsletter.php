<?php
require_once '../backend/db.php';

if (isset($_POST['message'])) {
    $message = $_POST['message'];

    $result = $conn->query("SELECT email FROM newsletter_subscribers");

    while ($row = $result->fetch_assoc()) {
        $to = $row['email'];
        $subject = "STEM Labs Newsletter";
        $headers = "From: admin@yourdomain.com";

        mail($to, $subject, $message, $headers); // PHP mail function
    }
    echo "Newsletter sent successfully!";
}
?>
