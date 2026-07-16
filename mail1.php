<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';


$mail = new PHPMailer(true);


$body = "";
$body .= '<h4>New Lead Dr Gaurav Mathpal Website</h4>';
$body .= '<h5>Client Details:</h5>';
$body .= 'Name: ' . $_POST['name'] . "<br>";
$body .= 'Phone Number: ' . $_POST['phone'] . "<br>";
$body .= 'Service: ' . $_POST['service'] . "<br>";
$body .= 'Message: ' . $_POST['message'] . "<br>";


try {
    // SMTP Settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@retrofusion.in';
    $mail->Password = '#tORTx2j30';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    // Email Settings
    $mail->setFrom('contact@retrofusion.in', $_POST['name']);
    $mail->addAddress('manishkushwahaf7@gmail.com', $_POST['name']); // Add a recipient
    $mail->addAddress('mathpalgaurav@gmail.com', $_POST['name']); // Add a recipient
    $mail->Subject = 'New Lead Dr Gaurav Mathpal Website';
    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    $mail->send();
    header("Location: thankyou.php");
    exit();
} catch (Exception $e) {
    echo "<script>
        alert('Mail Error: {$mail->ErrorInfo}');
        window.location.href = 'index.php';
    </script>";
}



?>