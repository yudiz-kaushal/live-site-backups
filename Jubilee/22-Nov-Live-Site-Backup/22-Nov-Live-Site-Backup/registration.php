<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    <!-- date piker -->
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- select2 css -->
    <link rel="stylesheet" href="./css/select2.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style.css'>
</head>

<body>
    <!-- header start -->
    <header class="nav-down">
        <!-- top header start -->
        <div class="top-header d-md-block d-none">
            <div class="container d-flex align-items-center justify-content-end">
                <a href="mailto:enquiries@jubileeas.co.uk">
                    <img src="./images/message-icon.svg" alt="message-icon">
                    enquiries@jubileeas.co.uk
                </a>
                <a href="tel:03304455033">
                    <img src="./images/call-icon.svg" alt="call icon">
                    0330 445 5033
                </a>
            </div>
        </div>
        <!-- top header close -->
        <div class="bottom-header container d-flex align-items-center justify-content-between">
            <a href="<?php echo JUBILEE_SITE_URL ?>" class="logo">
                <img src="./images/logo.svg" alt="logo">
            </a>
            <nav class="d-flex align-items-center" id="mytopnav">
                <div class="menu-wrap">
                    <ul class="">
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-banner">Home</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-about">About</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-service">Services</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-filing">Needs</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-contact">Contact</a></li>
                        <li class="d-none">
                            <a href="registration" class="button-fill-blue">Register Now</a>
                        </li>
                    </ul>
                </div>
                <a href="mailto:enquiries@jubileeas.co.uk" class="header-contact-icon d-md-none">
                    <img src="./images/header-msg-icon.svg" alt="massage icon">
                </a>
                <a href="tel:03304455033" class="header-contact-icon d-md-none">
                    <img src="./images/header-call-icon.svg" alt="call icon">
                </a>
                <a href="javascript:void(0);" id="toggle-menu" class="toggle-menu hidden">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </a>
            </nav>
        </div>
    </header>
    <!-- header close -->
    <!-- banner start -->
    <section class="section-form-banner" style="background-image: url(./images/banner-image.jpg);" id="section-banner">
    </section>
    <!-- banner close -->

    <!-- section registartion-form start -->
    <section class="section-registration-form">
        <div class="container">
            <div class="registration-form-title-wrap text-center">
                <div class="title-wrap">
                    <h6 class="p-big">Jubilee Registration</h6>
                </div>
                <h3 class="heading-style-3">Register with <span class="bold-font-span"> Jubilee Associates</span></h3>
            </div>
            <div class="contact-form-wrap w-100 p-0">
                <form id="registration-form" method="post" enctype="multipart/form-data">
                    <h4 class="heading-style-4"> Personal <span class="light-font-span"> Detail </span></h4>
                    <div class="row">
                        <input type="hidden" id="form-name" name="form-name" value="registration-form">
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="first-name">Last Name</label>
                                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="previous-name">Previous Name</label>
                                <input type="text" class="form-control" id="previous-name" name="previous-name" placeholder="Enter Previous Name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="text" class="form-control" id="dob" name="dob" placeholder="DD/MM/YYYY">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="ni-number">National Insurance Number:</label>
                                <input type="text" class="form-control" id="ni-number" name="ni-number" placeholder="Enter National Insurance Number">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="utr-number">UTR Number</label>
                                <input type="text" class="form-control" id="utr-number" name="utr-number" placeholder="Enter UTR Number">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Occupation">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Nationality">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="marital-status">Marital Status:</label>
                                <div class="single-select-dropdown-main">
                                    <select class="single-select-dropdown" id="marital-status" name="marital-status">
                                        <option value="" disabled selected>Select Marital status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Civil Partnered">Civil Partnered</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="spouse-name">Name of Spouse</label>
                                <input type="text" class="form-control" id="spouse-name" name="spouse-name" placeholder="Enter Name of Spouse">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="marriage-date">Date of Marriage:</label>
                                <input type="text" class="form-control" id="marriage-date" name="marriage-date" placeholder="DD/MM/YYYY">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="num-children">Number of Children:</label>
                                <div class="single-select-dropdown-main">
                                    <select class="single-select-dropdown" id="num-children" name="num-children" min="0">
                                        <option value="" disabled selected>Select Number of Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <!-- <input type="number" class="form-control" id="num-children" name="num-children" min="0"> -->
                            </div>
                        </div>
                    </div>

                    <div class="adress-detail-form-wrap">
                        <h4 class="heading-style-4"> Address <span class="light-font-span"> Detail </span></h4>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="postcode">Post Code</label>
                                    <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Post Code">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="move-in-date">Date Moved In</label>
                                    <input type="text" class="form-control" id="move-in-date" name="move-in-date" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="show-previous-address" id="show-previous-address">
                        <p class="p-small">It seems like you have lived in your current address for less than 3 years please give your previous address below.&nbsp;</p>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="previous-address">Previous Address</label>
                                    <input type="text" class="form-control" id="previous-address" name="previous-address" placeholder="Enter Previous Address">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="previous-postcode">Previous Post Code</label>
                                    <input type="text" class="form-control" id="previous-postcode" name="previous-postcode" placeholder="Enter Previous Post Code">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="prev-move-in-date">Date Moved In</label>
                                    <input type="text" class="form-control" id="prev-move-in-date" name="prev-move-in-date" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="documents-detail-form">
                        <h4 class="heading-style-4"> Document <span class="light-font-span"> Detail </span></h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Please upload a photo of your Passport or Driving Licence as proof of ID</label>
                                    <input type="file" class="form-control-file" name="id_proof" id="id_proof" accept="image/*,.pdf">
                                    <label for="id_proof" class="custom-file-upload">
                                        <img src="./images/upload-icon.svg" alt="upload icon">
                                        Upload Proof of ID
                                    </label>
                                    <p>Upload supported file (Max 15MB)</p>
                                </div>
                                <div class="preview-id-proof"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Please upload a photo of a Utility Bill, Bank Statement, Council Tax Bill or HMRC Letter as proof of address</label>
                                    <input type="file" class="form-control-file" name="address_proof" id="address_proof" accept="image/*,.pdf">
                                    <label for="address_proof" class="custom-file-upload">
                                        <img src="./images/upload-icon.svg" alt="upload icon">
                                        Upload Proof of Address
                                    </label>
                                    <p>Upload supported file (Max 15MB)</p>
                                </div>
                                <div class="preview-address-proof"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-button text-center">
                        <button type="submit" class="button-fill-blue submit-btn">Submit
                            <div class="loader d-none"> </div>
                        </button>
                    </div>
                    <p class="success-msg text-center mt-3 d-none thankyou-line">Thanks for submitting!</p>
                </form>
            </div>
        </div>
    </section>
    <!-- section registartion-form close -->

    <!-- footer start -->
    <footer>
        <div class="container">
            <div class="row justify-content-lg-end">
                <div class="col-lg-4">
                    <a href="<?php echo JUBILEE_SITE_URL ?>" class="footer-logo">
                        <img src="./images/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 footer-widgest footer-contact">
                    <h6 class="heading-style-7">Contact Us</h6>
                    <a href="mailto:enquiries@jubileeas.co.uk">enquiries@jubileeas.co.uk</a>
                    <div class="footer-call">
                        <a href="tel:03304455033">0330 445 5033</a>
                        <!-- <a href="tel:07522814270">0752 281 4270</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 footer-widgest footer-loction">
                    <h6 class="heading-style-7">Location</h6>
                    <p class="heading-style-7">Jubilee Business Centre, 211 Kingsbury Road, London, NW9 8AQ</p>
                </div>
                <div class="col-lg-4 col-sm-6 footer-widgest footer-follow">
                    <h6 class="heading-style-7">Follow Us</h6>
                </div>
                <div class="col-lg-4 col-sm-6 footer-widgest footer-social-icon">
                    <ul class="footer-social d-flex align-items-center">
                        <li>
                            <a href="#" target="_blank"><img src="./images/facbook-icon.svg" alt="facebook-icon"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="./images/instgram-icon.svg" alt="instgram-icon"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="./images/twitter-icon.svg" alt="twitter-icon"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 copyright-content">
                    <p class="heading-style-7">©2024 Jubilee Returns Limited. All Rights Reserved. Crafted by <a href="https://www.jcweb.co/" target="_blank">JC Web</a></p>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->

    <!-- script start -->
    <script src="./js/jquery.js"></script>
    <script src="./js/custom.js"></script>
    <!-- bootsrap js -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- page scroll to id -->
    <script src="./js/jquery.malihu.PageScroll2id.min.js"></script>
    <!-- date piker js -->
    <script src="./js/jquery-ui.js"></script>
    <!-- wow -->
    <script src="./js/wow.min.js"></script>
    <!-- select2 js -->
    <script src="./js/select2.js"></script>
</body>

</html>