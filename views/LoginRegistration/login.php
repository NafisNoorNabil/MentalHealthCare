<?php
require_once('../DBconnect.php');

if(isset($_POST['email']) && isset($_POST['pass'])){
    $u = $_POST['email'];
    $p = $_POST['pass'];

    $sql = "SELECT * FROM patient WHERE email = '$u' AND pass = '$p' ";
    
    $result = mysqli_query($conn, $sql);

    if($result !== false) {
        if(mysqli_num_rows($result) != 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            session_start();
            $_SESSION['email'] = $u; 
            $_SESSION['name'] = $name; 
            header("Location: /MentalHealthCare/Patient pages/Homepage.php");

        
        } else {
            echo "Email or Password is wrong";
            header("Location: patientlogin.php");
        }
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }
}
?>
