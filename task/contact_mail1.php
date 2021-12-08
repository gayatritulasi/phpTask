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

 
    $to = 'tulasi.gayathri@gmail.com';
    $header = 'From:tulasi@techmahindrafoundation.org';
    $header.='MIME-Version: 1.0\r\n';
    $header.= 'Content-type:text/html\r\n';
    $emailSend = mail($to, $subject, $message, $header);
    if ($emailSend){
        echo 'Email Sent Successfully';

    }
    else{
        echo 'Could not send mail';
    }
 
 

?>
