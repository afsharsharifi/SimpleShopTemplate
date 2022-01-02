<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Materilize -->
    <link rel="stylesheet" href="css/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header style="background-color: gray; background-image: none;">
        <nav class="nav-wrapper navbar-bg">
            <div class="container">
                <a href="#" class="brand-logo left">Company Logo</a>
                <div class="right hide-on-med-and-down account-btn">

                    <?php
                    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                        <a href="logout.php">خروج</a>
                    <?php } else { ?>
                        <a href="login.php">ورود</a>
                        <span>|</span>
                        <a href="register.php">ثبت نام</a>
                    <?php } ?>
                </div>

                <a href="#" class="sidenav-trigger right" data-target="mobile-link"><i class="material-icons">menu</i></a>
                <ul class="right navbar hide-on-med-and-down">
                    <li><a href="index.html"><i class="fa fa-home"></i> خانه</a></li>
                    <li><a href="products.html"><i class="fas fa-store-alt"></i> محصولات</a></li>
                    <li><a href="contact.html"><i class="fa fa-phone"></i> تماس با ما</a></li>
                    <li><a href="about.html"><i class="fa fa-info"></i> درباره ما</a></li>
                </ul>

                <ul class="sidenav direction-right" id="mobile-link">
                    <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                        <li><a href="register.html"><i class="fa fa-user"></i> خروج</a></li>
                    <?php } else { ?>
                        <li><a href="register.html"><i class="fa fa-user"></i> ثبت نام</a></li>
                        <li><a href="login.html"><i class="fas fa-sign-in-alt"></i> ورود</a></li>
                    <?php } ?>
                    <li><a href="index.html"><i class="fa fa-home"></i> خانه</a></li>
                    <li><a href="products.html"><i class="fas fa-store-alt"></i> محصولات</a></li>
                    <li><a href="contact.html"><i class="fa fa-phone"></i> تماس با ما</a></li>
                    <li><a href="about.html"><i class="fa fa-info"></i> درباره ما</a></li>
                </ul>
            </div>
        </nav>
        <div class="container center after-login">
            <h3>سلام <?php echo $_SESSION['username']; ?></h3>
            <h4>به وبسایت فروشگاهی خوش آمدید</h4>
        </div>
    </header>

</body>

</html>