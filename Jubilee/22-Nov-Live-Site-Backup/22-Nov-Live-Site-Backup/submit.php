
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './config.php';
try {
    require 'vendor/PHPMailer/src/Exception.php';
    require 'vendor/PHPMailer/src/PHPMailer.php';
    require 'vendor/PHPMailer/src/SMTP.php';
} catch (\Throwable $e) {
    echo "This was caught: " . $e->getMessage();
}

if ($_POST['form-name'] === 'registration-form') {


    $firstName = isset($_POST['first-name']) && !empty($_POST['first-name']) ? $_POST['first-name'] : '';
    $lastName = isset($_POST['last-name']) && !empty($_POST['last-name']) ? $_POST['last-name'] : '';
    $email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] : '';
    $previousName = isset($_POST['previous-name']) && !empty($_POST['previous-name']) ? $_POST['previous-name'] : '';
    $dob = isset($_POST['dob']) && !empty($_POST['dob']) ? $_POST['dob'] : '';
    $niNumber = isset($_POST['ni-number']) && !empty($_POST['ni-number']) ? $_POST['ni-number'] : '';
    $utrNumber = isset($_POST['utr-number']) && !empty($_POST['utr-number']) ? $_POST['utr-number'] : '';
    $occupation = isset($_POST['occupation']) && !empty($_POST['occupation']) ? $_POST['occupation'] : '';
    $nationality = isset($_POST['nationality']) && !empty($_POST['nationality']) ? $_POST['nationality'] : '';
    $maritalStatus = isset($_POST['marital-status']) && !empty($_POST['marital-status']) ? $_POST['marital-status'] : '';
    $spouseName = isset($_POST['spouse-name']) && !empty($_POST['spouse-name']) ? $_POST['spouse-name'] : '';
    $marriageDate = isset($_POST['marriage-date']) && !empty($_POST['marriage-date']) ? $_POST['marriage-date'] : '';
    $numChildren = isset($_POST['num-children']) && !empty($_POST['num-children']) ? $_POST['num-children'] : '';
    $address = isset($_POST['address']) && !empty($_POST['address']) ? $_POST['address'] : '';
    $postcode = isset($_POST['postcode']) && !empty($_POST['postcode']) ? $_POST['postcode'] : '';
    $moveInDate = isset($_POST['move-in-date']) && !empty($_POST['move-in-date']) ? $_POST['move-in-date'] : '';
    $previousAddress = isset($_POST['previous-address']) && !empty($_POST['previous-address']) ? $_POST['previous-address'] : '';
    $previousPostcode = isset($_POST['previous-postcode']) && !empty($_POST['previous-postcode']) ? $_POST['previous-postcode'] : '';
    $prevMoveInDate = isset($_POST['prev-move-in-date']) && !empty($_POST['prev-move-in-date']) ? $_POST['prev-move-in-date'] : '';

    $checklist_url = JUBILEE_SITE_URL . "checklist";

    // Prepare email content For User
    ob_start();
    include 'email-templates/thank_you.php';
    $userMessage = ob_get_clean();

    $userMessage = file_get_contents('email-templates/thank_you.php');
    $userMessage = str_replace('[firstName]', $firstName, $userMessage);
    $userMessage = str_replace('[lastName]', $lastName, $userMessage);
    $userMessage = str_replace('[site_url]', $checklist_url, $userMessage);

    // Send email to user
    // send_email_to_user($email, $userMessage);
    send_email_to_user($email, $userMessage);

    // Prepare email content For Admin
    ob_start();
    include 'email-templates/admin_mail_template.php';
    $adminMessage = ob_get_clean();

    // Upload and save the attached files
    $uploadDir = 'uploads/';
    $idProofFile = '';
    $addressProofFile = '';
    $allowedTypes = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
    $maxFileSize = 15 * 1024 * 1024; // 15MB

    if (isset($_FILES['id_proof']) && $_FILES['id_proof']['error'] === UPLOAD_ERR_OK) {
        $idProofFileName = $_FILES['id_proof']['name'];
        $idProofFileType = strtolower(pathinfo($idProofFileName, PATHINFO_EXTENSION));
        $idProofFileSize = $_FILES['id_proof']['size'];

        if (in_array($idProofFileType, $allowedTypes) && $idProofFileSize <= $maxFileSize) {
            $idProofUploadPath = $uploadDir . uniqid() . '.' . $idProofFileType;
            if (move_uploaded_file($_FILES['id_proof']['tmp_name'], $idProofUploadPath)) {
                $idProofFile = $idProofUploadPath;
            }
        } else {
            echo "Sorry, only PDF, JPG, JPEG, PNG, and GIF files up to 15MB are allowed for ID proof.";
        }
    }

    if (isset($_FILES['address_proof']) && $_FILES['address_proof']['error'] === UPLOAD_ERR_OK) {
        $addressProofFileName = $_FILES['address_proof']['name'];
        $addressProofFileType = strtolower(pathinfo($addressProofFileName, PATHINFO_EXTENSION));
        $addressProofFileSize = $_FILES['address_proof']['size'];

        if (in_array($addressProofFileType, $allowedTypes) && $addressProofFileSize <= $maxFileSize) {
            $addressProofUploadPath = $uploadDir . uniqid() . '.' . $addressProofFileType;
            if (move_uploaded_file($_FILES['address_proof']['tmp_name'], $addressProofUploadPath)) {
                $addressProofFile = $addressProofUploadPath;
            }
        } else {
            echo "Sorry, only PDF, JPG, JPEG, PNG, and GIF files up to 15MB are allowed for address proof.";
        }
    }

    // Send email to admin
    // send_email_to_admin($adminMessage, $idProofFile, $addressProofFile);
    send_email_to_admin($adminMessage, $email, $idProofFile, $addressProofFile);
} elseif ($_POST['form-name'] === 'checklist-form') {

    // checklist_process_form.php

    // Retrieve form data
    $firstName = isset($_POST['first-name']) && !empty($_POST['first-name']) ? $_POST['first-name'] : '';
    $lastName = isset($_POST['last-name']) && !empty($_POST['last-name']) ? $_POST['last-name'] : '';
    $email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] : '';
    $taxYear = isset($_POST['tax-year']) && !empty($_POST['tax-year']) ? $_POST['tax-year'] : '';
    $selfEmployed = isset($_POST['self-employed']) && !empty($_POST['self-employed']) ? $_POST['self-employed'] : '';
    $employment = isset($_POST['employment']) && !empty($_POST['employment']) ? $_POST['employment'] : '';
    $property = isset($_POST['property']) && !empty($_POST['property']) ? $_POST['property'] : '';
    $savingsInvestments = isset($_POST['savings-investments']) && !empty($_POST['savings-investments']) ? $_POST['savings-investments'] : '';
    $pensionsBenefits = isset($_POST['pensions-benefits']) && !empty($_POST['pensions-benefits']) ? $_POST['pensions-benefits'] : '';
    $furnishedHolidayLettings = isset($_POST['furnished-holiday-lettings']) && !empty($_POST['furnished-holiday-lettings']) ? $_POST['furnished-holiday-lettings'] : '';
    $rentRoom = isset($_POST['rent-room']) && !empty($_POST['rent-room']) ? $_POST['rent-room'] : '';
    $donationsGiftAid = isset($_POST['donations-gift-aid']) && !empty($_POST['donations-gift-aid']) ? $_POST['donations-gift-aid'] : '';
    $ministersReligion = isset($_POST['ministers-religion']) && !empty($_POST['ministers-religion']) ? $_POST['ministers-religion'] : '';
    $nonResident = isset($_POST['non-resident']) && !empty($_POST['non-resident']) ? $_POST['non-resident'] : '';
    $partnership = isset($_POST['partnership']) && !empty($_POST['partnership']) ? $_POST['partnership'] : '';
    $foreign = isset($_POST['foreign']) && !empty($_POST['foreign']) ? $_POST['foreign'] : '';
    $capitalGains = isset($_POST['capital-gains']) && !empty($_POST['capital-gains']) ? $_POST['capital-gains'] : '';
    $trusts = isset($_POST['trusts']) && !empty($_POST['trusts']) ? $_POST['trusts'] : '';
    $otherIncome = isset($_POST['other-income']) && !empty($_POST['other-income']) ? $_POST['other-income'] : '';

    // Prepare email content For User
    ob_start();
    include 'email-templates/checklist_thank_you.php';
    $userMessage = ob_get_clean();

    $userMessage = file_get_contents('email-templates/checklist_thank_you.php');
    // $userMessage = preg_replace('/<[^>]*>/', '', $userMessage);
    $userMessage = str_replace('[firstName]', $firstName, $userMessage);
    $userMessage = str_replace('[lastName]', $lastName, $userMessage);

    // Send email to user
    // send_email_to_user($email, $userMessage);
    send_email_to_user($email, $userMessage);

    // Prepare email content For Admin
    ob_start();
    include 'email-templates/admin_checklist_mail_template.php';
    $adminMessage = ob_get_clean();

    // Send email to admin
    // send_email_to_admin($adminMessage);
    send_email_to_admin($adminMessage, $email);
} elseif ($_POST['form-name'] === 'home-page-form') {

    // home_process_form.php

    $name = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) && !empty($_POST['address']) ? $_POST['address'] : '';
    $subject = isset($_POST['subject']) && !empty($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) && !empty($_POST['message']) ? $_POST['message'] : '';

    // Prepare email content For User
    ob_start();
    include 'email-templates/home-page-form-thankyou.php';
    $userMessage = ob_get_clean();

    $userMessage = file_get_contents('email-templates/home-page-form-thankyou.php');
    $userMessage = str_replace('[firstName]', $name, $userMessage);

    // Send email to user
    // send_email_to_user($email, $userMessage);
    send_email_to_user($email, $userMessage);

    // Prepare email content For Admin
    ob_start();
    include 'email-templates/admin_homepage_form_mail_template.php';
    $adminMessage = ob_get_clean();


    // Send email to admin
    // send_email_to_admin($adminMessage);
    send_email_to_admin($adminMessage, $email);
}

