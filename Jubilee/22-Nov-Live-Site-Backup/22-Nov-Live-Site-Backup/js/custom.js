jQuery(document).ready(function () {
  // sticky header
  $(function () {
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 50) {
        $("header ").addClass("sticky");
      } else {
        $("header ").removeClass("sticky");
      }
    });
  });

  // Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = jQuery("header").outerHeight();
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
    if (Math.abs(lastScrollTop - st) <= delta) return;
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      if (!jQuery("header").hasClass("open-header")) {
        jQuery("header").removeClass("nav-down").addClass("nav-up");
      }
    } else {
      // Scroll Up
      if (st + jQuery(window).height() < jQuery(document).height()) {
        jQuery("header").removeClass("nav-up").addClass("nav-down");
      }
    }
    lastScrollTop = st;
  }

  // header menu
  jQuery("#toggle-menu").click(function () {
    jQuery(this).toggleClass("change");
    jQuery("body, html").toggleClass("overflow-hidden");
    jQuery(".menu-wrap").toggleClass("show");
    if (jQuery(this).hasClass("change")) {
      jQuery("header").addClass("open-header");
      // Add the logic from myFunction here
      jQuery(this).toggleClass("active");
    } else {
      jQuery("header").removeClass("open-header");
    }
  });

  // lock scrolling
  jQuery(".open-toggle").click(function () {
    jQuery("body, html").addClass("overflow-hidden");
  });
  jQuery(".close-toggle").click(function () {
    jQuery("body, html").removeClass("overflow-hidden");
  });

  // Single Select Dropdown Jquery Start
  jQuery('.single-select-dropdown').select2({
    minimumResultsForSearch: -1,
    dropdownCssClass: "single-select-dropdown-open-main",
  });


  //////////////////////////  Previous Address Section Hide  //////////////////////////

  $("#show-previous-address").hide();

  // movedin-date
  // show-previous-address

  $("#movedin-date").on('change', function () {
    var movedindate = $(this).val();
    var currentDate = new Date();
    var movedinDate = new Date(movedindate);

    var yearsDiff = currentDate.getFullYear() - movedinDate.getFullYear();
    var monthsDiff = currentDate.getMonth() - movedinDate.getMonth();
    var datesDiff = currentDate.getDate() - movedinDate.getDate();

    if (datesDiff < 0) {
      monthsDiff--;
      var lastMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 0);
      datesDiff = lastMonthDate.getDate() + datesDiff;
    }

    if (monthsDiff < 0) {
      yearsDiff--;
      monthsDiff = 12 + monthsDiff;
    }

    var diffMessage = yearsDiff + " years, " + monthsDiff + " months, " + datesDiff + " days";

    if (yearsDiff >= 3 && monthsDiff >= 0 && datesDiff >= 0) {
      $("#show-previous-address").hide();
    } else {
      $("#show-previous-address").show();
    }
  });

  //////////////////////////  Preview //////////////////////////

  $('#id_proof').on('change', function (e) {
    var file = e.target.files[0];
    $('.preview-id-proof').empty();
    var fileNameElement = $('<div>').addClass('file-name').text(file.name);
    $('.preview-id-proof').append(fileNameElement);
  });

  $('#address_proof').on('change', function (e) {
    var file = e.target.files[0];
    $('.preview-address-proof').empty();
    var fileNameElement = $('<div>').addClass('file-name').text(file.name);
    $('.preview-address-proof').append(fileNameElement);
  });

  // wow js
  new WOW().init();

  // pagescroll to id
  $("a.scroll[href*='#']").mPageScroll2id({
    offset: 100
  });

  //******************************** validation for Registration from *****************************************\\

  function validateregistrationForm() {
    // Get the values
    let email = $('#email').val();
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let Dob = $('#dob').val();
    let address = $('#address').val();
    let postcode = $('#postcode').val();
    let moveindate = $('#move-in-date').val();
    let ninumber = $('#ni-number').val();
    let utrnumber = $('#utr-number').val();
    let occupation = $('#occupation').val();
    let nationality = $('#nationality').val();
    let id_proof = $('#id_proof');
    let address_proof = $('#address_proof');



    $('.form-group').removeClass('error-box');
    // Initialize a variable to keep track of validation errors
    var hasErrors = false;

    // Check if first name is empty
    if (email === '') {
      $('#email').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if email is valid
    if (email !== '' && !emailPattern.test(email)) {
      $('#email').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if email is empty
    if (Dob === '') {
      $('#dob').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if email is valid
    if (address === '') {
      $('#address').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if hire type is empty
    if (postcode === '') {
      $('#postcode').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if pickup time is empty
    if (moveindate === '') {
      $('#move-in-date').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if license is empty
    if (ninumber === '') {
      $('#ni-number').text('** License number cannot be empty').addClass('show');
      hasErrors = true;
    }

    // Check if license is a valid Australian Driver License Number
    if (utrnumber === '') {
      $('#utr-number').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if street name is empty
    if (occupation === '') {
      $('#occupation').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if postal code is empty
    if (nationality === '') {
      $('#nationality').parent().addClass('error-box');
      hasErrors = true;
    }

    if (id_proof[0].files.length === 0) {
      $('#id_proof').parent().addClass('error-box');
      hasErrors = true;
    }
    else if (id_proof[0].files[0].size > 15 * 1024 * 1024) {
      $('#id_proof').parent().addClass('error-box');
      hasErrors = true;
    }

    if (address_proof[0].files.length === 0) {
      $('#address_proof').parent().addClass('error-box');
      hasErrors = true;
    }
    else if (address_proof[0].files[0].size > 15 * 1024 * 1024) {
      $('#address_proof').parent().addClass('error-box');
      hasErrors = true;
    }

    // If there are validation errors, scroll to the first error element
    if (hasErrors) {
      scrollToError('.error-box');
      return false;
    }

    return true;
  }

  // scrollToError function

  function scrollToError(errorSelector) {
    var errorElement = $(errorSelector);
    if (errorElement.length) {
      $('html, body').animate({
        scrollTop: errorElement.offset().top - 300
      }, 500);
    }
  }

  //******************************** END *****************************************\\

  //******************************** validation for checklist from *****************************************\\
  function validateChecklist() {
    // Get the values
    let firstName = $('#first-name').val();
    let lastName = $('#last-name').val();
    let email = $('#email').val();
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let phone = $('#phone').val();
    let taxYear = $('#tax-year').val();
    let selfEmployed = $('input[name="self-employed"]:checked').val();
    let employment = $('input[name="employment"]:checked').val();
    let property = $('input[name="property"]:checked').val();
    let savingsInvestments = $('input[name="savings-investments"]:checked').val();
    let pensionsBenefits = $('input[name="pensions-benefits"]:checked').val();
    let furnishedHolidayLettings = $('input[name="furnished-holiday-lettings"]:checked').val();
    let rentRoom = $('input[name="rent-room"]:checked').val();
    let donationsGiftAid = $('input[name="donations-gift-aid"]:checked').val();
    let ministersReligion = $('input[name="ministers-religion"]:checked').val();
    let nonResident = $('input[name="non-resident"]:checked').val();
    let partnership = $('input[name="partnership"]:checked').val();
    let foreign = $('input[name="foreign"]:checked').val();
    let capitalGains = $('input[name="capital-gains"]:checked').val();
    let trusts = $('input[name="trusts"]:checked').val();
    let otherIncome = $('input[name="other-income"]:checked').val();
    // let fileerror = $('.file-error').text();

    $('.form-group, .source-radio-inner').removeClass('error-box');

    // Initialize a variable to keep track of validation errors
    var hasErrors = false;

    // Check if first name is empty
    if (firstName === '') {
      $('#first-name').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if last name is empty
    if (lastName === '') {
      $('#last-name').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if email is empty
    if (email === '') {
      $('#email').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if email is valid
    if (email !== '' && !emailPattern.test(email)) {
      $('#email').parent().addClass('error-box');
      hasErrors = true;
    }

    if (phone === '') {
      $('#phone').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if tax year is selected
    if (taxYear === '') {
      $('#tax-year').parent().addClass('error-box');
      hasErrors = true;
    }
    // if (idProofError || addressProofError) {
    //   hasErrors = true;
    // }


    // Check if self-employed is selected
    if (typeof selfEmployed === 'undefined') {
      $('#self-employed-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if employment is selected
    if (typeof employment === 'undefined') {
      $('#employment-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if property is selected
    if (typeof property === 'undefined') {
      $('#property-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if savings and investments is selected
    if (typeof savingsInvestments === 'undefined') {
      $('#savings-investments-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if pensions and benefits is selected
    if (typeof pensionsBenefits === 'undefined') {
      $('#pensions-benefits-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if furnished holiday lettings is selected
    if (typeof furnishedHolidayLettings === 'undefined') {
      $('#furnished-holiday-lettings-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if rent a room is selected
    if (typeof rentRoom === 'undefined') {
      $('#rent-room-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if donations / gift aid is selected
    if (typeof donationsGiftAid === 'undefined') {
      $('#donations-gift-aid-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if ministers of religion is selected
    if (typeof ministersReligion === 'undefined') {
      $('#ministers-religion-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if non-resident is selected
    if (typeof nonResident === 'undefined') {
      $('#non-resident-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if partnership is selected
    if (typeof partnership === 'undefined') {
      $('#partnership-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if foreign is selected
    if (typeof foreign === 'undefined') {
      $('#foreign-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if capital gains is selected
    if (typeof capitalGains === 'undefined') {
      $('#capital-gains-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if trusts is selected
    if (typeof trusts === 'undefined') {
      $('#trusts-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // Check if other income is selected
    if (typeof otherIncome === 'undefined') {
      $('#other-income-yes').parents('.source-radio-inner').addClass('error-box');
      hasErrors = true;
    }

    // If there are validation errors, scroll to the first error element
    if (hasErrors) {
      scrollToError('.error-box');
      return false;
    }

    return true;
  }

  // scrollToError function
  function scrollToError(errorSelector) {
    var errorElement = $(errorSelector);
    if (errorElement.length) {
      $('html, body').animate({
        scrollTop: errorElement.offset().top - 300
      }, 500);
    }
  }
  //******************************** END *****************************************\\

  //******************************** validation for Home page from *****************************************\\

  function validateHomePageForm() {
    // Get the values
    let name = $('#name').val();
    let email = $('#email').val();
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let phone = $('#phone').val();
    let address = $('#address').val();
    let message = $('#message').val();

    $('.form-group').removeClass('error-box');

    // Initialize a variable to keep track of validation errors
    var hasErrors = false;

    // Check if name is empty
    if (name === '') {
      $('#name').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if email is empty
    if (email === '') {
      $('#email').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if email is valid
    if (email !== '' && !emailPattern.test(email)) {
      $('#email').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if phone is empty
    if (phone === '') {
      $('#phone').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if address is empty
    if (address === '') {
      $('#address').parent().addClass('error-box');
      hasErrors = true;
    }

    // Check if message is empty
    if (message === '') {
      $('#message').parent().addClass('error-box');
      hasErrors = true;
    }

    // If there are validation errors, scroll to the first error element
    if (hasErrors) {
      scrollToError('.error-box');
      return false;
    }

    return true;
  }

  // scrollToError function
  function scrollToError(errorSelector) {
    var errorElement = $(errorSelector);
    if (errorElement.length) {
      $('html, body').animate({
        scrollTop: errorElement.offset().top - 300
      }, 500);
    }
  }

  //******************************** END *****************************************\\


  //////////////////////////  Form submition  //////////////////////////
  $("#registration-form, #home-page-form, #checklist_form").on('submit', function (e) {
    e.preventDefault();

    var formname = $('#form-name').val();

    if (formname == 'registration-form') {
      if (!validateregistrationForm()) {
        return;
      }
    } else if (formname == 'checklist-form') {
      if (!validateChecklist()) {
        return;
      }
    } else if (formname == 'home-page-form') {
      if (!validateHomePageForm()) {
        return;
      }
    }



    // Disable the submit button
    $(".submit-btn").addClass('transparent-font');
    $(".submit-btn").prop("disabled", true);
    $(".loader").removeClass('d-none');
    var form = this;
    var formData = new FormData(form);
    $.ajax({
      url: 'submit.php',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        $(".file-name").remove();
        $('.form-group, .source-radio-inner').removeClass('error-box');
        $(".submit-btn").prop("disabled", false);
        $(".loader").addClass('d-none');
        $(".submit-btn").removeClass('transparent-font');
        form.reset();
        $(".thankyou-line").removeClass('d-none');
        setTimeout(function() {
              $(".thankyou-line").addClass('d-none');
           }, 7000);
      }
    });
  });

  // date piker
  $(function () {
    $("#dob").datepicker({
      changeMonth: true,
      changeYear: true, 
      yearRange: '1947:+0' 
    });
  });
  $(function () {
    $("#marriage-date").datepicker(
      {
        changeMonth: true,
        changeYear: true,
        yearRange: '1947:+0' 
      }
    );
  });
  $(function () {
    $("#move-in-date").datepicker(
      {
        changeMonth: true,
        changeYear: true,
        yearRange: '1947:+0' 
      }
    );
  });
  $(function () {
    $("#prev-move-in-date").datepicker(
      {
        changeMonth: true,
        changeYear: true,
        yearRange: '1947:+0' 
      }
    );
  });

});