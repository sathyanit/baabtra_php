<?php

	$name=$_POST['fname'];
	$lname=$_POST['lname']; 
	$phone=$_POST['mobile'];
	$email=$_POST['emailid'];
	$password=$_POST['passwrd'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$gender=$_POST['gender'];
	$emailcheck="";
	if($name=="")
	{
		$msg['namemsg']="enter name";
	}
	else if(strlen($name)<6)
	{
		$msg['namemsg']="minimum 6 letters";
	}
	
	if($lname=="")
	{
		$msg['lnamemsg']="enter last name";
	}
	
	if($phone=="")
	{
		$msg['phonemsg']="enter phone";
	}
	
	if($email=="")
	{
		$msg['emailmsg']="enter email";
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$msg['emailmsg']="invalid email!";
	}
	if($password=="")
	{
		$msg['passwrdmsg']="enter password";
	}
	header('location:index.php?'.http_build_query($msg));
?>