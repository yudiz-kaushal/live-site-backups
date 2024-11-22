<?php

/**
 * Template Name: Home Dev
 * 
 */
$banner_section = get_field('banner_section');
$our_mission = get_field('our_mission');
$features_section = get_field('features_section');
$have_your_say_section = get_field('have_your_say_section');
$stay_in_loop_section = get_field('stay_in_loop_section');
$get_involved_section = get_field('get_involved_section');
get_header();
?>
<!-- banner section start -->
<?php if (isset($banner_section)): ?>
    <section class=" banner-section">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6">
                    <div class=" banner-cnt d-flex flex-column align-items-start">
                        <div class="site-status">
                            <div class="status-icon">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bbay-icon.svg" alt="bbay-icon">
                            </div>
                            <?php echo isset($banner_section['coming_soon_title']) && !empty($banner_section['coming_soon_title']) ? $banner_section['coming_soon_title'] : ''; ?>
                        </div>
                        <?php if (isset($banner_section['section_heading']) && !empty($banner_section['section_heading'])) : ?>
                            <div class="section-title">
                                <h1 class="heading-h1"><?php echo $banner_section['section_heading']; ?></h1>
                            </div>
                        <?php endif;

                        if (isset($banner_section['section_description']) && !empty($banner_section['section_description'])) :
                        ?>

                            <p><?php echo $banner_section['section_description']; ?></p>
                        <?php endif; ?>
                        <div class="notify-sec notification-group">
                            <div>
                                <p class=" notified-para">How do you want to be notified upon launch?</p>
                                <div class="notify-option d-inline-flex">
                                    <div class="notify-radio">
                                        <input type="radio" name="bannernotify" checked class="for-email-notify">
                                        <div class=" notify-radio-container">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-circle-icon.svg" alt="check-circle-icon" class=" check-circle">
                                            Email
                                        </div>
                                    </div>
<!--                                     <div class="notify-radio">
                                        <input type="radio" name="bannernotify" class="for-phone-notify">
                                        <div class=" notify-radio-container">
                                            <img src="<?php // echo get_stylesheet_directory_uri() ?>/assets/images/check-circle-icon.svg" alt="check-circle-icon" class=" check-circle">
                                            Text message
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="email-notify">
                                    <?php echo do_shortcode('[contact-form-7 id="9c3519a" title="Notify Email"]'); ?>
                                </div>

<!--                                 <div class="phone-notify" style=" display:none;">
                                    <?php // echo do_shortcode('[contact-form-7 id="244c2dd" title="Notify Phone"]'); ?>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" banner-img">
                <?php if (isset($banner_section['section_image']) && !empty($banner_section['section_image'])) : ?>
                    <img src="<?php echo $banner_section['section_image']['url']; ?>" alt="<?php echo $banner_section['section_image']['alt']; ?>" class="banner-main-img">
                <?php endif; ?>
                <div class="banner-floating-images">
                    <?php if (isset($banner_section['floating_image_1']) && !empty($banner_section['floating_image_1'])) : ?>
                        <a class="banner-floating-1"><img src="<?php echo $banner_section['floating_image_1']['url']; ?>" alt="<?php echo $banner_section['floating_image_1']['alt']; ?>" class=" blur-img wow animate__animated animate__zoomIn" style=" animation-delay: 1.2s"></a>
                    <?php endif;
                    if (isset($banner_section['floating_image_2']) && !empty($banner_section['floating_image_2'])) :
                    ?>
                        <a class="banner-floating-2"><img src="<?php echo $banner_section['floating_image_2']['url']; ?>" alt="<?php echo $banner_section['floating_image_2']['alt']; ?>" class="blur-img wow animate__animated animate__zoomIn" style=" animation-delay: 0.8s"></a>
                    <?php endif;
                    if (isset($banner_section['floating_image_3']) && !empty($banner_section['floating_image_3'])) :
                    ?>
                        <a class="banner-floating-3"><img src="<?php echo $banner_section['floating_image_3']['url']; ?>" alt="<?php echo $banner_section['floating_image_3']['alt']; ?>" class="blur-img wow animate__animated animate__zoomIn" style=" animation-delay: 0.5s"></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- banner section end -->
