<?php
// first of all, we need to connect to the database
require_once('../DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['phone'])&& isset($_POST['address'])){
	// write the query to check if this username and password exists in our database
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
    $medicalcenter = $_POST['medicalcenter'];
	
	$query= mysqli_query($conn, "select *from doctor where email='$email'");
	if (mysqli_num_rows($query)>0){
		echo "email already exist";}
	else{
		$sql = " INSERT INTO doctor VALUES( '$name ', '$email', '$pass', '$phone','$address','$medicalcenter' )";
		
		//Execute the query 
		$result = mysqli_query($conn, $sql);
		
		//check if this insertion is happening in the database
		if(mysqli_affected_rows($conn)){
	
			
			header("Location: Doctor login.php");
		}
		else{

			header("Location: Doctor regi.php");
		}
	}

	
}
?>