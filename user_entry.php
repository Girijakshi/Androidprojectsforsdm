<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	
	 require_once('dbConnect.php');
	 
	 $sql = "INSERT INTO `register`(`name`, `password`, `email`, `phonno`) VALUES ('$name','$password','$email','$phoneno')";
	 
 //$sql = "INSERT INTO 'register'('name', 'password','email',	'phonno') VALUES ('$name','$password','$email','$phoneno')";
	 if(mysqli_query($con,$sql)){
		 
		 echo "success";
		 
	 }
	 mysqli_close($con);
}
	 else
	 {
		 echo "error";
	 }
?>	 
	
	