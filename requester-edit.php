<?php
// Start the session
session_start();

// Include the database connection file
include 'conixion.php';

// Get the user ID from the session
$id = $_SESSION['id'];

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $RequestInfo = $_POST['requestinfo'];
    $RequestDesc = $_POST['requestdesc'];
    $RequestName = $_POST['requestername'];
    $RequesterMobile = $_POST['requestermobile'];
    $RequesterEmail = $_POST['requesteremail'];
    $RequesterAddress = $_POST['requesteraddress'];
    $RequestStatus = $_POST['requeststatus'];
    $RequestDate = $_POST['requestdate'];

    // Prepare and execute the update query
    $requete = $con->prepare("UPDATE requester_list 
        SET 
        RequestInfo = '$RequestInfo',
        RequestDesc = '$RequestDesc',
        RequestName = '$RequestName',
        RequesterMobile = '$RequesterMobile',
        RequesterEmail = '$RequesterEmail',
        RequesterAddress = '$RequesterAddress',
        RequestStatus = '$RequestStatus',
        RequestDate = '$RequestDate'
        WHERE Id = $id");

    $res = $requete->execute();

    // Redirect to the request.php page after the update
    header("location:request.php");
}

// Fetch the user data for pre-filling the form
$_SESSION["id"] = $_GET['Id'];
$id = $_SESSION["id"];
$statement = $con->prepare("SELECT * FROM requester_list WHERE Id = $id");
$statement->execute();
$table = $statement->fetch();

?>








<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Futurewayy - Service Edit</title>
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

</head>


<body class="sticky-header">



    <main class="main-wrapper">

        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap" >
            <div class="container">
                <form action="requester-edit.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                       <img src="assets/images/service image.png" alt="service img" class="mt-3">
                          
                        </div>
                        <div class="col-lg-6">
                            <div class="axil-order-summery order-checkout-summery" style="background-color:transparent">
                                <div class="axil-checkout-billing" >
                                    <h4 class="title mb--40">Edit Customer Service</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Request Information<span>*</span></label>
                                                <input type="text" id="inputRequestInfo" name="requestinfo" value="<?php echo $table['RequestInfo'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Description<span>*</span></label>
                                                <input type="text" id="inputRequestDescription" name="requestdesc" value="<?php echo $table['RequestDesc'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Name<span>*</span></label>
                                        <input type="text" id="inputName" name="requestername" value="<?php echo $table['RequestName'] ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No<span>*</span></label>
                                        <input type="text"  id="inputMobile" name="requestermobile" value="<?php echo $table['RequesterMobile'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span>*</span></label>
                                        <input type="email" id="inputEmail" name="requesteremail" value="<?php echo $table['RequesterEmail'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Address<span>*</span></label>
                                       <textarea  cols="20" rows="5"  id="inputAddress" name="requesteraddress" ><?php echo $table['RequesterAddress'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Status<span>*</span></label>
                                       <select name="requeststatus" id="inputStatus">
                                        <option value="Pending">Pending</option>
                                        <option value="On Going">On Going</option>
                                        <option value="Completed">Completed</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Request Date<span>*</span></label>
                                        <input type="date" id="inputDate" name="requestdate" value="<?php echo $table['RequestDate'] ?>">
                                    </div>
                                   <center><button type="submit" class="axil-btn btn-bg-primary " style="width: 25%;" name="submit">Submit</button></center> 
                                 
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <!-- End Checkout Area  -->

    </main>



   





    <!-- JS
============================================ -->
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