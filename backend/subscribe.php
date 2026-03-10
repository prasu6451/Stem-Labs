<?php
// Include database connection
require_once 'db.php';

// Only handle POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = trim($_POST['email']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Prepare statement to insert email if it doesn't exist
    $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    // Execute and handle duplicate email
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Thank you for subscribing!";
        } else {
            echo "You are already subscribed.";
        }
    } else {
        echo "Subscription failed. Please try again later.";
        // Optional: log error for debugging
        // error_log("Newsletter insert error: " . $stmt->error);
    }

    $stmt->close();
}

$conn->close();
?>
