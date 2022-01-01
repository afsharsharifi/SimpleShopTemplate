<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>داشبورد</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>سلام <?php echo $_SESSION['username']; ?>!</p>
        <p>شما وارد شدید</p>
        <h4><a href="index.php">صفحه اصلی</a></h4>
        <p><a href="logout.php">خروج</a></p>
    </div>
</body>
</html>