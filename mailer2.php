<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'contact@riddhi-siddhienterprise.com'; 
$fromsubject = 'Ridhi Siddhi Enterprise';
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$phone = $_POST['phone']; 
$subject = $_POST['subject'];
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$fname.'
	 Phone Number: '.$phone.'
	 E-mail: '.$mail.'
	 Subject: '.$subject.'
	 Design: '.$design.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
//echo "Thank you fo your interest. We will contact you shortly.<br/>Go to <a href='/index.php'>Home Page</a>"; 
		$result = mail($to, $subject, $body);
		if($result) {echo "Thank you fo your interest. We will contact you shortly.<br/>Go to <a href='index.html'>Home Page</a>";}
		else {echo "Error submitting form. Please go back and try again";}
 } else { 
echo "You must write a message. </br> Please go to <a href='contact.html'>Contact Page</a>"; 
}
?> 