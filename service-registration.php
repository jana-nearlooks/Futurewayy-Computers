<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
   

        $RequestInfo = $_POST['requestinfo'];
        $RequestDesc = $_POST['requestdesc'];
        $RequestName = $_POST['requestername'];
        $RequesterMobile = $_POST['requestermobile'];
        $RequesterEmail = $_POST['requesteremail'];
        $RequesterAddress = $_POST['requesteraddress'];
        $RequestDate = $_POST['requestdate'];

        $requete = $con->prepare("INSERT INTO requester_list(RequestInfo,RequestDesc,RequestName,RequesterMobile,RequesterEmail,RequesterAddress,RequestDate) VALUES('$RequestInfo','$RequestDesc',' $RequestName','$RequesterMobile','$RequesterEmail','$RequesterAddress', '$RequestDate')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
        echo '<script>alert("Thanks for submitting this form");</script>';
        // header('location:index.php');
    }
  
    ?>




<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Futurewayy - Registration</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/base.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
<header class="header axil-header header-style-1">
    <div class="header-top-campaign mb-4">
        <div class="container position-relative">
            <div class="campaign-content">
                   <p>Looking for a best digital marketing in theni <a href="https://nearlooks.com/" target="_blank">Discover More</a></p>
            </div>
        </div>
        <button class="remove-campaign"><i class="fal fa-times"></i></button>
    </div>
    <!-- <div class="axil-header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="header-top-dropdown">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                English
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">AUD</a></li>
                                <li><a class="dropdown-item" href="#">EUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-top-link">
                        <ul class="quick-link">
                            <li><a href="#">Help</a></li>
                            <li><a href="sign-up.php">Join Us</a></li>
                            <li><a href="login.php">Sign In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="index.php" class="logo logo-dark">
                        <img src="assets/images/logo/logo.png" alt="Site Logo" style="width: 200px;">
                    </a>
                    <a href="index.php" class="logo logo-light">
                        <img src="assets/images/logo/logo.png" alt="Site Logo" style="width: 200px;">
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="index.php" class="logo">
                                <img src="assets/images/logo/logo.png" alt="Site Logo" style="width: 200px;"> 
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li class="">
                                <a href="index.php">Home</a>
                                <!-- <ul class="axil-submenu">
                                    <li><a href="index-1.php">Home - Electronics</a></li>
                                    <li><a href="index-2.php">Home - NFT</a></li>
                                    <li><a href="index-3.php">Home - Fashion</a></li>
                                    <li><a href="index-4.php">Home - Jewellery</a></li>
                                    <li><a href="index-5.php">Home - Furniture</a></li>
                                    <li><a href="index-7.php">Home - Multipurpose</a></li>
                                    <li><a href="https://new.axilthemes.com/demo/template/etrade-rtl/">RTL Version</a></li>
                                </ul> -->
                            </li>
                            <li><a href="about-us.php">About us</a></li>
                            <li class="">
                                <a href="our-products.php">Our Products</a>
                                <!-- <ul class="axil-submenu">
                                    <li><a href="shop-sidebar.php">Shop With Sidebar</a></li>
                                    <li><a href="our-products.php">Shop no Sidebar</a></li>
                                    <li><a href="#">Product Variation 1</a></li>
                                    <li><a href="single-product-2.php">Product Variation 2</a></li>
                                    <li><a href="single-product-3.php">Product Variation 3</a></li>
                                    <li><a href="single-product-4.php">Product Variation 4</a></li>
                                    <li><a href="single-product-5.php">Product Variation 5</a></li>
                                    <li><a href="single-product-6.php">Product Variation 6</a></li>
                                    <li><a href="single-product-7.php">Product Variation 7</a></li>
                                    <li><a href="single-product-8.php">Product Variation 8</a></li>
                                </ul> -->
                            </li>
                            <li class="">
                                <a href="our-service.php">Our Service</a>
                                <!-- <ul class="axil-submenu">
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="cart.php">Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="my-account.php">Account</a></li>
                                    <li><a href="sign-up.php">Sign Up</a></li>
                                    <li><a href="login.php">Sign In</a></li>
                                    <li><a href="forgot-password.php">Forgot Password</a></li>
                                    <li><a href="reset-password.php">Reset Password</a></li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="coming-soon.php">Coming Soon</a></li>
                                    <li><a href="404.php">404 Error</a></li>
                                    <li><a href="typography.php">Typography</a></li>
                                </ul> -->
                            </li>
                        
                            <li class="">
                                <a href="#">Blog</a>
                                <!-- <ul class="axil-submenu">
                                    <li><a href="blog.php">Blog List</a></li>
                                    <li><a href="blog-grid.php">Blog Grid</a></li>
                                    <li><a href="blog-details.php">Standard Post</a></li>
                                    <li><a href="blog-gallery.php">Gallery Post</a></li>
                                    <li><a href="blog-video.php">Video Post</a></li>
                                    <li><a href="blog-audio.php">Audio Post</a></li>
                                    <li><a href="blog-quote.php">Quote Post</a></li>
                                </ul> -->
                            </li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    
                    <ul class="action-list">
                        
                    <a class="nav-item nav-link" href="service-registration.php" aria-selected="false" tabindex="-1" role="tab" style="padding: 10px; background-color: red; border-radius: 5px; box-shadow: 1px 2px 10px 0;border: none; color: white;"><i class="fa fa-book"></i> Service</a>

                        
                    
                        <!-- <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                            <div class="my-account-dropdown">
                                <span class="title">QUICKLINKS</span>
                                <ul>
                                    <li>
                                        <a href="my-account.php">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#">Initiate return</a>
                                    </li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                    <li>
                                        <a href="#">Language</a>
                                    </li>
                                </ul>
                                <div class="login-btn">
                                    <a href="login.php" class="axil-btn btn-bg-primary">Login</a>
                                </div>
                                <div class="reg-footer text-center">No account yet? <a href="sign-up.php" class="btn-link">REGISTER HERE.</a></div>
                            </div>
                        </li> -->
                        <li class="axil-mobile-toggle ml-10">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>

    <main class="main-wrapper">

        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap" >
            <div class="container">
                <form action="service-registration.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                       <img src="assets/images/service image.png" alt="service img" class="mt-3">
                          
                        </div>
                        <div class="col-lg-6">
                            <div class="axil-order-summery order-checkout-summery" style="background-color:transparent">
                                <div class="axil-checkout-billing" >
                                <span class="title-highlighter highlighter-primary2 mb-5"> <i class="fa fa-gear fa-spin"></i>Book a service</span>
                            
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Request Information<span>*</span></label>
                                                <input type="text" id="inputRequestInfo" name="requestinfo" oninput="validateForm()" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Description<span>*</span></label>
                                                <input type="text" id="inputRequestDescription" name="requestdesc" oninput="validateForm()" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Name<span>*</span></label>
                                        <input type="text" id="inputName" name="requestername" oninput="validateForm()" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No<span>*</span></label>
                                        <input type="text"  id="inputMobile" name="requestermobile" oninput="validateForm()" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span>*</span></label>
                                        <input type="email" id="inputEmail" name="requesteremail" oninput="validateForm()" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address<span>*</span></label>
                                       <textarea  cols="20" rows="5"  id="inputAddress" name="requesteraddress" oninput="validateForm()" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Request Date<span>*</span></label>
                                        <input type="date" id="inputDate" name="requestdate" oninput="validateForm()" required>
                                    </div>
                                   <center><button type="submit" id="submit-btn"  style="width: 25%;" name="submit" disabled>Submit</button></center> 
                                   <style>
                                        #submit-btn {
        background-color: #4CAF50; 
        color: white; 
        cursor: pointer; 
        padding : 2%;
        border-radius : 5px;
    }


    #submit-btn:disabled {
        background-color: #cccccc; 
        color: #666666; 
        cursor: not-allowed; 
        padding : 2%;
        border-radius : 5px;
    }
                                   </style>
                 </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <!-- End Checkout Area  -->

    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Start Footer Area  -->
   <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <!-- <div class="logo mb--30">
                            <a href="index.php">
                                <img class="light-logo" src="assets/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
                            <div class="inner">
                                <p>Old Busstand, 785 N/10, TKR Tower, <br> Sri Navamani Jewellery Back Side, Madurai Main Rd, <br> Theni, Tamilnadu - 625531.
                                </p>
                                <ul class="support-list-item">
                                    <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i> info@futurewayycomputers.com</a></li>
                                    <li><a href="tel:8344455531"><i class="fal fa-phone-alt"></i> +91-8344455531</a></li>
                                    <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Account</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="login.php">Admin Login</a></li>
                                    <li><a href="service-registration.php">Service Registration</a></li>
                                    

                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Quick Link</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About us</a></li>
                                    <li><a href="our-products.php">Our Products</a></li>
                                    <li><a href="our-service.php">Our Services</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Get Touch With US</h5>
                            <div class="inner">
                             
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                       <a href=""> <img src="assets/images/logo/logo.png" alt="Futurewayy Computers"></a>
                                    </div>
                                    <div class="app-link">
                                        <a href="#">
                                            <img src="assets/images/others/app-store.png" alt="App Store">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/others/play-store.png" alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2023. All rights reserved by <a target="_blank" href="https://nearlooks.com/">Nearlook</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Thanks for choosing Futurewayy Computers &#128578;</span>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->


    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <h6 class="title">24 Result Found</h6>
                    <a href="our-products.php" class="view-all">View All</a>
                </div>
                <div class="psearch-results">
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.php">
                                <img src="assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.php">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.php" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.php" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.php">
                                <img src="assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.php">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.php" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.php" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->



    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product.php"><img src="assets/images/product/electric/product-01.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-3.php">Wireless PS Handler</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-2.php"><img src="assets/images/product/electric/product-02.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(4)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-2.php">Gradient Light Keyboard</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="5">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-3.php"><img src="assets/images/product/electric/product-03.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(6)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product.php">HD CC Camera</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="100">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$610.00</span>
                </h3>
                <div class="group-btn">
                    <a href="cart.php" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="checkout.php" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->
<script>
     

    function validateForm() {
        var requestInfo = document.getElementById('inputRequestInfo').value;
        var requestDesc = document.getElementById('inputRequestDescription').value;
        var requesterName = document.getElementById('inputName').value;
        var requesterMobile = document.getElementById('inputMobile').value;
        var requesterEmail = document.getElementById('inputEmail').value;
        var requesterAddress = document.getElementById('inputAddress').value;
        var requestDate = document.getElementById('inputDate').value;

        // Add your specific validation logic here
        var anyEmpty = requestInfo === '' || requestDesc === '' || requesterName === '' || requesterMobile === '' || requesterEmail === '' || requesterAddress === '' || requestDate === '';

        // Enable or disable the submit button based on the validation
        document.getElementById('submit-btn').disabled = anyEmpty;
    }



</script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/counterup.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 13:35:00 GMT -->
</html>