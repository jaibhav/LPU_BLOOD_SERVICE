<?php
	if(isset($_POST['submit'])){
		$name=$_POST['user_name'];
		$email=$_POST['user_email'];
		$subject=$_POST['email_subject'];
		$phone=$_POST['user_phone'];
		$msg=$_POST['email_message'];

		$to='lpubloodservice@gmail.com'; // Receiver Email ID
		$message="Name :".$name."\n"."Subject".$subject."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		//$headers="From: ".$email;

		// if(mail($to, $subject, $message, $headers)){
		// 	echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		// }
		// else{
		// 	echo "Something went wrong!";
		// }
	}
?>