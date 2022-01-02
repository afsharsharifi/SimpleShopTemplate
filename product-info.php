<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محصولات</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Materilize -->
    <link rel="stylesheet" href="css/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <!-- My Style -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>


    <header>
        <nav class="nav-wrapper navbar-bg">
            <div class="container">
                <a href="#" class="brand-logo left">Company Logo</a>
                <div class="right hide-on-med-and-down account-btn">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href="register.html">ثبت نام</a>
                    <span>|</span>
                    <a href="login.html">ورود</a>
                </div>

                <a href="#" class="sidenav-trigger right" data-target="mobile-link"><i
                        class="material-icons">menu</i></a>
                <ul class="right navbar hide-on-med-and-down">
                    <li><a href="index.html"><i class="fa fa-home"></i> خانه</a></li>
                    <li><a href="products.html"><i class="fas fa-store-alt"></i> محصولات</a></li>
                    <li><a href="blog.html"><i class="fa fa-blog"></i> وبلاگ</a></li>
                    <li><a href="contact.html"><i class="fa fa-phone"></i> تماس با ما</a></li>
                    <li><a href="about.html"><i class="fa fa-info"></i> درباره ما</a></li>
                </ul>

                <ul class="sidenav direction-right" id="mobile-link">
                    <li><a href="register.html"><i class="fa fa-user"></i> ثبت نام</a></li>
                    <li><a href="login.html"><i class="fas fa-sign-in-alt"></i> ورود</a></li>
                    <li><a href="index.html"><i class="fa fa-home"></i> خانه</a></li>
                    <li><a href="products.html"><i class="fas fa-store-alt"></i> محصولات</a></li>
                    <li><a href="blog.html"><i class="fa fa-blog"></i> وبلاگ</a></li>
                    <li><a href="contact.html"><i class="fa fa-phone"></i> تماس با ما</a></li>
                    <li><a href="about.html"><i class="fa fa-info"></i> درباره ما</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <section>
        <div class="row">
            <div class="col s12 l6">
                <img src="images/product/1.jpg" alt="">
            </div>
            <div class="col s12 l6">
                <table>
                    <thead>
                        <tr>
                            <th class="center" colspan="2">اطلاعات</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="td-title">نام محصول</td>
                            <td>لباس بارونی</td>
                        </tr>
                        <tr>
                            <td class="td-title">رنگ های موجود</td>
                            <td>قرمز - آبی - زرد</td>
                        </tr>
                        <tr>
                            <td class="td-title">سایزهای موجود</td>
                            <td>M - X - XL</td>
                        </tr>
                        <tr>
                            <td class="td-title">ساخت</td>
                            <td>ایران</td>
                        </tr>
                        <tr>
                            <td class="td-title">قیمت</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td class="td-title">طرح</td>
                            <td>ساده</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container col center">
                <!-- <input class="col l2" type="number" value="1" min="1" max="5"> -->
                <span>تعداد : 1</span><br>
                <button class="btn blue">افزودن به سبد خرید</button>
            </div>
        </div>
    </section>


    <footer class="blue darken-2">
        <div class="container">
            <div class="row">
                <div class="col l3 s12 right">
                    <h5 class="white-text">شبکه های اجتماعی</h5>
                    <div class="row">
                        <div class="col s3"><a class="white-text" href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                        <div class="col s3"><a class="white-text" href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        </div>
                        <div class="col s3"><a class="white-text" href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        </div>
                        <div class="col s3"><a class="white-text" href="#"><i class="fab fa-telegram fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="map-div col s12 l9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6866.57227519263!2d51.38914525245347!3d35.68708212037268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00ffd184d199%3A0xa72063b774d0658c!2sMeydan-e-Horr%20Metro%20Station!5e0!3m2!1sen!2s!4v1638781575837!5m2!1sen!2s"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row flex">
                <div class="col l3 s12">
                    <h6 class="white-text">دسترسی سریع</h6>
                    <ul>
                        <li>
                            <a href="index.html" class="white-text">خانه</a>
                        </li>
                        <li>
                            <a href="products.html" class="white-text">محصولات</a>
                        </li>
                        <li>
                            <a href="blog.html" class="white-text">وبلاگ</a>
                        </li>
                        <li>
                            <a href="contact.html" class="white-text">تماس با ما</a>
                        </li>
                        <li>
                            <a href="about.html" class="white-text">درباره ما</a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6 l3">
                    <h6 class="white-text">خدمات مشتری</h6>
                    <ul>
                        <li>
                            <a href="#" class="white-text">پرسش های متداول</a>
                        </li>
                        <li>
                            <a href="#" class="white-text">حریم خصوصی</a>
                        </li>
                        <li>
                            <a href="#" class="white-text">گارانتی بازگشت وجه</a>
                        </li>
                        <li>
                            <a href="#" class="white-text">شرایط استفاده</a>
                        </li>
                        <li>
                            <a href="#" class="white-text">درباره ما</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright blue lighten-1">
            <div class="container white-text center">
                <a class="white-text" href="#">ساخته شده توسط افشار شریفی و محمد اسماعیلی</a>
            </div>
        </div>
    </footer>


    <!-- JQuery -->
    <script src="js/jquery-3.5.1.js"></script>
    <!-- Materilize -->
    <script src="css/materialize/js/materialize.min.js"></script>
    <!-- Font Awesome -->
    <script src="css/fontawesome/js/all.js"></script>

    <script>
        $(document).ready(function () {
            $('.sidenav').sidenav({
                edge: 'right'
            });
            $('.parallax').parallax();
            $('.carousel').carousel({
                // fullWidth: true,
                // indicators: true
                padding: false
            });
            $('.tabs').tabs();
        })

        $(document).ready(function () {
            $('.slider').slider();
        });
    </script>
</body>

</html>