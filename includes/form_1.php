<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['input_240']) && strlen($_POST['input_240']) == 0 || empty($_POST['input_1673']) && strlen($_POST['input_1673']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$input_240 = $_POST['input_240'];
	$input_1673 = $_POST['input_1673'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Blocs Website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nInput_240: $input_240 \nInput_1673: $input_1673 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_1673";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>