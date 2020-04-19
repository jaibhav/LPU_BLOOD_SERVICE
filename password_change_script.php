<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "config.php";


require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/PHPMailer.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/SMTP.php';
require 'D:\SOFTWARES\xampp\htdocs\blood_service\phpmailer/Exception.php';

$password="";
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $password = trim($_POST["password"]);
    $username=$_SESSION['username'];
    $sql=mysqli_query($link,"SELECT password FROM users WHERE username ='$username'");
    $data = mysqli_fetch_array($sql);
    $hashed_password=$data['password'];

    if(password_verify($password, $hashed_password)){

            // Validate new password
            if(empty(trim($_POST["new_password"]))){
                $new_password_err = "Please enter a password.";     
            } elseif(strlen(trim($_POST["new_password"])) < 6){
                $new_password_err = "Password must have atleast 6 characters.";
            } else{
                $new_password = trim($_POST["new_password"]);
            }
            
            // Validate confirm password
            if(empty(trim($_POST["confirm_password"]))){
                $confirm_password_err = "Please confirm password.";     
            } else{
                $confirm_password = trim($_POST["confirm_password"]);
                if(empty($new_password_err) && ($new_password != $confirm_password)){
                    $confirm_password_err = "Password did not match.";
                }
            }
            
            // Check input errors before inserting in database
            if(empty($new_password_err) && empty($confirm_password_err)){

                $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                // Prepare an insert statement
                $sql_change = "UPDATE users SET password = '$param_password' WHERE username = '$username'";
                
            
                    // Attempt to execute the prepared statement
                    if(mysqli_query($link,$sql_change)==true){
                    
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
                            //$mail->addBCC($mno.'@sms.clicksend.com');
                            $mail->isHTML(true);
                            $mail->Subject='Password Changed Successfully';
                            $mail->Body='<div style="text-align:center;">
                            <img src="http://lbslpu.epizy.com/images/logo.png">
                            <h2>Password Change Successful</h2><br>
                            <p>You have Successfully changed your password of LPU Blood service. </p><br>
                            </div>';
                
                            if(!$mail->send()){
                                echo $mail->ErrorInfo;
                                $mail->smtpClose();

                            } 
                            else{ 
                                $mail->smtpClose();
                                echo '<script>alert("Password Changed Successfully"); window.location="logout.php"</script>';

                            }
                            
                        }
                        
                }
            }
            else{
                echo '<script>alert("Invalid Current Password"); window.location="password_change.php"</script>';
            }
    
}

   

?>
 
