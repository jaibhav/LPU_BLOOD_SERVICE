<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "config.php";


require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/PHPMailer.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/SMTP.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/Exception.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){

$name=$_POST["user_name"];
$emailid=$_POST["user_email"];
$phone=$_POST["user_phone"];
$subject=$_POST["email_subject"];
$message=$_POST["email_message"];


$mail=new PHPMailer;
					$mail->isSMTP();
					$mail->Host='smtp.gmail.com';
					$mail->SMTPAuth=true;
					$mail->Username='lpubloodservice@gmail.com';
					$mail->Password='lbslpu@123';
					$mail->Port=587;
					$mail->SMTPSecure='tls';
		
					$mail->setFrom('lpubloodservice@gmail.com','LBS@NoReply');
                    $mail->addAddress('lpubloodservice@gmail.com');
					$mail->isHTML(true);
					$mail->Subject=$subject;
                    $mail->Body='<div style="text-align:center;">
                    <img src="http://lbslpu.epizy.com/images/logo.png">
                    <h2>Contact Us Form Data</h2><br>
                    <p>
                    <b>Name : </b>'.$name.' <br>
                    <b>Subject : </b>'.$subject.'<br>
                    <b>Email : </b>'.$emailid.'<br>
                    <b>Phone : </b>'.$phone.'<br>
                    <b>Message : </b>'.$message.'<br>


                    </p>
					</div>';
		
					if(!$mail->send()){
						echo $mail->ErrorInfo;
					} 
					else{ 
                        echo '<script>alert("Successfully Submitted"); window.location="contact.php"</script>';

                    }
                    $mail->smtpClose();


}
?>                    