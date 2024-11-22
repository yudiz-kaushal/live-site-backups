<?php

/****************************** SMTP Configuration ******************************/

if (!defined('JUBILEE_ADMIN_EMAIL')) {
    define('JUBILEE_ADMIN_EMAIL', 'admin@jubileeas.co.uk');
}
if (!defined('JUBILEE_MAIL_HOST')) {
    define('JUBILEE_MAIL_HOST', 'smtp.ionos.co.uk');
}
if (!defined('JUBILEE_MAIL_SUBJECT')) {
    define('JUBILEE_MAIL_SUBJECT', 'New Registration');
}
if (!defined('JUBILEE_MAIL_USERNAME')) {
    define('JUBILEE_MAIL_USERNAME', 'admin@jubileeas.co.uk');
}
if (!defined('JUBILEE_MAIL_APP_KEY')) {
    define('JUBILEE_MAIL_APP_KEY', 'juE8+i92S1!');
}

/****************************** Home URL ******************************/
if (isset($_SERVER['HTTP_HOST']) && isset($_SERVER['PHP_SELF'])) {
    $host  = $_SERVER['HTTP_HOST'];
    $path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $path_for_email_template = str_replace('/email-templates', '', $path);
    $site_url = "https://" . $host . $path . "/";
    $site_url_for_email_template = "https://" . $host . $path_for_email_template . "/";
} else {
    $site_url = '#';
    $site_url_for_email_template = 'https://www.jubileeas.co.uk/';
}
if (!defined('JUBILEE_SITE_URL')) {
    define('JUBILEE_SITE_URL', $site_url);
}
if (!defined('JUBILEE_SITE_URL_FOR_EMAIL_TEMPLATE')) {
    define('JUBILEE_SITE_URL_FOR_EMAIL_TEMPLATE', $site_url_for_email_template);
}
