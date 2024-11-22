<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Jubilee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- wow css -->
    <link rel="stylesheet" href="./css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- style -->
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
                        <li><a href="#section-banner" class="scroll">Home</a></li>
                        <li><a href="#section-about" class="scroll">About</a></li>
                        <li><a href="#section-service" class="scroll">Services</a></li>
                        <li><a href="#section-filing" class="scroll">Needs</a></li>
                        <li><a href="#section-contact" class="scroll">Contact</a></li>
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

    <!-- banner start -->
    <section class="section-banner" style="background-image: url(./images/banner-image.jpg);" id="section-banner">
        <div class="container">
            <div class="banner-content">
                <h1 class="heading-style-1 wow fadeInDown">Tax Solutions</h1>
                <h2 class="heading-style-2 wow fadeIn">Made Simple.</h2>
                <a href="registration" class="button-fill-blue wow fadeIn">Register Now</a>
            </div>
        </div>
    </section>
    <!-- banner close -->

    <!-- about us section start -->
    <section class="section-about-us padding-block" id="section-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="./images/about-image.jpg" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="title-wrap">
                            <h6 class="p-big">About Us</h6>
                        </div>
                        <h3 class="heading-style-3 wow fadeIn">Trusted Experts in <span class="bold-font-span"> Payroll Solutions</span></h3>
                        <p class="heading-style-7 wow fadeIn">Choosing the right accountant for your personal tax affairs can be a difficult decision. We at Jubilee Returns Ltd
                            promise to deliver a comprehensive, tailor-made accounting service every time.</p>
                        <p class="heading-style-7 wow fadeIn">Our aim is to ensure you thrive, be it in business or personally. Our team will help you achieve this through offering
                            value-for-money accounting services, together with a high level of integrity and transparency.</p>
                        <p class="heading-style-7 wow fadeIn">Here at Jubilee returns, we understand that spending time doing the paperwork can be demanding and time consuming for
                            many CIS contractors, who would rather focus on running and building their self-employment trade.</p>
                        <p class="heading-style-7 wow fadeIn">As the Construction Industry Scheme outlines the rules between contractor and subcontractor payment deductions, there
                            are often tax refunds due to subcontractors. In this situation, Jubilee Returns can assist in reclaiming these
                            overpayments with our comprehensive CIS tax return service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section close -->

    <!-- service section start -->
    <section class="section-service padding-block" id="section-service">
        <div class="container">
            <div class="row align-items-center service-title-wrap">
                <div class="col-lg-6">
                    <div class="servise-title">
                        <div class="title-wrap">
                            <h6 class="p-big wow fadeIn">Our Service</h6>
                        </div>
                        <h3 class="heading-style-3 wow fadeIn">Comprehensive Payroll Solutions <span class="bold-font-span"> Tailored for You </span></h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content">
                        <p class="heading-style-7 wow fadeIn">If your personal affairs are complicated, then completing a self-assessment tax return
                            can be a daunting process.
                            Failing to submit a tax return on time will incur a penalty. The continual changes to the tax system makes
                            completing
                            tax returns harder and potentially resulting in more fines further down the line.</p>
                    </div>
                </div>
            </div>
            <div class="row service-card-wrap">
                <div class="col-md-4 service-card">
                    <div class="service-image">
                        <img src="./images/enabling-growth-image.jpg" alt="service-image">
                    </div>
                    <div class="service-card-content">
                        <p class="heading-style-7 wow fadeIn">Enabling Growth</p>
                        <h4 class="heading-style-4 wow fadeIn light-font-span"> <span class="bold-font-span">Personal Tax</span> Preparation</h4>
                    </div>
                </div>
                <div class="col-md-4 service-card">
                    <div class="service-image">
                        <img src="./images/saving-money-image.jpg" alt="service-image">
                    </div>
                    <div class="service-card-content">
                        <p class="heading-style-7 wow fadeIn">Saving Your Money</p>
                        <h4 class="heading-style-4 wow fadeIn light-font-span"> <span class="bold-font-span">Business Tax</span> Preparation</h4>
                    </div>
                </div>
                <div class="col-md-4 service-card">
                    <div class="service-image">
                        <img src="./images/aleviating-stress-image.jpg" alt="service-image">
                    </div>
                    <div class="service-card-content">
                        <p class="heading-style-7 wow fadeIn">Alleviating Stress</p>
                        <h4 class="heading-style-4 wow fadeIn light-font-span"> <span class="bold-font-span">Tax</span> Preparation</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section close -->

    <!-- section time start -->
    <section class="seciton-time padding-block" id="section-time">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="time-content">
                        <div class="title-wrap">
                            <h6 class="p-big wow fadeIn">Save Your Time</h6>
                        </div>
                        <h3 class="heading-style-3 wow fadeIn">Simplify Your Self-Assessment <span class="bold-font-span"> Tax Return </span></h3>
                        <p class="heading-style-7 wow fadeIn">We can save you a lot of time, worry and money by handling your self-assessment tax return. We will undertake the following:</p>
                        <a href="registration" class="button-fill-white wow fadeIn">Register Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="time-content-list">
                        <ul>
                            <li class="heading-style-4 wow fadeIn">Complete your tax return</li>
                            <li class="heading-style-4 wow fadeIn">Calculated your tax rebate or liability</li>
                            <li class="heading-style-4 wow fadeIn">File the return online</li>
                            <li class="heading-style-4 wow fadeIn">Liaise with HM Revenue and Customer on your behalf with regards to any self-assessment queries & rebates.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section time close -->

    <!-- section filing need  start -->
    <section class="seciton-filing-need  padding-block" id="section-filing">
        <div class="container">
            <div class="filing-need-title-wrap text-center">
                <div class="title-wrap">
                    <h6 class="p-big wow fadeIn">Tax Filing Needs</h6>
                </div>
                <h3 class="heading-style-3 wow fadeIn">Why You Might Need to Submit a <span class="bold-font-span"> Tax Return</span></h3>
            </div>
        </div>
        <ul class="d-flex flex-wrap">
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Partnership</h4>
                <p class="heading-style-6 wow fadeIn">You are self-employed or a partnership in a partnership</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Asset Sold</h4>
                <p class="heading-style-6 wow fadeIn">You have sold or given an asset away (such as a holiday home or some shares)</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Investment Income</h4>
                <p class="heading-style-6 wow fadeIn">You have large amounts of savings or investment income</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Untaxed Savings</h4>
                <p class="heading-style-6 wow fadeIn">You have untaxed savings or investment income</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Child Benefit</h4>
                <p class="heading-style-6 wow fadeIn">Your household receives Child Benefit and you have income in excess of £50,000</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Worked Abroad</h4>
                <p class="heading-style-6 wow fadeIn">You’ve lived or worked abroad or aren’t domiciles in the UK</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Land or Property</h4>
                <p class="heading-style-6 wow fadeIn">You own land or property that is being let</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Other Income</h4>
                <p class="heading-style-6 wow fadeIn">You have income from overseas</p>
            </li>
            <li class="filing-need-card">
                <h4 class="heading-style-4 wow fadeIn">Director</h4>
                <p class="heading-style-6 wow fadeIn">You are a company director</p>
            </li>
        </ul>
    </section>
    <!-- section filing need  close -->

    <!-- section conrtact us start -->
    <section class="section-contact-us padding-block" id="section-contact">
        <div class="container">
            <div class="contact-title-wrap text-center">
                <div class="title-wrap">
                    <h6 class="p-big">Contact Us</h6>
                </div>
                <h3 class="heading-style-3">Get in <span class="bold-font-span">Touch</span></h3>
            </div>
            <div class="contact-detail-wrap">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-detail-inner d-flex align-items-center">
                            <div class="contact-detail-image">
                                <img src="./images/call-icon.svg" alt="call icon">
                            </div>
                            <div class="contact-detail-content">
                                <h6 class="p-small">Call Us</h6>
                                <a href="tel:03304455033">0330 445 5033</a>
                                <!-- <a href="tel:07522814270">0752 281 4270</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-detail-inner d-flex align-items-center">
                            <div class="contact-detail-image">
                                <img src="./images/message-icon.svg" alt="message icon">
                            </div>
                            <div class="contact-detail-content">
                                <h6 class="p-small">Email Us</h6>
                                <a href="mailto:enquiries@jubileeas.co.uk" class="p-0">enquiries@jubileeas.co.uk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-detail-inner d-flex align-items-center">
                            <div class="contact-detail-image">
                                <img src="./images/location-icon.svg" alt="location-icon">
                            </div>
                            <div class="contact-detail-content">
                                <h6 class="p-big">Jubilee Business Centre, 211 Kingsbury Road, London, NW9 8AQ</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form-map-wrap d-flex">
            <div class="map" id="map"></div>
            <div class="contact-form-wrap">
                <div class="contact-form-title-wrap">
                    <div class="title-wrap">
                        <h6 class="p-big">Need help?</h6>
                    </div>
                    <h3 class="heading-style-3">We’re Here to <span class="bold-font-span">Help You!!</span></h3>
                </div>
                <form method="post" id="home-page-form" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" id="form-name" name="form-name" value="home-page-form">
                        <div class="col-sm-6">
                            <div class="form-group wow fadeIn">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Number</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-button">
                        <button type="submit" class="button-fill-blue submit-btn wow fadeIn">Submit
                            <div class="loader d-none"> </div>

                        </button>
                    </div>
                    <p class="success-msg text-left mt-3 d-none wow fadeIn thankyou-line">Thanks for submitting!</p>
                </form>
            </div>
        </div>
    </section>
    <!-- section conrtact us close -->

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
    <!-- select2 js -->
    <script src="./js/select2.js"></script>
    <!-- page scroll to id -->
    <script src="./js/jquery.malihu.PageScroll2id.min.js"></script>
    <!-- wow js -->
    <script src="./js/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtc0b_oAykroc2auPTfMoHDcbaESZzNqk&callback=initMap&v=weekly" defer></script>
    <script>
        // Google Map
        function initMap() {
            var mapDiv = document.getElementById('map');
            var latlng = new google.maps.LatLng(51.5817806, -0.2578859);
            // var latlng = new google.maps.LatLng(51.594789, -0.379387);
            var map = new google.maps.Map(mapDiv, {
                center: latlng,
                zoom: 17,
                disableDefaultUI: true, // Disabling the Default UI
                mapTypeId: google.maps.MapTypeId.MAP
            });
            // let icon;
            // if (jQuery(window).width() < 768) {
            //     icon = {
            //         // url: "./images/map-icon.svg",
            //         scaledSize: new google.maps.Size(40, 40),
            //     };
            // } else {
            //     icon = {
            //         // url: "./images/map-icon.svg",
            //     };
            // }

            // var marker = new google.maps.Marker({
            //     position: latlng,
            //     title: "My Location",
            //     icon: icon
            // });
            // const contentString =
            //     '<div id="content">' +
            //     '<h6 id="firstHeading" class="firstHeading">Jubilee</h6>' +
            //     "</div>";

            // const infowindow = new google.maps.InfoWindow({
            //     content: contentString,
            // });
            // marker.addListener("click", () => {
            //     infowindow.open({
            //         anchor: marker,
            //         map,
            //         shouldFocus: false,
            //     });
            // });
            // marker.setMap(map);
            map.set('styles', [{
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#242f3e"
                    }]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#746855"
                    }]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                            "color": "#242f3e"
                        },
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#d59563"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#d59563"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#263c3f"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#6b9a76"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#38414e"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#212a37"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9ca5b3"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#746855"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#1f2835"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#f3d19c"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#2f3948"
                    }]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#d59563"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#17263c"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#515c6d"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#17263c"
                    }]
                }
            ]);
        }
    </script>
</body>

</html>