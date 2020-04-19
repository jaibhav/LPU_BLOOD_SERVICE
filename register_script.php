<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "config.php";

require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/PHPMailer.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/SMTP.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/Exception.php';

 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (fname,lname,username,regno,mobno,password,bgrp) VALUES (?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssiiss", $fname,$lname,$param_username,$rno,$mno,$param_password,$bgrp);
            // Set parameters
            $fname=trim($_POST["first_name"]);
            $lname=trim($_POST["last_name"]);
            $rno=trim($_POST["regno"]);
            $mno=trim($_POST["mobno"]);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $bgrp=trim($_POST["bgrp"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //send registration email
                    // Authorisation details.
                        
                    // $sms_username = "er.jaibhav@gmail.com";
                    // $hash = "6a50015906447420ff4d2a9b4e0a527860da170e95438b3f472805080e79ce4c";

                    // // Config variables. Consult http://api.textlocal.in/docs for more info.
                    // $test = true;

                    // // Data for text message. This is the text message data.
                    // $sender = "TXTLCL"; // This is who the message appears to be from.
                    // $numbers = "917579228877"; // A single number or a comma-seperated list of numbers
                    // $message = "This is a test message from the PHP API script.";
                    // // 612 chars or less
                    // // A single number or a comma-seperated list of numbers
                    // $message = urlencode($message);
                    // $data = "username=".$sms_username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
                    // $ch = curl_init('http://api.textlocalb.in/send/?');
                    // curl_setopt($ch, CURLOPT_POST, true);
                    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    // $result = curl_exec($ch); // This is the result from the API
                    // curl_close($ch);
                    // echo($result);



                    //     //messagge trial

                    
                    // // Account details
                    // $apiKey = urlencode('zBnjiGSpw1c-IYdlA2lYF1MVqdSwrCZBHjK9WvTUD4');
                    
                    // // Message details
                    // $numbers = array(917579228877,917017349434);
                    // $sender = urlencode('TXTLCL');
                    // $message = rawurlencode('This is LBS message');
                 
                    // $numbers = implode(',', $numbers);
                 
                    // // Prepare data for POST request
                    // $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
                 
                    // // Send the POST request with cURL
                    // $ch = curl_init('https://api.textlocal.in/send/');
                    // curl_setopt($ch, CURLOPT_POST, true);
                    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    // $response = curl_exec($ch);
                    // curl_close($ch);
                    
                    // // Process your response here
                    // echo $response;
                
                
                    //working sms from 'AXSMSIND'
                    // $url="https://www.sms4india.com/api/v1/sendCampaign";
                    // $message = urlencode("WELCOME TO LBS");// urlencode your message
                    // $curl = curl_init();
                    // curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
                    // curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=05SQW55YYPUFR5SNOIS4T5ZQPB7O8R6O&secret=3YI90GU48E193U66&usetype=stage&phone=7579228877&senderid=er.jaibhav@gmail.com&message=$message");// post data
                    // // query parameter values must be given without squarebrackets.
                    // // Optional Authentication:
                    // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                    // curl_setopt($curl, CURLOPT_URL, $url);
                    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                    // $result = curl_exec($curl);
                    // curl_close($curl);
                    // echo $result;

                    $mail=new PHPMailer;
					$mail->isSMTP();
					$mail->Host='smtp.gmail.com';
					$mail->SMTPAuth=true;
					$mail->Username='lpubloodservice@gmail.com';
					$mail->Password='lbslpu@123';
					$mail->Port=587;
					$mail->SMTPSecure='tls';
		
					$mail->setFrom('lpubloodservice@gmail.com','LBS@NoReply');
                    $mail->addAddress($username);
                    $mail->addBCC($mno.'@sms.clicksend.com');
					$mail->isHTML(true);
					$mail->Subject='Registered Successfully';
                    $mail->Body='<div style="text-align:center;">
                    <img src="http://lbslpu.epizy.com/images/logo.png">
                    <h2>WELCOME</h2><br>
                    <p>You have Successfully Registered in LPU Blood service. </p><br>
					<b>User ID : '.$username.'</b><br>
					</div>';
		
					if(!$mail->send()){
						echo $mail->ErrorInfo;
					} 
					else{ 
                        echo '<script>alert("Successfully Registered"); window.location="login.php"</script>';

                    }
                    $mail->smtpClose();
                    
                    
				}
                // Redirect to login page
                header("location: login.php");
                

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
