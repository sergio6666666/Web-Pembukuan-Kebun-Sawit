<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

</head>

<body>
    <nav>
        <div class="">
            <h3>hi, <span>user</span></h3>
            <h3>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h3>
        </div>
        <div id="menu-icon" class="menu-icon">
            <i class="ph ph-list"></i>
        </div>
        <ul id="menu-list" class="hidden">
            <li>
                <a href="user.php">Home</a>
            </li>
            <li>
                <a href="#">Data Pekerja</a>
            </li>
            <li>
                <a href="#">Data Panen</a>
            </li>
            <li>
                <a href="#">Pembukuan</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>
        

    </nav>
    <script src="/js/script.js"></script>
</body>

</html>