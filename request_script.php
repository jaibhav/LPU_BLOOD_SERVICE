<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    
require_once "config.php";


require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/PHPMailer.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/SMTP.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/Exception.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $bgrp=trim($_POST["bgrp"]);

    $sql_brequest="SELECT username,mobno FROM users where bgrp='$bgrp' ";
    $brequest_query=mysqli_query($link,$sql_brequest);
            
            // Attempt to execute the prepared statement
            if (mysqli_num_rows($brequest_query) == 0)
                //error here
             {
                 echo '<script>alert("No Donor Found"); window.location="request_blood.php"</script>';
                // header("location: request_loggedin.php");
                // exit;
                echo "error";



                }
                else   {
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
                    while($rows=mysqli_fetch_array($brequest_query)){
                        $mail->addBCC($rows['username']);
                        $mail->addBCC($rows['mobno'].'@sms.clicksend.com');
                    }
                    
					$mail->isHTML(true);
					$mail->Subject='Blood Required';
					$mail->Body='<div style="text-align:center;">
                    <img src="http://lbslpu.epizy.com/images/logo.png">
                    <h2>BLOOD REQUIRED</h2><br>
                    <p>There is an emergency case in UniHospital matching your Blood Group.</p><br>
                    </div>';
		
					if(!$mail->send()){
						echo $mail->ErrorInfo;
					} 
					else{ 
                        echo '<script>alert("Successfully Sent"); window.location="request_blood.php"</script>';

                    }
                    $mail->smtpClose();


                    

                }

}
?>
 
