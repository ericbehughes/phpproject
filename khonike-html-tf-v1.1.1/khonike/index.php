<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khonike - Real Estate Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">   
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>
    
<div id="main-wrapper">
   
    <!--Header section start-->
    <?php 
    include_once('header.php');
    ?>
    <!--Header section end-->
    
    <!--slider section start-->
    <div class="hero-section section position-relative">
           
        <!--Hero Item start-->
        <div class="hero-item align-items-end">
			<ul class="kenburns-slideshow">
				<li><img src="assets/images/hero/hero-1.jpg" alt=""></li>
				<li><img src="assets/images/hero/hero-2.jpg" alt=""></li>
				<li><img src="assets/images/hero/hero-3.jpg" alt=""></li>
			</ul>
            <div class="container">
                <div class="row">
                    <div class="col-12">

						<!--Property Search start-->
						<div class="property-search hero-property-search">
							<h1 class="title">Find Your <span>Dream</span> Home</h1>
							<form action="#">
								<div>
									<select class="nice-select">
                                        <option>All Cities</option>
                                        <option>Montreal</option>
									</select>
								</div>

								<div>
									<select class="nice-select">
										<option>For Rent</option>
										<option>For Sale</option>
									</select>
								</div>

								<div>
									<select class="nice-select">
										<option>Structure</option>
										<option>Apartment</option>
										<option>Cafe</option>
										<option>House</option>
										<option>Restaurant</option>
										<option>Store</option>
										<option>Villa</option>
									</select>
								</div>

								<div>
									<select class="nice-select">
										<option>Bedrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>

								<div>
									<select class="nice-select">
										<option>Bathrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>

								<div>
									<div id="search-price-range"></div>
								</div>

								<div>
									<button>search</button>
								</div>

							</form>

						</div><!--Property Search end-->

                    </div>
                </div>
            </div>
        </div>
        <!--Hero Item end-->
        
    </div>
    <!--slider section end-->

    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection-->
    <div class="feature-section feature-section-border-bottom section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                       
				<!--Feature start-->
				<div class="col-lg-3 col-sm-6 col-12 mb-30">
					<div class="feature-2">
						<div class="icon"><i class="pe-7s-piggy"></i></div>
						<div class="content">
							<h4>Low Cost</h4>
							<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
						</div>
					</div>
				</div>
				<!--Feature end-->

				<!--Feature start-->
				<div class="col-lg-3 col-sm-6 col-12 mb-30">
					<div class="feature-2">
						<div class="icon"><i class="pe-7s-display1"></i></div>
						<div class="content">
							<h4>Good Marketing</h4>
							<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
						</div>
					</div>
				</div>
				<!--Feature end-->

				<!--Feature start-->
				<div class="col-lg-3 col-sm-6 col-12 mb-30">
					<div class="feature-2">
						<div class="icon"><i class="pe-7s-map"></i></div>
						<div class="content">
							<h4>Easy to Find</h4>
							<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
						</div>
					</div>
				</div>
				<!--Feature end-->

				<!--Feature start-->
				<div class="col-lg-3 col-sm-6 col-12 mb-30">
					<div class="feature-2">
						<div class="icon"><i class="pe-7s-shield"></i></div>
						<div class="content">
							<h4>Reliable</h4>
							<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
						</div>
					</div>
				</div>
				<!--Feature end-->
                
            </div>
        </div>
    </div>
    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection end-->

    <!--Feature property section start-->
    <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            
            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Featured Properties</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->
            
            <div class="row">
               
                <!--Property Slider start-->
                <div class="property-carousel section">

                    <!--Property start-->
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <a href="single-properties.html"><img src="assets/images/property/property-1.jpg" alt=""></a>
                                <ul class="property-feature">
                                    <li>
                                        <span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>
                                    </li>
                                    <li>
                                        <span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>
                                    </li>
                                    <li>
                                        <span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>
                                    </li>
                                    <li>
                                        <span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">568 E 1st Ave, Miami</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">$550<span>M</span></span>
                                        <span class="type">For Rent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Property end-->

                    <!--Property start-->
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <span class="label">Feature</span>
                                <a href="single-properties.html"><img src="assets/images/property/property-2.jpg" alt=""></a>
                                <ul class="property-feature">
                                    <li>
                                        <span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>
                                    </li>
                                    <li>
                                        <span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>
                                    </li>
                                    <li>
                                        <span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>
                                    </li>
                                    <li>
                                        <span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">Marvel de Villa</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">450 E 1st Ave, New Jersey</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">$2550</span>
                                        <span class="type">For Sale</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Property end-->

                    <!--Property start-->
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <span class="label">popular</span>
                                <a href="single-properties.html"><img src="assets/images/property/property-3.jpg" alt=""></a>
                                <ul class="property-feature">
                                    <li>
                                        <span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>
                                    </li>
                                    <li>
                                        <span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>
                                    </li>
                                    <li>
                                        <span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>
                                    </li>
                                    <li>
                                        <span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">Ruposi Bangla Cottage</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">215 L AH Rod, California</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">$550<span>M</span></span>
                                        <span class="type">For Rent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Property end-->

                    <!--Property start-->
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <a href="single-properties.html"><img src="assets/images/property/property-4.jpg" alt=""></a>
                                <ul class="property-feature">
                                    <li>
                                        <span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>
                                    </li>
                                    <li>
                                        <span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>
                                    </li>
                                    <li>
                                        <span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>
                                    </li>
                                    <li>
                                        <span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">MayaKanon de Villa</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">12 EA 1st Ave, Washington</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">$550<span>M</span></span>
                                        <span class="type">For Rent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Property end-->

                    <!--Property start-->
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <a href="single-properties.html"><img src="assets/images/property/property-5.jpg" alt=""></a>
                                <ul class="property-feature">
                                    <li>
                                        <span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>
                                    </li>
                                    <li>
                                        <span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>
                                    </li>
                                    <li>
                                        <span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>
                                    </li>
                                    <li>
                                        <span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">Azorex de South Villa</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">668 L 2nd Ave, Boston</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">$2550</span>
                                        <span class="type">For Sale</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Property end-->

                    <!--Property start-->
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <span class="label">Feature</span>
                                <a href="single-properties.html"><img src="assets/images/property/property-6.jpg" alt=""></a>
                                <ul class="property-feature">
                                    <li>
                                        <span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>
                                    </li>
                                    <li>
                                        <span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>
                                    </li>
                                    <li>
                                        <span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>
                                    </li>
                                    <li>
                                        <span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">Radison de Villa</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">12 1st Ave, New Yourk</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">$550<span>M</span></span>
                                        <span class="type">For Rent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Property end-->

                </div>
                <!--Property Slider end-->
                
            </div>
            
        </div>
    </div>
    <!--Feature property section end-->

    <!--CTA Section start-->
    <div class="cta-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50" style="background-image: url(assets/images/bg/cta-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <!--CTA start-->
                    <div class="cta-content text-center">
                        <h1>Want to <span>Buy</span> New Property or <span>Sell</span> One <br> Do it in Seconds With <span>Khonike</span></h1>
                        <div class="buttons">
                            <a href="add-properties.html">Add Property</a>
                            <a href="properties.html">Browse Properties</a>
                        </div>
                    </div>
                    <!--CTA end-->
                    
                </div>
            </div>
        </div>
    </div>
    <!--CTA Section end-->
    
    <!--Brand section start-->
    <div class="brand-section section pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
           
            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Our Partners</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->
            
            <div class="row">
                
                <!--Brand Slider start-->
                <div class="brand-carousel section">
                    <div class="brand col"><img src="assets/images/brands/brand-1.png" alt=""></div>
                    <div class="brand col"><img src="assets/images/brands/brand-2.png" alt=""></div>
                    <div class="brand col"><img src="assets/images/brands/brand-3.png" alt=""></div>
                    <div class="brand col"><img src="assets/images/brands/brand-4.png" alt=""></div>
                    <div class="brand col"><img src="assets/images/brands/brand-5.png" alt=""></div>
                    <div class="brand col"><img src="assets/images/brands/brand-6.png" alt=""></div>
                </div>
                <!--Brand Slider end-->
                
            </div>
            
        </div>
    </div>
    <!--Brand section end-->
    
    <!--Footer section start-->
    <footer class="footer-section section" style="background-image: url(assets/images/bg/footer-bg.jpg)">
       
        <!--Footer Top start-->
        <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
            <div class="container">
                <div class="row row-25">
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <img src="assets/images/logo-footer.png" alt="">
                        <p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do to eiumod tempor dolor sit amet, ctetur adipiscing elit seddo dolor sit amet.</p>
                        <div class="footer-social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <!--Footer Widget end-->
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title"><span class="text">Contact us</span><span class="shape"></span></h4>
                        <ul>
                            <li><i class="fa fa-map-o"></i><span>256, 1st AVE, Manchester 125 , Noth England</span></li>
                            <li><i class="fa fa-phone"></i><span><a href="#">+012 345 678 102</a><a href="#">+012 345 678 101</a></span></li>
                            <li><i class="fa fa-envelope-o"></i><span><a href="#">info@example.com</a><a href="#">www.example.com</a></span></li>
                        </ul>
                    </div>
                    <!--Footer Widget end-->
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title"><span class="text">Useful links</span><span class="shape"></span></h4>
                        <ul>
                            <li><a href="#">Rental Builidngs</a></li>
                            <li><a href="#">Browe all Categories</a></li>
                            <li><a href="#">Top Mortagages Rates</a></li>
                            <li><a href="#">RentalTerms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                       </ul>
                    </div>
                    <!--Footer Widget end-->    
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title"><span class="text">Newsletter</span><span class="shape"></span></h4>
                        
                        <p>Subscribe our newsletter and get all latest news about our latest properties, promotions, offers and discount</p>
                        
                        <form id="mc-form" class="mc-form footer-newsletter" >
                            <input id="mc-email" type="email" autocomplete="off" placeholder="Email Here.." />
                            <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                        
                    </div>
                    <!--Footer Widget end-->
                    
                </div>
            </div>
        </div>
        <!--Footer Top end-->
        
        <!--Footer bottom start-->
        <div class="footer-bottom section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright text-center">
                            <p>Copyright &copy;2018 <a  href="#">Khonike</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->
        
     </footer>
     <!--Footer section end-->
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/map-place.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>