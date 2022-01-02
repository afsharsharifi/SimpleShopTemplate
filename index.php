<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت فروشگاهی</title>
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
    <header>
        <nav class="nav-wrapper navbar-bg">
            <div class="container">
                <a href="#" class="brand-logo left">Company Logo</a>
                <div class="right hide-on-med-and-down account-btn">
					
                    <?php     session_start(); if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                        <a href="logout.php">خروج</a>
                    <?php } else { ?>
                        <a href="login.php">ورود</a>
                        <span>|</span>
                        <a href="register.php">ثبت نام</a>
                    <?php } ?>
                </div>

                <a href="#" class="sidenav-trigger right" data-target="mobile-link"><i class="material-icons">menu</i></a>
                <ul class="right navbar hide-on-med-and-down">
                    <li><a href="index.php"><i class="fa fa-home"></i> خانه</a></li>
                    <li><a href="products.php"><i class="fas fa-store-alt"></i> محصولات</a></li>
                    <li><a href="contact.php"><i class="fa fa-phone"></i> تماس با ما</a></li>
                    <li><a href="about.php"><i class="fa fa-info"></i> درباره ما</a></li>
                </ul>

                <ul class="sidenav direction-right" id="mobile-link">
					 <?php  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
					                    <li><a href="register.php"><i class="fa fa-user"></i> خروج</a></li>
					<?php }else{ ?>
                    <li><a href="register.php"><i class="fa fa-user"></i> ثبت نام</a></li>
                    <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> ورود</a></li>
					<?php } ?>
                    <li><a href="index.php"><i class="fa fa-home"></i> خانه</a></li>
                    <li><a href="products.php"><i class="fas fa-store-alt"></i> محصولات</a></li>
                    <li><a href="contact.php"><i class="fa fa-phone"></i> تماس با ما</a></li>
                    <li><a href="about.php"><i class="fa fa-info"></i> درباره ما</a></li>
                </ul>
            </div>
        </nav>
        <div class="header-texts white-text center row">
            <h1>یک استایل متفاوت رو تجربه کن : )</h1>
        </div>
    </header>
    <section class="latest-product">
        <h5>آخرین محصولات</h5>
        <div class="row center">
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/1.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">بارانی زنانه کیکی رایکی</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>200.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/2.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">کاپشن ورزشی مردانه</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>120.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/3.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">سوییشرت مردانه باینت</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>80.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/4.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">مانتو زنانه السانا</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>150.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/5.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">پالتو زنانه تولیکا</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>125.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/6.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">کت زنانه ایزی دو</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>75.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/7.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">تی شرت مردانه فرد</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>140.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/9.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">پولو شرت آستین بلند</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>350.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>

            <button class="btn-flat blue white-text"><a class="white-text" href="products.php">مشاهده
                    بیشتر</a></button>
        </div>
    </section>

    <section class="parallax-container">
        <div class="parallax">
            <img src="images/slider/slider1.jpg" alt="">
        </div>
    </section>

    <section class="latest-product">
        <h5>پرطرفدارترین محصولات</h5>
        <div class="row center">
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/1.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">بارانی زنانه کیکی رایکی</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>200.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/2.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">کاپشن ورزشی مردانه</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>120.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/3.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">سوییشرت مردانه باینت</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>80.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/4.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">مانتو زنانه السانا</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>150.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/5.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">پالتو زنانه تولیکا</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>125.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/6.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">کت زنانه ایزی دو</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>75.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/7.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">تی شرت مردانه فرد</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>140.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/product/9.jpg" alt="">
                        <a href="#" class="halfway-fab btn-floating blue pulse">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h6 class="card-title">پولو شرت آستین بلند</h6>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                    </div>
                    <div class="card-action">
                        <span>350.000 تومان</span>
                        <a class="blue-text" href="product-info.php">اطلاعات بیشتر <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>

            <button class="btn-flat blue white-text"><a class="white-text" href="products.php">مشاهده
                    بیشتر</a></button>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6866.57227519263!2d51.38914525245347!3d35.68708212037268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00ffd184d199%3A0xa72063b774d0658c!2sMeydan-e-Horr%20Metro%20Station!5e0!3m2!1sen!2s!4v1638781575837!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row flex">
                <div class="col l3 s12">
                    <h6 class="white-text">دسترسی سریع</h6>
                    <ul>
                        <li>
                            <a href="index.php" class="white-text">خانه</a>
                        </li>
                        <li>
                            <a href="products.php" class="white-text">محصولات</a>
                        </li>
                        <li>
                            <a href="blog.php" class="white-text">وبلاگ</a>
                        </li>
                        <li>
                            <a href="contact.php" class="white-text">تماس با ما</a>
                        </li>
                        <li>
                            <a href="about.php" class="white-text">درباره ما</a>
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
        $(document).ready(function() {
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

        $(document).ready(function() {
            $('.slider').slider();
        });
    </script>
</body>

</html>