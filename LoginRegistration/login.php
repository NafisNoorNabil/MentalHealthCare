<?php

require_once('DBconnect.php');
if(isset($_POST['email']) && isset($_POST['pass'])){
	$u=$_POST['email'];
	$p=$_POST['pass'];
	$sql="Select * From patient WHERE email= '$u' AND password='$p'";
	
	$result=mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)!=0){
		header("Location:Homepage.php");
	    }
	else{
		echo "Email or Password is wrong";
		header("Location:index.php");
	}
}
?>
	