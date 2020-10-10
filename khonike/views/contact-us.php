<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khonike - Real Estate Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="../assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/iconfont.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/helper.css">
    <link rel="stylesheet" href="../assets/css/style.css">   
    <!-- Modernizr JS -->
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <style>
         #pageBanner {
            background-image: url(../assets/images/bg/page-banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: relative;
            z-index: 1;
            padding: 100px 0;
            margin-top: 91px;
        }
    </style>
</head>

<body>
    
<div id="main-wrapper">
   
    <?php 
    include_once('header.php');
    ?>
    
    <!--Page Banner Section start-->
    <div id="pageBanner" class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-banner-title">Contact us</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Section end-->

    <!--New property section start-->
    <div class="contact-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <div class="row">
                        
                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-map"></i>
                            <h4>address</h4>
                            <p>Place Ville Marie Suite 205. Montreal, Quebec</p>
                        </div>
                        
                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-phone"></i>
                            <h4>Phone</h4>
                            <p><a href="#">514-679-8722</a><a href="#">514-889-0066</a></p>
                        </div>
                        
                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-global"></i>
                            <h4>Website</h4>
                            <p><a href="#">info@khonikemontreal.com</a></p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--New property section end-->

    <!--New property section start-->
    <div class="contact-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
           
            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Leave a Message</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->
            
            <div class="row">
                
                <div class="contact-form-wrap col-12">
                    <div class="contact-form">
                        <form id="contact-form" action="../assets/php/mail.php">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-30"><input name="name" type="text" placeholder="Name"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="email" type="email" placeholder="Email"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="phone" type="text" placeholder="Phone"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="subject" type="text" placeholder="Subject"></div>
                                <div class="col-12 mb-30"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-12 text-center"><button class="btn">submit</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--New property section end-->
    
    <?php 
    include_once('header.php');
    ?>
        
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script src="../assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/map-place.js"></script>
<script src="../assets/js/main.js"></script>

</body>

</html>