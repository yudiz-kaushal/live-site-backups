jQuery(document).ready(function($) {


//  // Email Validation in Contact Form
// const $emailInput = $('.email-validation');
// const $notifyButton = $('.notify-me-btn');

// function validateEmail(email) {
//     const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     return re.test(email);
// }

// function updateButtonState() {
//     const email = $emailInput.val() ? $emailInput.val().trim() : '';
//     $notifyButton.prop('disabled', !validateEmail(email));
// }

// $emailInput.on('input keyup', updateButtonState);updateButtonState

// updateButtonState();


// Contact form change on Radio button

var isAnimating = false;

// Careers form is visible by default
$('#careers-form').show().addClass('active');

// Function to handle form change
function changeForm(showFormId, hideFormId) {
    if (isAnimating) return;
    isAnimating = true;

    $('#' + hideFormId).fadeOut(0, function() {
        $('#' + showFormId).fadeIn(0, function() {
            isAnimating = false;
        }).addClass('active');
    }).removeClass('active');
}

// When the careers option is selected
$('#careers-option').on('change', function() {
    if ($(this).is(':checked')) {
        changeForm('careers-form', 'collaboration-form');
    }
});

// When the collaboration option is selected
$('#collaboration-option').on('change', function() {
    if ($(this).is(':checked')) {
        changeForm('collaboration-form', 'careers-form');
    }
});



    //************************* Submit Button Disable Code Starts *************************\\ 
    
//    // Initially disable the submit button
//     $('.submit-form').css('pointer-events', 'none');
//     $('.submit-form').css('opacity', '0.5');

//     // When the checkbox is changed
//     $('.form-check-validation').change(function () {
//         if ($(this).is(':checked')) {
//             // Enable the submit button
//             $('.submit-form')
//                 .css('pointer-events', 'auto')
//                 .css('opacity', '1');
//         } else {
//             // Disable the submit button
//             $('.submit-form')
//                 .css('pointer-events', 'none')
//                 .css('opacity', '0.5');
//         }
//     });


    // updateButtonState();
    // toggle mobile menu
    jQuery('.menu-toggle').click(function() {
        jQuery('.menu-toggle').toggleClass('open');
        jQuery('body').toggleClass('overflow-hidden');
        jQuery('.menu-main-menu-container').toggleClass('expanded');
    });

    jQuery('.menu-item a').click(function() {
        if (jQuery(window).width() <= 991) {
            jQuery('.menu-toggle').removeClass('open');
            jQuery('.menu-main-menu-container').removeClass('expanded');
            jQuery('body').removeClass('overflow-hidden');
        }
    });

    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = jQuery('#masthead').outerHeight();
    jQuery(window).scroll(function (event) {
        didScroll = true;
    });
    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    function hasScrolled() {
        var st = jQuery(this).scrollTop();
        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            jQuery('#masthead').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + jQuery(window).height() < jQuery(document).height()) {
                jQuery('#masthead').removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
    }

    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();
        var scrolled = 70;
        var screen_resolution = jQuery(window).width();
        if (screen_resolution < 768) {
            scrolled = 105;
        }
        if (scroll >= scrolled) {
            jQuery("#masthead").addClass("fixed-header");
        } else {
            jQuery("#masthead").removeClass("fixed-header");
        }
    })

    // notify section
    jQuery('.notification-group .for-phone-notify').change(function() {
        var group = jQuery(this).closest('.notification-group');
        if (jQuery(this).is(':checked')) {
            group.find('.email-notify').fadeOut();
            group.find('.phone-notify').fadeIn();
            group.find('.for-email-notify').prop('checked', false);
        } else {
            group.find('.email-notify').fadeIn();
            group.find('.phone-notify').fadeOut();
        }
    });

    jQuery('.notification-group .for-email-notify').change(function() {
        var group = jQuery(this).closest('.notification-group');
        if (jQuery(this).is(':checked')) {
            group.find('.email-notify').fadeIn();
            group.find('.phone-notify').fadeOut();
            group.find('.for-phone-notify').prop('checked', false);
        } else {
            group.find('.email-notify').fadeOut();
            group.find('.phone-notify').fadeIn();
        }
    });

    
});

// loader
jQuery(window).on('load', function($) {
    setTimeout(function(){
        jQuery('#loader-container').fadeOut(); // Hide the loader
        // wow
        new WOW().init();
    })
});