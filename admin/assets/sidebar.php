<?php
// Prevent direct access
if (!isset($_SESSION)) {
    session_start();
}
?>

<aside class="sidebar">
    <div style="margin-bottom:20px;font-weight:800;font-size:18px;">
        Vidyantraa Admin
    </div>

    <a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
        Dashboard
    </a>

    <a href="contacts.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : '' ?>">
        Contact Messages
    </a>

    <a href="newsletter.php" class="<?= basename($_SERVER['PHP_SELF']) == 'newsletter.php' ? 'active' : '' ?>">
        Newsletter
    </a>

    <a href="pages.php" class="<?= basename($_SERVER['PHP_SELF']) == 'pages.php' ? 'active' : '' ?>">
        Pages
    </a>

    <a href="users.php" class="<?= basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : '' ?>">
        Admin Users
    </a>
</aside>
