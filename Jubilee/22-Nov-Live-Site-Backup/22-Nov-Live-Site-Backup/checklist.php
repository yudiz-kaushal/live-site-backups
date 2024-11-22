<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tax Return Checklist</title>
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
                    <h6 class="p-big">Tax Return Guide</h6>
                </div>
                <h3 class="heading-style-3">Tax Return <span class="bold-font-span"> Checklist</span></h3>
            </div>
            <div class="contact-form-wrap w-100 p-0">
                <form id="checklist_form" method="post" enctype="multipart/form-data">
                    <h4 class="heading-style-4"> Basic <span class="light-font-span"> Detail </span></h4>
                    <div class="row">
                        <input type="hidden" id="form-name" name="form-name" value="checklist-form">
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
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tax-year">Tax Year</label>
                                <div class="single-select-dropdown-main">
                                    <select class="single-select-dropdown" id="tax-year" name="tax-year">
                                        <option value="" disabled selected>Select Tax Year</option>
                                        <option value="15/16">15/16</option>
                                        <option value="16/17">16/17</option>
                                        <option value="17/18">17/18</option>
                                        <option value="18/19">18/19</option>
                                        <option value="19/20">19/20</option>
                                        <option value="20/21">20/21</option>
                                        <option value="21/22">21/22</option>
                                        <option value="22/23">22/23</option>
                                        <option value="23/24">23/24</option>
                                        <option value="24/25">24/25</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="show-previous-address income-sources" id="show-previous-address">
                        <h4 class="heading-style-4"> Sources of <span class="light-font-span"> income </span></h4>
                        <p class="p-small">It seems like you have lived in your current address for less than 3 years please give your previous address below.&nbsp;</p>
                    </div>

                    <div class="row source-radio">
                        <!-- Self-Employed -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Self-Employed</h4>
                                <p class="p-big">Income includes all money you earned as an individual freelancer, contractor or by selling goods.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="self-employed" id="self-employed-yes" value="Yes">
                                        <label class="form-check-label" for="self-employed-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="self-employed" id="self-employed-no" value="No">
                                        <label class="form-check-label" for="self-employed-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Employment -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Employment</h4>
                                <p class="p-big">Income refers to any salary and benefits you received from a company, including directorship, offices and agency
                                    agreements.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="employment" id="employment-yes" value="Yes">
                                        <label class="form-check-label" for="employment-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="employment" id="employment-no" value="No">
                                        <label class="form-check-label" for="employment-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Property -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Property</h4>
                                <p class="p-big">Income consists of any earnings from renting, leasing or any other use of one or more properties.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="property" id="property-yes" value="Yes">
                                        <label class="form-check-label" for="property-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="property" id="property-no" value="No">
                                        <label class="form-check-label" for="property-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Savings and Investments -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Savings and Investments</h4>
                                <p class="p-big">Interest paid to you by a bank, building society, savings accounts and loans, unless it is specifically non-taxable.
                                </p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="savings-investments" id="savings-investments-yes" value="Yes">
                                        <label class="form-check-label" for="savings-investments-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="savings-investments" id="savings-investments-no" value="No">
                                        <label class="form-check-label" for="savings-investments-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pensions and Benefits -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Pensions and Benefits</h4>
                                <p class="p-big">Pensions and Benefits income include all income received from UK pensions, annuities and other state benefits
                                    (including Child Benefit).</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pensions-benefits" id="pensions-benefits-yes" value="Yes">
                                        <label class="form-check-label" for="pensions-benefits-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pensions-benefits" id="pensions-benefits-no" value="No">
                                        <label class="form-check-label" for="pensions-benefits-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Furnished Holiday Lettings -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Furnished Holiday Lettings</h4>
                                <p class="p-big">A Furnished Holiday Let is a property in the UK/EEA that is commercially available to let.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="furnished-holiday-lettings" id="furnished-holiday-lettings-yes" value="Yes">
                                        <label class="form-check-label" for="furnished-holiday-lettings-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="furnished-holiday-lettings" id="furnished-holiday-lettings-no" value="No">
                                        <label class="form-check-label" for="furnished-holiday-lettings-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rent a Room -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Rent a Room</h4>
                                <p class="p-big">Choose Yes if you earned income from either renting out an individual room or an entire floor in your home and the
                                    yearly expense is less than £4,250.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rent-room" id="rent-room-yes" value="Yes">
                                        <label class="form-check-label" for="rent-room-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rent-room" id="rent-room-no" value="No">
                                        <label class="form-check-label" for="rent-room-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Donations / Gift Aid -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Donations / Gift Aid</h4>
                                <p class="p-big">Donations / Gift Aid should be used to declare any charitable donations you made, including Gift Aid.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donations-gift-aid" id="donations-gift-aid-yes" value="Yes">
                                        <label class="form-check-label" for="donations-gift-aid-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donations-gift-aid" id="donations-gift-aid-no" value="No">
                                        <label class="form-check-label" for="donations-gift-aid-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ministers of Religion -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Ministers of Religion</h4>
                                <p class="p-big">If you were a clergyman or a minister of religion and need to file a SA102M tax return.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ministers-religion" id="ministers-religion-yes" value="Yes">
                                        <label class="form-check-label" for="ministers-religion-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ministers-religion" id="ministers-religion-no" value="No">
                                        <label class="form-check-label" for="ministers-religion-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Non-Resident -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Non-Resident</h4>
                                <p class="p-big">If you earned income in the UK while residing abroad, you need to file a non-resident tax return.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="non-resident" id="non-resident-yes" value="Yes">
                                        <label class="form-check-label" for="non-resident-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="non-resident" id="non-resident-no" value="No">
                                        <label class="form-check-label" for="non-resident-no">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Partnership -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Partnership</h4>
                                <p class="p-big">If you were in a partnership (LLP) and need to file your SA104 pages.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="partnership" id="partnership-yes" value="Yes">
                                        <label class="form-check-label" for="partnership-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="partnership" id="partnership-no" value="No">
                                        <label class="form-check-label" for="partnership-no">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Foreign -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Foreign</h4>
                                <p class="p-big">If you are in receipt of foreign income and need to file a SA106 tax return.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="foreign" id="foreign-yes" value="Yes">
                                        <label class="form-check-label" for="foreign-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="foreign" id="foreign-no" value="No">
                                        <label class="form-check-label" for="foreign-no">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Capital Gains -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Capital Gains</h4>
                                <p class="p-big">For declaring capital gains on the sale of assets, such as shares or property.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="capital-gains" id="capital-gains-yes" value="Yes">
                                        <label class="form-check-label" for="capital-gains-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="capital-gains" id="capital-gains-no" value="No">
                                        <label class="form-check-label" for="capital-gains-no">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Trusts -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Trusts</h4>
                                <p class="p-big">If you are in receipt of income from a UK Trust and need to file a SA107 Tax Return.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trusts" id="trusts-yes" value="Yes">
                                        <label class="form-check-label" for="trusts-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trusts" id="trusts-no" value="No">
                                        <label class="form-check-label" for="trusts-no">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Other Income -->
                        <div class="col-md-6">
                            <div class="source-radio-inner d-flex flex-column">
                                <h4 class="heading-style-6">Other Income</h4>
                                <p class="p-big">Any other income received in the tax year.</p>
                                <div class="form-check-wrap d-flex align-items-center mt-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="other-income" id="other-income-yes" value="Yes">
                                        <label class="form-check-label" for="other-income-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="other-income" id="other-income-no" value="No">
                                        <label class="form-check-label" for="other-income-no">No</label>
                                    </div>
                                </div>
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
    <!-- wow -->
    <script src="./js/wow.min.js"></script>
    <!-- select2 js -->
    <script src="./js/select2.js"></script>
</body>

</html>