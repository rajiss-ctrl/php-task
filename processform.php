<?php
if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['subject']) && !empty($_POST['subject']))){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "omosanjos77@gmail.com";
$headers = "From : " . $email;

if( mail($to, $subject, $message, $headers,)){
	echo "E-mail sent successfully. we will get back to you soon.";
}
$connection = mysqli_connect('locahost', 'root', '');
if(!$connection){
	die("Database connection Failed" . mysqli_error($connection));

	
}
$select_db = mysqli_select_db($connection, 'demo');
if(!$select_db){
	die("Database selection Failed" . mysqli_error($connection));
}



}
?>