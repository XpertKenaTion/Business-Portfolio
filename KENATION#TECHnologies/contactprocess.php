<?php
session_start();
require "dbConnect.php";

print $_POST["messages"];
if(isset($_POST["messages"])){

	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$messages =  $_POST["messages"];
	
	require "mailprocesses/sendMail.php";
	$user_insert = "INSERT INTO messages(fullname, email,subject, messages) VALUES('$fullname','$email','$subject','$messages')";

	if($conn->query($user_insert) === TRUE){
		       header("Location: index.html");
		        exit();
		      
	}else{
		print $conn->error;
	}
}



?>