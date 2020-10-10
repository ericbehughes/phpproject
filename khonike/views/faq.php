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
                                    <div class="accordion" id="faqExample">
                                        <div class="card">
                                            <div class="card-header p-2" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link col-12" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Q: Are there any fees associated with signing up as a customer?
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                                                <div class="card-body">
                                                    <b>Answer:</b> No. The website is completely free to use. Simply book a visit with our real-estate agents and enjoy the search!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-2" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed col-12" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Q: Are there any fees associated with signing up as a vendor?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                                                <div class="card-body">
                                                    No. Once you are signed up as a vendor, you are free to post as many properties as you like. Just remember to delete them once they've been sold!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-2" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed col-12" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Q. What if I can't remember my password?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                                <div class="card-body">
                                                    Simply click on the "I forgot my password" link on the login page.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-2" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed col-12" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Q. My visit was declined?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                                                <div class="card-body">
                                                    The visit may have been declined due to a sudden emergency. Book a second visit with the agent, if that fails, use the contact form to reach us.
                                                </div>
                                            </div>
                                        </div>
                                    
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--New property section end-->

    <?php
    include_once('footer.php');
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