<?php
// admin/dashboard.php
session_start();

// PROTECT THIS PAGE
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard | Vidyantraa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="assets/sidebar.css">

<style>
body{
    margin:0;
    background:#071026;
    font-family:Inter,system-ui,Arial;
    color:#e6eef8;
}
.header{
    padding:20px 30px;
    background:#071527;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-bottom:1px solid rgba(255,255,255,.05);
}
.header h1{
    font-size:20px;
    margin:0;
}
.logout{
    background:#ef4444;
    border:none;
    color:white;
    padding:10px 14px;
    border-radius:8px;
    cursor:pointer;
    font-weight:700;
}
.layout{
    display:flex;
    min-height:calc(100vh - 70px);
}

.main{
    flex:1;
    padding:30px;
}
.card{
    background:#071527;
    padding:24px;
    border-radius:14px;
    box-shadow:0 12px 40px rgba(2,6,23,.6);
    margin-bottom:20px;
}
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:20px;
}
.stat{
    font-size:28px;
    font-weight:800;
}
.muted{
    color:#94a3b8;
    font-size:14px;
}
</style>
</head>

<body>

<div class="header">
    <h1>Vidyantraa Admin</h1>
    <form action="logout.php" method="POST">
        <button class="logout">Logout</button>
    </form>
</div>

<div class="layout">

    <!-- SIDEBAR -->
    <?php include "assets/sidebar.php"; ?>


    <!-- MAIN -->
    <main class="main">

        <div class="grid">
            <div class="card">
                <div class="stat">12</div>
                <div class="muted">New Contacts</div>
            </div>

            <div class="card">
                <div class="stat">248</div>
                <div class="muted">Newsletter Subscribers</div>
            </div>

            <div class="card">
                <div class="stat">6</div>
                <div class="muted">Pages</div>
            </div>

            <div class="card">
                <div class="stat">1</div>
                <div class="muted">Admins</div>
            </div>
        </div>

        <div class="card">
            <h3>Welcome, <?= htmlspecialchars($_SESSION["admin_username"]) ?></h3>
            <p class="muted">
                This is your control panel.  
                From here you will manage contacts, pages, newsletter & users.
            </p>
        </div>

    </main>

</div>

</body>
</html>
