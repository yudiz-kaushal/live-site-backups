<?php 
/**
 * Template Name: Home
 * 
 */

get_header();
?>
<!-- banner section start -->
 <section class=" banner-section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-6">
                <div class=" banner-cnt d-flex flex-column align-items-start">
                    <div class="site-status">
                        <div class="status-icon">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bbay-icon.svg" alt="bbay-icon">
                        </div>
                        COMING SOON!
                    </div>
                    <div class="section-title">
                        <h1 class="heading-h1">Secure your child’s financial future with our new app</h1>
                    </div>
                    <p>Save for your child’s education, first house, and retirement. Invite loved ones to contribute, earn savings bonuses, and get expert guidance.</p>
                    <div class="notify-sec notification-group">
                        <div>
                            <p class=" notified-para">How do you want to be notified?</p>
                            <div class="notify-option d-inline-flex">
                                <div class="notify-radio">
                                    <input type="radio" name="bannernotify" checked class="for-email-notify">
                                    <div class=" notify-radio-container">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-circle-icon.svg" alt="check-circle-icon" class=" check-circle">
                                        Email
                                    </div>
                                </div>
                                <div class="notify-radio">
                                    <input type="radio" name="bannernotify" class="for-phone-notify">
                                    <div class=" notify-radio-container">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-circle-icon.svg" alt="check-circle-icon" class=" check-circle">
                                        Text message
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="email-notify">
                                <?php echo do_shortcode('[contact-form-7 id="9c3519a" title="Notify Email"]'); ?>
                            </div>
                            <div class="phone-notify" style=" display:none;">
                                <?php echo do_shortcode('[contact-form-7 id="244c2dd" title="Notify Phone"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" banner-img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-img.png" alt="banner-img" class="banner-main-img">
            <div class="banner-floating-images">
                <a href="#" class="banner-floating-1"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-floating-1.png" alt="banner-img" class=" blur-img wow animate__animated animate__zoomIn" style=" animation-delay: 1.2s"></a>
                <a href="#" class="banner-floating-2"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-floating-2.png" alt="banner-img" class="blur-img wow animate__animated animate__zoomIn" style=" animation-delay: 0.8s"></a>
                <a href="#" class="banner-floating-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-floating-3.png" alt="banner-img" class="blur-img wow animate__animated animate__zoomIn" style=" animation-delay: 0.5s"></a>
            </div>
        </div>
    </div>
 </section>
 <!-- banner section end -->
<!-- mia mission section start -->
 <section class=" mia-mission-section common-padding" id="our-mission">
    <div class=" container">
        <div class=" row align-items-center">
            <div class=" col-lg-6">
                <div class=" mission-img d-flex justify-content-center position-relative">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mission-phone-img.png" alt="mission-phone-img" class=" position-relative mission-main-img">
                    <div class=" mission-floating-images">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mission-floating-1.png" alt="mission-floating-1" class="mission-floating-1 wow animate__animated animate__zoomIn" style=" animation-delay:0.8s">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mission-floating-2.png" alt="mission-floating-2" class="mission-floating-2 wow animate__animated animate__zoomIn" style=" animation-delay:0.5s">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mission-floating-3.png" alt="mission-floating-3" class="mission-floating-3 wow animate__animated animate__zoomIn" style=" animation-delay:1.2s">
                    </div>
                </div>
            </div>
            <div class=" col-lg-6">
                <div class="left-pad-sec">
                    <div class=" section-title">
                        <h6 class=" heading-h6">MIA’S MISSION</h6>
                        <h2 class=" heading-h2">Every child deserves the right to a prosperous future</p>
                    </div>
                    <div class=" mission-cnt d-flex flex-column">
                        <p>I have spent over a decade working at the biggest financial services companies in London and Dubai to learn the secrets on how the wealthiest families secure wealth for the next generation.</p>
                        <p>I founded Mia to share this knowledge and power with everyone. </p>
                        <p>Our mission is to empower millions of families across the UK with the tools and knowledge to financially support the children in their lives. What can start as a small contribution for a birthday, could later turn into a legacy of opportunity and financial stability.</p>
                        <blockquote>Sophia Jarvis, CFA (Founder)</blockquote>
                        <div>
                            <a href="#" class=" border-btn">Get in touch to learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- mia mission section end -->
<!-- app feature section start -->
 <section class=" app-feature common-padding" id="app-features">
    <div class=" container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="left-pad-sec feature-list">
                    <div class=" section-title">
                        <h6 class=" heading-h6">APP FEATURES</h6>
                        <h2 class=" heading-h2 mb-0">Support your child’s future</p>
                    </div>
                    <ul>
                        <li> Easily set aside funds for their first home, university expenses and an enjoyable retirement </li>
                        <li>Allow friends and family to contribute through impactful gifts</li>
                        <li>Qualify for bonuses and rewards to enhance savings</li>
                        <li>Access tailored guidance and insights from experts to help you manage and grow your family's wealth</li>
                    </ul>
                    <div>
                        <a href="#" class=" border-btn">Get in touch to learn more</a>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6">
                <div class=" feature-img-wrapper">
                    <div class="feature-img-top d-flex">
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature-img-1.png" alt="feature-img-1" class="wow animate__animated animate__zoomIn" style=" animation-delay:0.5s">
                        </div>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature-img-2.png" alt="feature-img-1" class="feature-img-2 wow animate__animated animate__zoomIn" style=" animation-delay:0.6s">
                        </div>
                    </div>
                    <div class="feature-img-bottom d-flex">
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature-img-3.png" alt="feature-img-3" class="feature-img-3 wow animate__animated animate__zoomIn" style=" animation-delay:1s">
                        </div>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature-img-4.png" alt="feature-img-4" class="wow animate__animated animate__zoomIn" style=" animation-delay:1.2s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- app feature section end -->
<!-- help mia section start -->
 <section class=" help-mia" id="have-your-say">
    <div class=" container">
        <div class=" row align-items-center">
            <div class=" col-lg-6">
                <div class="help-mia-img d-flex justify-content-center position-relative">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/help-mia-img.png" alt="help-mia-img" class=" help-main-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/lets-innovate.png" alt="lets-innovate" class="lets-innovate wow animate__animated animate__zoomIn" style=" animation-delay:0.5s">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/share-idea-label.png" alt="share-idea-label" class="share-idea-img wow animate__animated animate__zoomIn" style=" animation-delay:0.8s">
                </div>
            </div>
            <div class=" col-lg-6 d-flex justify-content-lg-end">
                <div class=" section-title">
                    <h6 class=" heading-h6">HELP SHAPE MIA</h6>
                    <h2 class=" heading-h2">Have your say! </h2>
                    <p>We want to hear from you. Share your thoughts and ideas to help us bring you an app you'll love to support your children's financial future.</p>
                    <a href="#" class=" border-btn">Have your say</a>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- help mia section end -->
<!-- stay loop section start -->
 <section class=" stay-loop-sec common-padding">
    <div class=" container">
        <div class=" section-title text-sm-center">
            <h6 class=" heading-h6">STAY IN THE LOOP</h6>
            <h2 class=" heading-h2">Get notified when we launch! </h2>
            <div class="stay-loop-desc">
                <p>Sign up now to stay in the loop and access the tools and knowledge to financially support the children in your life.</p>
            </div>
            <div class="notify-sec notification-group">
                <div class=" d-sm-flex align-items-center">
                    <p class=" notified-para">How do you want to be notified?</p>
                    <div class="notify-option d-inline-flex">
                        <div class="notify-radio">
                            <input type="radio" name="notify" checked class="for-email-notify">
                            <div class=" notify-radio-container">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-circle-icon.svg" alt="check-circle-icon" class=" check-circle">
                                Email
                            </div>
                        </div>
                        <div class="notify-radio">
                            <input type="radio" name="notify" class="for-phone-notify">
                            <div class=" notify-radio-container">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-circle-icon.svg" alt="check-circle-icon" class=" check-circle">
                                Text message
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="email-notify">
                        <?php echo do_shortcode('[contact-form-7 id="9c3519a" title="Notify Email"]'); ?>
                    </div>
                    <div class="phone-notify" style=" display:none;">
                        <?php echo do_shortcode('[contact-form-7 id="244c2dd" title="Notify Phone"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- stay loop section end -->
<!-- get involved section start -->
 <section class=" get-involved common-padding pb-0" id="get-involved">
    <div class=" container">
        <div class=" row">
            <div class=" col-lg-6">
                <div class=" left-pad-sec get-involved-cnt">
                    <div class=" section-title">
                        <h6 class=" heading-h6">WE WOULD LOVE TO HEAR FROM YOU!</h6>
                        <h2 class=" heading-h2">Keen to be involved? </h2>
                    </div>
                    <p>We are looking for talented individuals who want to support Mia to help millions of children across the UK look forward to a comfortable financial future.</p>
                    <div class=" d-none d-sm-none d-md-none d-lg-block">
                        <p>Ready to make a difference? </p>
                        <div class="involved-img-cotainer">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/get-involved-img.png" alt="get-involved-img" class=" get-involved-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" offset-lg-1 col-lg-5">
                <div class=" get-involved-form">
                    <h5 class="heading-h5">I’m interested in</h5>
                    <div class="select-form-option">
                        <div class=" form-radio">
                            <input type="radio" name="option" checked>
                            <div class=" form-radio-container">
                                <div class=" radio-circle">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-icon.svg" alt="check-icon">
                                </div>
                                Careers
                            </div>
                        </div>
                        <div class=" form-radio">
                            <input type="radio" name="option">
                            <div class=" form-radio-container">
                                <div class=" radio-circle">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-icon.svg" alt="check-icon">
                                </div>
                                Collabration
                            </div>
                        </div>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="d7cd4b2" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- get involved section end -->

<?php get_footer() ?>