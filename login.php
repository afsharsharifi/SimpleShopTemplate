<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Materilize -->
    <link rel="stylesheet" href="css/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <!-- My Style -->
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="container">
        <div class="row login-box">
            <h2 class="logo-title center white-text">Company Logo</h2>
            <div class="col s12 card">
                <h4 class="center">ورود</h4>
                <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = $_POST['username'];    // removes backslashes
        $password = md5($_POST['password']);
        $query = "SELECT * FROM `users` WHERE username='$username'
                     && password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
             ?>
				<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>
				<?php
        }} else { ?>
                <form method="post" name="login">
                    <label for="email">کاربری</label>
                    <input name="username" class="login" type="text" id="username" placeholder="کاربری" required autocomplete="off">
                    <br>
                    <label for="password">گذرواژه</label>
                    <input name="password" class="login" type="password" id="password" placeholder="گذرواژه" required>
                    <br>
                    <br>
                    <input type="submit" value="ورود" name="submit" class="btn blue"/>
                </form>
                <?php } ?>
                <div class="center">
                    <p></p><a class="grey-text" href="register.php">میخواهم ثبت نام کنم <i class="fa fa-arrow-alt-circle-left"></i></a></p>
                    <p><a href="#">فراموشی گذرواژه <i class="fa fa-lock"></i></a></p>
                </div>
                <div class="center login-with">
                    <button class="btn-floating red"><i class="fab fa-google"></i></button>
                    <button class="btn-floating blue"><i class="fab fa-facebook"></i></button>
                    <button class="btn-floating black"><i class="fab fa-github"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="js/jquery-3.5.1.js"></script>
    <!-- Materilize -->
    <script src="css/materialize/js/materialize.min.js"></script>
    <!-- Font Awesome -->
    <script src="css/fontawesome/js/all.js"></script>
</body>
</html>