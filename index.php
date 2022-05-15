<!doctype html>
<html lang="en">

<!-- create a session for user -->
<?php

session_start();
require_once "Public/dbconnect.php";

if (isset($_SESSION['username'])) {
    $_SESSION['username'] = '?';
}
if (!isset($_SESSION['is_admin'])) {
    $_SESSION['is_admin'] = 0;
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- tab icon -->
    <link rel="icon" href="Assets/img/Logo.jpg">

    <title>Hellenic Bookstore</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <!-- bootstrap 4.6 -->
    <link href="Assets/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- css details -->
    <link href="Assets/css/home.css" rel="stylesheet">
    <link href="Assets/css/productsinfo.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="Assets/bootstrap/dashboard.css" rel="stylesheet">

</head>

<body>
    <?php
    if (isset($_GET["sup"])) {
        $sup = $_GET["sup"];
        if ($sup == "true") {
            echo '<br><br> <div class="alert alert-success 
        alert-dismissible fade show" role="alert" id="popup">
        <strong>Success!</strong> Your account is 
        now created and you can login. 
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button> 
    </div> ';
        }
    }
    ?>

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="collapse navbar-collapse d-flex flex-column flex-md-row p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h5 class="mr-md-auto font-weight-normal">Hellenic Bookstore</h5>
            <nav class="my-2 my-md-0 mr-md-3 navbar-nav" id="navbarsExampleDefault">
                <a class="p-2 text-dark" href="index.php?p=start">Home</a>
                <a class="p-2 text-dark" href="?p=products">Products</a>
                <a class="p-2 text-dark" href="?p=shopinfo">About us</a>
                <a class="p-2 text-dark" href="?p=blog">Blogs</a>
                <a class="p-2 text-dark" href="?p=cart">Cart</a>
            </nav>
            <a class="btn btn-outline-primary fixed-right" href="?p=login">Sign in</a>
        </div>
    </nav>

    <div class="row main-cont">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

            <?php
            if (!isset($_REQUEST['p'])) {
                $_REQUEST['p'] = 'start';
            }
            $p = $_REQUEST['p'];
            // list of the permited pages
            $pages = array('blog', 'start', 'shopinfo', 'login', 'do_login', 'after_login', 'logout', 'myinfo', 'products', 'cart', 'productinfo', 'add_cart', 'empty_cart', 'buy_cart');

            $ok = false;
            foreach ($pages as $pp) {
                if ($pp == $p) {
                    require "Public/$p.php";
                    $ok = true;
                }
            }
            if (!$ok) {
                print "Page does not exists";
            }
            ?>
        </div>
        <div class="col-sm-1"></div>
    </div>


    <div class="footer">
        <div class="row">
            <div class="col-md-1"> 
            </div>
            <div class="col-md-2 footer-margin">
                <h3>Our Social Media</h3>
            </div>
            <div class="col-md-2 footer-margin">
                <div class="row">
                    <div class="col-md" style="margin-top: 5px;">
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Assets/img/facebook.png" class="icon-sosmed" alt="Logo">
                        </a>
                        <div style="display:inline; margin:5px;"> HBookstore </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md" style="margin-top: 10px;">
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="Assets/img/instagram.png" class="icon-sosmed" alt="Logo">
                        </a>
                        <div style="display:inline; margin:5px;"> HellenicBstore </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 footer-margin">
                <div class="row">
                    <div class="col-md" style="margin-top: 5px;">
                        <a href="https://www.twitter.com" target="_blank">
                            <img src="Assets/img/twitter.png" class="icon-sosmed" alt="Logo">
                        </a>
                        <div style="display:inline; margin:5px;"> @HBookstore </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md" style="margin-top: 10px;">
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="Assets/img/youtube.png" class="icon-sosmed" alt="Logo">
                            </a>
                        <div style="display:inline; margin:5px;"> HelleBookstore </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-margin">
                <div class="row">
                    <div class="col-md" style="margin-top: 5px;">
                        <h5 style="margin-bottom: 2px;">Contact us</h5>
                        <p>info@hellenicBstore.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h5 style="margin-bottom: 2px;">Address</h5>
                        <p>Platia Ipporodomiou 100, Thessaloniki, Greece</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"> 
            </div>
        </div>
        <div class="row">
            <div class="col-md footer-bmargin">
                <hr>
                <p class="footer-copyright">
                    &copy; Hellenic Bookstore 2022
                </p>
            </div>
        </div>
    </div>

    <!-- Jquery 3.5.1  -->
    <script src="Assets/bootstrap/jquery-3.5.1.min.js"></script>

    <!-- bootstrap 4.6 javascript  -->
    <script src="Assets/bootstrap/bootstrap.min.js"></script>

    <!-- popper 1.16.1 for interactive  -->
    <script src="Assets/bootstrap/popper-1.16.1.min.js"></script>

</body>

</html>