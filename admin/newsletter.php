<?php
session_start();
require_once "../backend/db.php";

// TEMP: for testing, remove in production
$_SESSION["logged_in"] = true;

if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}

// Fetch newsletter subscribers
$sql = "SELECT * FROM newsletter_subscribers ORDER BY subscribed_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin | Newsletter Subscribers</title>

<link rel="stylesheet" href="assets/sidebar.css">

<style>
h2 {
    font-size: 26px;
    margin-bottom: 24px;
}

/* TABLE CARD DESIGN */
.table-card {
    background: #071527;
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 14px 40px rgba(0,0,0,.4);
    margin-bottom: 30px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 14px 12px;
    border-bottom: 1px solid rgba(255,255,255,.06);
    vertical-align: top;
}

th {
    text-align: left;
    color: #9fb3c6;
    font-size: 13px;
    text-transform: uppercase;
}

td {
    font-size: 14px;
    color: #e6eef8;
}

tr:hover {
    background: rgba(255,255,255,.03);
}

/* Form styling */
.newsletter-form {
    background: #071527;
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 14px 40px rgba(0,0,0,.4);
    max-width: 600px;
}

.newsletter-form textarea {
    width: 100%;
    min-height: 120px;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid rgba(255,255,255,.1);
    background: #0a1a35;
    color: #e6eef8;
    font-family: inherit;
    font-size: 14px;
    resize: vertical;
}

.newsletter-form button {
    margin-top: 12px;
    padding: 10px 16px;
    background: linear-gradient(90deg, #6ee7b7, #7dd3fc);
    color: #022;
    font-weight: 700;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

.newsletter-form button:hover {
    opacity: 0.9;
}
</style>
</head>
<body>

<?php include "assets/sidebar.php"; ?>

<main class="main">
    <h2>Newsletter Subscribers</h2>

    <div class="table-card">
        <table>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Subscribed At</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row["id"]) ?></td>
                <td><?= htmlspecialchars($row["email"]) ?></td>
                <td><?= date("d M Y H:i", strtotime($row["subscribed_at"])) ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <!-- Optional: Send Newsletter Form -->
    <h2>Send Newsletter</h2>
    <div class="newsletter-form">
        <form action="send_newsletter.php" method="POST">
            <textarea name="message" placeholder="Your message" required></textarea><br>
            <button type="submit">Send</button>
        </form>
    </div>
</main>

</body>
</html>