<!-- mia mission section start -->
<?php if (isset($our_mission)): ?>
    <section class=" mia-mission-section common-padding" id="our-mission">
        <div class=" container">
            <div class=" row align-items-center">
                <div class=" col-lg-6">
                    <div class=" mission-img-2 d-flex justify-content-center position-relative">
                        <?php if (isset($our_mission['section_image']) && !empty($our_mission['section_image'])) : ?>
                            <img src="<?php echo $our_mission['section_image']['url']; ?>" alt="<?php echo $our_mission['section_image']['alt']; ?>" class=" position-relative mission-main-img">
                        <?php endif; ?>
                        
                    </div>
                </div>
                <div class=" col-lg-6">
                    <div class="left-pad-sec">
                        <div class=" section-title">
                            <?php if (isset($our_mission['section_title']) && !empty($our_mission['section_title'])) : ?>
                                <h6 class=" heading-h6"><?php echo $our_mission['section_title']; ?></h6>
                            <?php endif;
                            if (isset($our_mission['section_heading']) && !empty($our_mission['section_heading'])) :
                            ?>
                                <h2 class=" heading-h2"><?php echo $our_mission['section_heading']; ?></p>
                                <?php endif; ?>
                        </div>
                        <div class=" mission-cnt d-flex flex-column">
                            <?php echo (isset($our_mission['section_description']) && !empty($our_mission['section_description'])) ? $our_mission['section_description'] : '';

                            if (isset($our_mission['get_in_touch_button']) && !empty($our_mission['get_in_touch_button'])) :
                            ?>
                                <div>
                                    <a href="<?php echo $our_mission['get_in_touch_button']['url']; ?>" class=" border-btn"><?php echo $our_mission['get_in_touch_button']['title']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- mia mission section end -->
