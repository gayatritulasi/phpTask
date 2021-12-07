<?php
//include ('phpmailer/PHPMailerAutoload');
include ('phpmailer/PHPMailer.php');
include ('phpmailer/SMTP.php');
include ('phpmailer/Exception.php');


// The message
$message = 'Iam '.$_GET['firstname']. ' '.$_GET['lastname'].'from ' .$_GET['country'].' would like to update you about! '.$_GET['subject'] ;
$subject = 'Contact - Movies';
$to = 'tulasi.gayathri@gmail.com';
 
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    // Server settings
    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'tulasi.gayathri@gmail.com'; // YOUR gmail email
    $mail->Password = 'tulasi@1234'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('tulasi.gayathri@gmail.com', 'Sender Name');
    $mail->addAddress('tulasi@techmahindrafoundation.org', 'Receiver Name');
    

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
      $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}

?>
