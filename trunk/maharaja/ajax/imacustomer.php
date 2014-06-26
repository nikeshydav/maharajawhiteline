<?php

$frmName = $_POST['frmName'];

$visitorName = $_POST['name'];
$visitorAdd = $_POST['address'];
$visitorTel = $_POST['tel'];
$visitorEml = $_POST['eml'];
$visitorRemark = $_POST['remark'];
$visitorEnquiry = '';


switch ($frmName) {
    case 'consumer':
        $messageSub = "A Form has been filled on www.maharajawhiteline.com(I'm a Consumer)";
        $messageBody = "A user has submitted A Form on www.maharajawhiteline.com (I'm a Consumer)";
        $visitorSubject = "Successful Submission www.maharajawhiteline.com  (I'm a Consumer)";
        $visitorEnquiry = "<br/><br/>Enquiry :" . $_POST['enquiry'];
        $notificationEmail[] = 'madhushri.sharma@maharajawhiteline.com';
        $notificationEmail[] = 'vikas.zadoo@maharajawhiteline.com';
        $notificationEmail[] = 'rakesh.gupta@maharajawhiteline.com';
        if($_POST['enquiry'] == 'Service requirement') {
            $notificationEmail[] = 'customercare@maharajawhiteline.com';
        }
        break;

    case 'partner':
        $messageSub = "A Form has been filled on www.maharajawhiteline.com(I'm a partner)";
        $messageBody = "A user has submitted A Form on www.maharajawhiteline.com (I'm a partner)";
        $visitorSubject = "Successful Submission www.maharajawhiteline.com  (I'm a partner)";
        $visitorEnquiry = "<br/><br/>Enquiry :" . $_POST['enquiry'];
        $notificationEmail[] = 'shirish.khedkar@maharajawhiteline.com';
        $notificationEmail[] = 'rahul.mehrotra@maharajawhiteline.com';
        $notificationEmail[] = 'rakesh.gupta@maharajawhiteline.com';
        break;

    case 'distributor':
        $messageSub = "A Form has been filled on www.maharajawhiteline.com(Distrbutor Enquiry)";
        $messageBody = "A user has submitted A Form on www.maharajawhiteline.com (Distrbutor Enquiry)";
        $visitorSubject = "Successful Submission www.maharajawhiteline.com  (Distrbutor Enquiry)";
        $visitorEnquiry = "<br/><br/>Enquiry :" . $_POST['enquiry'];
        /*$notificationEmail[] = 'me@nikeshyadav.com';
        $notificationEmail[] = 'gupta.nikhil291@gmail.com';*/
        $notificationEmail[] = 'shirish.khedkar@maharajawhiteline.com';
        $notificationEmail[] = 'rahul.mehrotra@maharajawhiteline.com';
        $notificationEmail[] = 'rakesh.gupta@maharajawhiteline.com';
        break;


    case 'institutional':
        $messageSub = "A Form has been filled on www.maharajawhiteline.com(Institutional Query)";
        $messageBody = "A user has submitted A Form on www.maharajawhiteline.com (Institutional Query)";
        $visitorSubject = "Successful Submission www.maharajawhiteline.com  (Institutional Query)";
        $notificationEmail[] = 'shindekb@maharajawhiteline.com';
        $notificationEmail[] = 'lalit.kathuria@maharajawhiteline.com';
        break;


    default:
        break;
}


$message = "Thank you for filling up the details. Some one from our team will contact you shortly.<br/><br/>Please find below the details<br/><br/>" .
        "Name: " . $visitorName . "<br/><br/>" .
        "Address :" . $visitorAdd
        . "<br/><br/>Mobile :" . $visitorTel
        . "<br/><br/>Email :" . $visitorEml . $visitorEnquiry
        . "<br/><br/>Remark:" . $visitorRemark
        . "<br/><br/><br/><br/>Thanks,<br/><br/>Maharaja Whiteline Webmaster";

$headers = "From: noreply@maharajawhiteline.com\r\n";
$headers .= "Reply-To: noreply@maharajawhiteline.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($visitorEml, $visitorSubject, $message, $headers);



$message = $messageBody . "<br/><br/>Please find below the details<br/><br/>" .
        "Name: " . $visitorName . "<br/><br/>" .
        "Address :" . $visitorAdd
        . "<br/><br/>Mobile :" . $visitorTel
        . "<br/><br/>Email :" . $visitorEml
        . "<br/><br/>Enquiry :" . $visitorEnquiry
        . "<br/><br/>Remark:" . $visitorRemark
        . "<br/><br/><br/><br/>Thanks,<br/><br/>Maharaja Whiteline Webmaster";

$headers = "From: " . strip_tags($visitorEml) . "\r\n";
$headers .= "Reply-To: " . strip_tags($visitorEml) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

foreach ($notificationEmail as $value) {
    mail($value, $messageSub, $message, $headers);
}


echo '<h1>THANK YOU FOR YOUR REQUEST.</h1>';

define('DRUPAL_ROOT', '/home/maharaja/public_html/');
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

//INSERT INTO `maharaja_mainsite`.`maha_contactus` (`id`, `form`, `name`, `address`, `tel`, `eml`, `remark`, `enquiry`, `toe`) VALUES (NULL, 'test', 'test', 'test', 'tesrt', 'test', 'rt', '', CURRENT_TIMESTAMP);
db_insert('contactus')
        ->fields(array(
            'form' => $frmName,
            'name' => $visitorName,
            'address' => $visitorAdd,
            'tel' => $visitorTel,
            'eml' => $visitorEml,
            'remark' => $visitorRemark,
            'enquiry' => $visitorEnquiry
        ))
        ->execute();
