<?php
// admin/login.php
session_start();

// If already logged in, redirect to dashboard
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    header("Location: dashboard.php");
    exit;
}

// Handle error messages
$errorMsg = "";
if (isset($_GET["error"])) {
    if ($_GET["error"] === "invalid") {
        $errorMsg = "Invalid username or password.";
    } elseif ($_GET["error"] === "empty") {
        $errorMsg = "Please fill in all fields.";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login | Vidyantraa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body{
            margin:0;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            background:#071026;
            font-family:Inter,system-ui,Arial;
            color:#e6eef8;
        }
        .login-box{
            background:#071527;
            padding:36px;
            width:100%;
            max-width:380px;
            border-radius:14px;
            box-shadow:0 20px 60px rgba(2,6,23,.6);
        }
        h2{
            margin:0 0 20px;
            text-align:center;
            font-size:24px;
        }
        label{
            font-size:14px;
            color:#94a3b8;
        }
        input{
            width:100%;
            padding:14px;
            margin-top:8px;
            margin-bottom:18px;
            border-radius:10px;
            border:1px solid rgba(255,255,255,.05);
            background:transparent;
            color:white;
            font-size:15px;
        }
        button{
            width:100%;
            padding:14px;
            border:none;
            border-radius:12px;
            font-weight:700;
            cursor:pointer;
            background:linear-gradient(90deg,#6ee7b7,#7dd3fc);
            color:#022;
        }
        .error{
            background:#3b0f15;
            color:#fecaca;
            padding:10px;
            border-radius:10px;
            font-size:14px;
            margin-bottom:16px;
            text-align:center;
        }
        .note{
            margin-top:18px;
            font-size:13px;
            text-align:center;
            color:#94a3b8;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if ($errorMsg): ?>
        <div class="error"><?= htmlspecialchars($errorMsg) ?></div>
    <?php endif; ?>

    <form action="../backend/auth.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <div class="note">
        Vidyantraa Admin Panel
    </div>
</div>

</body>
</html>

