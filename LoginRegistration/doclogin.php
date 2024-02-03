<?php

require_once('DBconnect.php');
if(isset($_POST['email']) && isset($_POST['pass'])){
	$u=$_POST['email'];
	$p=$_POST['pass'];
	$sql="Select * From doctor WHERE email= '$u' AND password='$p'";
	
	$result=mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)!=0){
		header("Location:Doctorhome.php");
	    }
	else{
		header("Location:Doctor login.php");
	}
}
?>
	