<!-- app feature section start -->
<?php if (isset($features_section)): ?>
    <section class=" app-feature common-padding" id="app-features">
        <div class=" container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-pad-sec feature-list">
                        <div class=" section-title">
                            <?php if (isset($features_section['section_title']) && !empty($features_section['section_title'])): ?>
                                <h6 class=" heading-h6"><?php echo $features_section['section_title']; ?></h6>
                            <?php endif;
                            if (isset($features_section['section_heading']) && !empty($features_section['section_heading'])):
                            ?>
                                <h2 class=" heading-h2 mb-0"><?php echo $features_section['section_heading']; ?></p>
                                <?php endif; ?>
                        </div>
                        <?php echo (isset($features_section['add_features']) && !empty($features_section['add_features'])) ? $features_section['add_features'] : '';
                        if (isset($features_section['get_in_touch_button']) && !empty($features_section['get_in_touch_button'])):
                        ?>
                            <div>
                                <a href="<?php echo $features_section['get_in_touch_button']['url']; ?>" class=" border-btn"><?php echo $features_section['get_in_touch_button']['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class=" col-lg-6">
                    <div class=" mission-img d-flex justify-content-center position-relative">
                        <?php if (isset($features_section['section_image']) && !empty($features_section['section_image'])) : ?>
                            <img src="<?php echo $features_section['section_image']['url']; ?>" alt="<?php echo $features_section['section_image']['alt']; ?>" class=" position-relative mission-main-img">
                        <?php endif; ?>
                        <div class=" mission-floating-images">
                            <?php if (isset($features_section['floating_image_1']) && !empty($features_section['floating_image_1'])) : ?>
                                <img src="<?php echo $features_section['floating_image_1']['url']; ?>" alt="<?php echo $features_section['floating_image_1']['alt']; ?>" class="mission-floating-1 wow animate__animated animate__zoomIn" style=" animation-delay:0.8s">
                            <?php endif;
                            if (isset($features_section['floating_image_2']) && !empty($features_section['floating_image_2'])) :
                            ?>
                                <img src="<?php echo $features_section['floating_image_2']['url']; ?>" alt="<?php echo $features_section['floating_image_2']['alt']; ?>" class="mission-floating-2 wow animate__animated animate__zoomIn" style=" animation-delay:0.5s">
                            <?php endif;

                            if (isset($features_section['floating_image_3']) && !empty($features_section['floating_image_3'])) : ?>
                                <img src="<?php echo $features_section['floating_image_3']['url']; ?>" alt="<?php echo $features_section['floating_image_3']['alt']; ?>" class="mission-floating-3 wow animate__animated animate__zoomIn" style=" animation-delay:1.2s">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- app feature section end -->
<!-- help mia section start -->
<?php if (isset($have_your_say_section)): ?>
    <section class=" help-mia" id="have-your-say">
        <div class=" container">
            <div class=" row align-items-center">
                <div class=" col-lg-6">
                    <div class="help-mia-img d-flex justify-content-center position-relative">
                        <?php if (isset($have_your_say_section['section_image']) && !empty($have_your_say_section['section_image'])) : ?>
                            <img src="<?php echo $have_your_say_section['section_image']['url']; ?>" alt="<?php echo $have_your_say_section['section_image']['alt']; ?>" class=" help-main-img">
                        <?php endif;
                        if (isset($have_your_say_section['floating_image_1']) && !empty($have_your_say_section['floating_image_1'])) :
                        ?>
                            <img src="<?php echo $have_your_say_section['floating_image_1']['url']; ?>" alt="<?php echo $have_your_say_section['floating_image_1']['alt']; ?>" class="lets-innovate wow animate__animated animate__zoomIn" style=" animation-delay:0.5s">
                        <?php endif;
                        if (isset($have_your_say_section['floating_image_2']) && !empty($have_your_say_section['floating_image_2'])) :
                        ?>
                            <img src="<?php echo $have_your_say_section['floating_image_2']['url']; ?>" alt="<?php echo $have_your_say_section['floating_image_2']['alt']; ?>" class="share-idea-img wow animate__animated animate__zoomIn" style=" animation-delay:0.8s">
                        <?php endif; ?>
                    </div>
                </div>
                <div class=" col-lg-6 d-flex justify-content-lg-end">
                    <div class=" section-title">
                        <h6 class=" heading-h6"><?php echo $have_your_say_section['section_title']; ?></h6>
                        <h2 class=" heading-h2"><?php echo $have_your_say_section['section_heading']; ?></h2>
                        <p><?php echo $have_your_say_section['section_description']; ?></p>
                        <a href="<?php echo $have_your_say_section['have_your_say_button']['url']; ?>" target="<?php echo $have_your_say_section['have_your_say_button']['target']; ?>" class=" border-btn"><?php echo $have_your_say_section['have_your_say_button']['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- help mia section end -->
<!-- stay loop section start -->
<?php if (isset($stay_in_loop_section)): ?>
    <section class=" stay-loop-sec common-padding" id="get-in-touch">
        <div class=" container">
            <div class=" section-title text-sm-center">
                <?php if (isset($stay_in_loop_section['section_title']) && !empty($stay_in_loop_section['section_title'])): ?>
                    <h6 class=" heading-h6"><?php echo $stay_in_loop_section['section_title']; ?></h6>
                <?php endif;
                if (isset($stay_in_loop_section['section_heading']) && !empty($stay_in_loop_section['section_heading'])):
                ?>
                    <h2 class=" heading-h2"><?php echo $stay_in_loop_section['section_heading']; ?></h2>
                <?php endif;
                if (isset($stay_in_loop_section['section_description']) && !empty($stay_in_loop_section['section_description'])):
                ?>
                    <div class="stay-loop-desc">
                        <p><?php echo $stay_in_loop_section['section_description']; ?></p>
                    </div>
                <?php endif; ?>
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
<!--                             <div class="notify-radio">
                                <input type="radio" name="notify" class="for-phone-notify">
                                <div class=" notify-radio-container">
                                    <img src="<?php // echo get_stylesheet_directory_uri() ?>/assets/images/check-circle-icon.svg" alt="check-circle-icon" class=" check-circle">
                                    Text message
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-section">
                        <div class="email-notify">
                            <?php echo do_shortcode('[contact-form-7 id="a6c6b26" title="Notify Email Get In loop Section"]'); ?>
                        </div>

<!--                         <div class="phone-notify" style=" display:none;">
                            <?php // echo do_shortcode('[contact-form-7 id="43a3d6e" title="Notify Phone Get In loop Section"]'); ?>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- stay loop section end -->
<!-- get involved section start -->
<?php if (isset($get_involved_section)) : ?>
    <section class=" get-involved common-padding pb-0" id="get-involved">
        <div class=" container">
            <div class=" row">
                <div class=" col-lg-6">
                    <div class=" left-pad-sec get-involved-cnt">
                        <div class=" section-title">
                            <?php if (isset($get_involved_section['section_title']) && !empty($get_involved_section['section_title'])): ?>
                                <h6 class=" heading-h6"><?php echo $get_involved_section['section_title']; ?></h6>
                            <?php endif;
                            if (isset($get_involved_section['section_heading']) && !empty($get_involved_section['section_heading'])):
                            ?>
                                <h2 class=" heading-h2"><?php echo $get_involved_section['section_heading']; ?></h2>
                            <?php endif; ?>

                        </div>
                        <?php echo isset($get_involved_section['section_description']) && !empty($get_involved_section['section_description']) ? $get_involved_section['section_description'] : ''; ?>
                        <div class=" d-none d-sm-none d-md-none d-lg-block">
                            <div class="involved-img-cotainer">
                                <?php if (isset($get_involved_section['section_image'])) : ?>
                                    <img src="<?php echo $get_involved_section['section_image']['url']; ?>" alt="<?php echo $get_involved_section['section_image']['alt']; ?>" class=" get-involved-img">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" offset-lg-1 col-lg-5">
                    <div class="get-involved-form">
                        <h5 class="heading-h5">I’m interested in</h5>
                        <div class="select-form-option">
                            <div class="form-radio">
                                <input type="radio" name="option" id="careers-option" checked>
                                <div class="form-radio-container">
                                    <div class="radio-circle">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-icon.svg" alt="check-icon">
                                    </div>
                                    Careers
                                </div>
                            </div>
                            <div class="form-radio">
                                <input type="radio" name="option" id="collaboration-option">
                                <div class="form-radio-container">
                                    <div class="radio-circle">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check-icon.svg" alt="check-icon">
                                    </div>
                                    Collaboration
                                </div>
                            </div>
                        </div>

                        <!-- Careers Form - Visible by default -->
                        <div id="careers-form" class="form-content active" style="display: block;">
                            <?php echo do_shortcode('[contact-form-7 id="d7cd4b2" title="Careers"]'); ?>
                        </div>

                        <!-- Collaboration Form - Hidden by default -->
                        <div id="collaboration-form" class="form-content" style="display:none;">
                            <?php echo do_shortcode('[contact-form-7 id="4aebe67" title="Collabration Contact Form"]'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- get involved section end -->

<?php get_footer() ?>