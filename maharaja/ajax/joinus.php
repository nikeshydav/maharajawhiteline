<?php
$frmName = $_POST['frmName'];
$visitorName = $_POST['name'];
$visitorEml = $_POST['eml'];
$visitorAre = $_POST['area'];
$visitorQuali = $_POST['quali'];
$visitorcurloc = $_POST['curloc'];
$visitorDob = $_POST['dob'];
$visitorTel = $_POST['tel'];
$visitorExp = $_POST['exp'];
$visitorRole = $_POST['role'];
$visitorPreloc = $_POST['preloc'];

$resume = $_FILES['resume'];

$messageSub="A Form has been filled on www.maharajawhiteline.com(Career at Maharaja)";
$messageBody = "A user has submitted A Form on www.maharajawhiteline.com (Career at Maharaja)";
$visitorSubject = "Successful Submission www.maharajawhiteline.com  (Career at Maharaja)";

$notificationEmail[] = 'me@nikeshyadav.com';
$notificationEmail[] = 'gupta.nikhil291@gmail.com';
$notificationEmail[] = 'shalini.gupta@maharajawhiteline.com';


$message = "Thank you for filling up the details. Someone from our team will contact you shortly.<br/><br/>Please find below the details<br/><br/>" .
        "Name: " . $visitorName . "<br/><br/>" .
        "<br/><br/>Email :" . $visitorEml.
        "<br/><br/>Mobile No :" . $visitorTel.   
        "<br/><br/>Date of Birth :" . $visitorDob .   
        "Area of Operation :" . $visitorAre.
        "<br/><br/>Preferred Location :" . $visitorPreloc.
        "<br/><br/>Current Location :" . $visitorcurloc.
        "<br/><br/>Qualification :" . $visitorQuali.
        "<br/><br/>Experience :" . $visitorExp.
        "<br/><br/>Mobile No :" . $visitorTel.             
        "<br/><br/>Role Applied For:" . $visitorRole.
        "<br/><br/><br/><br/>Thanks,<br/><br/>Maharaja Whiteline Webmaster";

$headers = "From: noreply@maharajawhiteline.com\r\n";
$headers .= "Reply-To: noreply@maharajawhiteline.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($visitorEml, $visitorSubject, $message, $headers);



$message = $messageBody . "<br/><br/>Please find below the details<br/><br/>" .
        "Name: " . $visitorName . "<br/><br/>" .
        "<br/><br/>Email :" . $visitorEml.
        "<br/><br/>Mobile No :" . $visitorTel.   
        "<br/><br/>Date of Birth :" . $visitorDob .   
        "Area of Operation :" . $visitorAre.
        "<br/><br/>Preferred Location :" . $visitorPreloc.
        "<br/><br/>Current Location :" . $visitorcurloc.
        "<br/><br/>Qualification :" . $visitorQuali.
        "<br/><br/>Experience :" . $visitorExp.
        "<br/><br/>Mobile No :" . $visitorTel.             
        "<br/><br/>Role Applied For:" . $visitorRole.
        "<br/><br/><br/><br/>Thanks,<br/><br/>Maharaja Whiteline Webmaster";

$headers = "From: " . strip_tags($visitorEml) . "\r\n";
$headers .= "Reply-To: " . strip_tags($visitorEml) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

foreach ($notificationEmail as  $value) {
    mail($value, $messageSub, $message, $headers);
}


echo '<h1>THANK YOU FOR YOUR REQUEST.</h1>';
