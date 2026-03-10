<?php
session_start();
require_once "../backend/db.php";

/* TEMP: remove later */
$_SESSION["logged_in"] = true;

if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin | Contact Messages</title>

<link rel="stylesheet" href="assets/sidebar.css">

<style>
h2{
  font-size:26px;
  margin-bottom:24px;
}

/* TABLE DESIGN */
.table-card{
  background:#071527;
  border-radius:14px;
  padding:24px;
  box-shadow:0 14px 40px rgba(0,0,0,.4);
}

table{
  width:100%;
  border-collapse:collapse;
}

th,td{
  padding:14px 12px;
  border-bottom:1px solid rgba(255,255,255,.06);
  vertical-align:top;
}

th{
  text-align:left;
  color:#9fb3c6;
  font-size:13px;
  text-transform:uppercase;
}

td{
  font-size:14px;
}

tr:hover{
  background:rgba(255,255,255,.03);
}
</style>
</head>
<body>

<?php include "assets/sidebar.php"; ?>

<main class="main">
  <h2>Contact Messages</h2>

  <div class="table-card">
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
      </tr>

      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row["name"]) ?></td>
        <td><?= htmlspecialchars($row["email"]) ?></td>
        <td><?= nl2br(htmlspecialchars($row["message"])) ?></td>
        <td><?= date("d M Y", strtotime($row["created_at"])) ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </div>
</main>

</body>
</html>
