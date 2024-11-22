<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<!-- test test test test -->

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>404</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
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
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>">Home</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-about">About</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-service">Services</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-filing">Needs</a></li>
                        <li><a href="<?php echo JUBILEE_SITE_URL ?>#section-contact">Contact</a></li>
                        <li>
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

    <div class="error-page relative">
        <div class="container">
            <h1 class="heading-style-1">4<span>0</span>4</h1>
            <h2 class="heading-style-2">Page Not Found</h2>
            <p class="heading-style-5">It looks like nothing was found at this location.
            </p>
            <a href="<?php echo JUBILEE_SITE_URL ?>" class="btn-comman button-fill-blue">Back to Home</a>
        </div>
    </div>

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
                    <p class="heading-style-7">©2024 Jubilee Returns Limited. All Rights Reserved. Crafted by <a href="https://www.jcweb.co/" target="_blank">JC
                            Web </a>
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
    <!-- wow -->
    <script src="./js/wow.min.js"></script>
    <!-- select2 js -->
    <script src="./js/select2.js"></script>
</body>

</html>