<?php

require_once('../DBconnect.php');


if(isset($_POST['name']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['date'])){
	// write the query to check if this username and password exists in our database
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number= $_POST['number'];
	$date = $_POST['date'];

    $sql = "INSERT INTO appointments (name, number, email, appointment_date) VALUES ('$name', '$number', '$email', '$date')";
    $result = mysqli_query($conn, $sql) ;
    if(mysqli_affected_rows($conn)){    
        header("Location: Contact medical.php");
    }
    else{

			echo "No entry";
		}
	}
?>