function send_email_to_admin($adminMessage, $email, $idProofFile = null, $addressProofFile = null)
{
    // Send email to admin

    $adminEmail = JUBILEE_ADMIN_EMAIL; // Replace with your admin email
    $adminSubject = JUBILEE_MAIL_SUBJECT;

    $mail = new PHPMailer(true);

    try {
        // Server settings
        // $mail->SMTPDebug = 2; // Add this line before $mail->isSMTP();
        // $mail->isSMTP();
        // $mail->Host = JUBILEE_MAIL_HOST; // Replace with your SMTP server
        // $mail->SMTPAuth = true;
        // $mail->Username = JUBILEE_MAIL_USERNAME; // Replace with your Gmail email
        // $mail->Password = JUBILEE_MAIL_APP_KEY; // Replace with your Gmail password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        // $mail->Port = 465;


        // Recipients
        $mail->setFrom('admin@jubileeas.co.uk', 'Jubilee Registration');
        $mail->addAddress($adminEmail);
        $mail->addAddress('enquiries@jubileeas.co.uk');

        $mail->addBCC('creativewordpress1947@gmail.com');

        $mail->addReplyTo($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $adminSubject;
        $mail->Body = $adminMessage; // Convert line breaks to <br>

        // Attach files to the email
        if (isset($idProofFile) && !empty($idProofFile)) {
            $mail->addAttachment($idProofFile, 'ID Proof');
        }
        if (isset($addressProofFile) && !empty($addressProofFile)) {
            $mail->addAttachment($addressProofFile, 'Address Proof');
        }
        $mail->send();

        if (isset($idProofFile) && !empty($idProofFile) && file_exists($idProofFile)) {
            unlink($idProofFile);
        }
        if (isset($addressProofFile) && !empty($addressProofFile) && file_exists($addressProofFile)) {
            unlink($addressProofFile);
        }
        echo 'Email sent to admin';
    } catch (Exception $e) {
        $errorMessage = 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        error_log($errorMessage); // Log the error message to a file or database
        echo $errorMessage; // Display the error message on the page
    }

    // Redirect to a thank you page or display a success message
    // header("Location: thank_you.html");
    exit();
}
function send_email_to_user($email, $userMessage)
{
    $mail = new PHPMailer(true);

    try {
        // $mail->SMTPDebug = 2; // Add this line before $mail->isSMTP();
        //Server settings
        // $mail->isSMTP();
        // $mail->Host       = JUBILEE_MAIL_HOST; // Set the SMTP server to send through
        // $mail->SMTPAuth   = true;
        // $mail->Username   = JUBILEE_MAIL_USERNAME; // SMTP username
        // $mail->Password   = JUBILEE_MAIL_APP_KEY; // SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        // $mail->Port       = 465;

        //Recipients
        $mail->setFrom('admin@jubileeas.co.uk', 'Jubilee');
        $mail->addAddress($email); // Add a recipient
        $mail->addBCC('wordpressprojects1947@gmail.com');

        // Add Reply-To header only if adminEmail is provided and valid

        $mail->addReplyTo('admin@jubileeas.co.uk');


        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Contacting Us';
        $mail->Body    = $userMessage;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
