<?php require './config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="format-detection" content="telephone=no" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            margin: 0 !important;
            padding: 0 !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background: #080E12;
        }

        img {
            border: 0 !important;
            outline: none !important;
        }

        p {
            margin: 0px !important;
            padding: 0px !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td,
        a,
        span {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (max-width:600px) {
            .main_table {
                width: 95% !important;
            }

            .hide {
                display: none !important;
            }
        }
    </style>
    <!--[if gte mso 9]>
	<xml>
	<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
	</o:OfficeDocumentSettings>
	</xml>
<![endif]-->
</head>

<body style="margin:0px; padding:0px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #080E12">
        <tr>
            <td align="center" valign="top">
                <table width="720" cellpadding="0" cellspacing="0" border="0" align="center" class="main_table" style="table-layout:fixed;">
                    <tr>
                        <td style="height: 40px"></td>
                    </tr>
                    <tr>
                        <td>
                            <table width="720" cellpadding="0" cellspacing="0" border="0" align="center" class="main_table" style="table-layout:fixed;">
                                <tr>
                                    <td style="text-align: center">
                                        <a href="<?php echo JUBILEE_SITE_URL_FOR_EMAIL_TEMPLATE
                                                    ?>" target="_blank">
                                            <img src="<?php echo JUBILEE_SITE_URL_FOR_EMAIL_TEMPLATE
                                                        ?>images/logo-email.png" width="170" style="width: 170px;">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 25px"></td>
                                </tr>
                                <tr>
                                    <td style="font-family: ' Quattrocento', serif; font-size: 25px; line-height: 44px;color:#fff  !important;text-align:center;">
                                        Hello, <?php if (isset($firstName) && !empty($firstName) && isset($lastName) && !empty($lastName)) {
                                                    echo $firstName . ' ' . $lastName;
                                                } ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 40px"></td>
                    </tr>
                </table>
                <table width="720" cellpadding="0" cellspacing="0" border="0" align="center" class="main_table" style="table-layout:fixed; background: #1C262E; border-top-left-radius: 4px; border-top-right-radius: 4px; border: 0px;border-radius: 24px 24px 0 0;">
                    <tr>
                        <td width="25">&nbsp;</td>
                        <td>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="main_table" style="table-layout:fixed;">
                                <tr>
                                    <td style="height: 5px"></td>
                                </tr>
                            </table>
                        </td>
                        <!-- <td width="25">&nbsp;</td> -->
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e1e1e" style=" background: #080E12; border: 0px;">
        <tr>
            <td align="center" valign="top" style="padding-bottom: 80px;">
                <table width="720" cellpadding="0" cellspacing="0" border="0" align="center" class="main_table" style="table-layout:fixed; background: #1C262E; border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
                    <tr>
                        <td width="25" style="width: 25px;">&nbsp;</td>
                        <td valign="top" align="center">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="table-layout:fixed; background: #1C262E">
                                <tr>
                                    <td style="font-size: 0px; line-height: 0px; height: 15px;" height="15"></td>
                                </tr>
                                <tr>
                                    <td style="font-family: ' Quattrocento', serif;text-align: left; font-size: 30px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                        New Tax Return Checklist Submission
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:15px; font-size: 0px; line-height: 0px;"></td>
                                </tr>
                                <!-- <tr>
                                    <td style="font-family: ' Quattrocento', serif;text-align: center; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                        Thank you for your boooking! We are pleased to confirm your booking as follows:
                                    </td>
                                </tr> -->
                                <tr>
                                    <td style="height: 20px;"></td>
                                </tr>
                                <?php if (isset($firstName) && !empty($firstName)) :
                                ?>

                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            First Name:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $firstName;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>

                                <?php endif;
                                if (isset($lastName) && !empty($lastName)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Last Name:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $lastName;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($email) && !empty($email)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Email:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $email;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($phone) && !empty($phone)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important; font-weight: 600;">
                                            Phone:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $phone;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($taxYear) && !empty($taxYear)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Tax Year:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $taxYear;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($selfEmployed) && !empty($selfEmployed)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Self-Employed:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $selfEmployed;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($employment) && !empty($employment)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Employment:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $employment;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($property) && !empty($property)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Property:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $property;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($savingsInvestments) && !empty($savingsInvestments)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Savings and Investments:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $savingsInvestments;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($pensionsBenefits) && !empty($pensionsBenefits)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Pensions and Benefits:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $pensionsBenefits;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($furnishedHolidayLettings) && !empty($furnishedHolidayLettings)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Furnished Holiday Lettings:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $furnishedHolidayLettings;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($rentRoom) && !empty($rentRoom)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Rent a Room:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $rentRoom;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($donationsGiftAid) && !empty($donationsGiftAid)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Donations / Gift Aid:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $donationsGiftAid;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($ministersReligion) && !empty($ministersReligion)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Ministers of Religion:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $ministersReligion;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($nonResident) && !empty($nonResident)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Non-Resident:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $nonResident;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($partnership) && !empty($partnership)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Partnership:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $partnership;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($foreign) && !empty($foreign)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Foreign:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $foreign;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($capitalGains) && !empty($capitalGains)) :
                                ?>

                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Capital Gains:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $capitalGains;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($trusts) && !empty($trusts)) :
                                ?>

                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Trusts:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $trusts;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                <?php endif;
                                if (isset($otherIncome) && !empty($otherIncome)) :
                                ?>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff !important; font-weight: 600;">
                                            Other Income:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:5px; font-size: 0px; line-height: 0px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: ' Quattrocento', serif; font-size: 16px; margin: 0; line-height: 20px; color:#fff  !important;">
                                            <?php echo  $otherIncome;
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 60px;"></td>
                                    </tr>
                                <?php endif;
                                ?>


                                <tr>
                                    <td style="font-family: ' Quattrocento', serif; font-size: 16px; line-height: 28px;color:#fff ;">
                                        Best Regards,
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family: ' Quattrocento', serif; font-size: 16px; font-weight: normal; line-height: 28px; font-weight: 600;color:#fff !important;">
                                        Jubileeas </td>
                                </tr>
                                <tr>
                                    <td style="height: 35px;"></td>
                                </tr>
                            </table>
                            <table width="100%" align="center" cellpadding="0" cellspacing="0" align="center" class="main_table" style="table-layout:fixed; background-color: #68C9FD; border-radius: 16px;margin:0 auto;">
                                <tr>
                                    <td style="height:32px"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border: 0px;" border="0">
                                            <tr>
                                                <td width="25">&nbsp;</td>
                                                <td style="font-family: ' Quattrocento', serif; font-size: 16px; line-height: 28px; font-weight: 600;color:#1C262E ;">
                                                    Need more help?
                                                </td>
                                                <td width="130" style="width: 130px; text-align: center;" align="center">
                                                    <a href="<?php echo JUBILEE_SITE_URL_FOR_EMAIL_TEMPLATE
                                                                ?>" target="_blank" style="display: inline-block; text-decoration: none !important;">
                                                        <img src="<?php echo JUBILEE_SITE_URL_FOR_EMAIL_TEMPLATE
                                                                    ?>images/theme-btn.png" alt="logo" width="130" style="width: 130px;">
                                                    </a>
                                                </td>
                                                <td width="25">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:32px"></td>
                                </tr>
                            </table>
                        </td>
                        <td width="25" style="width: 25px;">&nbsp;</td>
                    </tr>
                </table>
                <table width="720" align="center" cellpadding="0" cellspacing="0" align="center" class="main_table" style="table-layout:fixed; background-color: #1C262E; border-radius: 0 0 24px 24px;">
                    <tr>
                        <td style="height:32px; font-size: 0px; line-height: 0px;"></td>
                    </tr>
                    <tr>
                        <td style="font-family: ' Quattrocento', serif; text-align: center; font-size: 14px; line-height: 24px; color: #fff;">
                            &copy; 2024 Jubilee. All Rights Reserved.
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 32px;"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>