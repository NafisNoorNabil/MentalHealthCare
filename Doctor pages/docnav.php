<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/MentalHealthCare/css/docnav.css" />
   

</head>
<body>
    <header>
    
    <?php
        session_start();

        // Check if the user is logged in
        if (!isset($_SESSION['email'])) {
            // Redirect to login page or handle unauthorized access
            header("Location: /MentalHealthCare/loginregistration/doctorlogin.php");
            exit();
        }
        $email = $_SESSION['email'];
        $name = $_SESSION['name'];
        ?>

        
        <div class="wrapper">
            <ul class="nav-area">
                <li><a href="Doctorhome.php">Home</a></li>
                <li><a href="docforum.php">Discuss Forum</a></li>
                <li><a href="patientinfo.php">Patient information</a></li>
                <li class="dropdown">
                <a href="#" class="dropbtn"><?php echo "$name [$email]"; ?></a>
                <div class="dropdown-content">
                        <a href="/MentalHealthCare/doctor pages/logout.php">Logout</a>
                </div>
                </li>
            </ul>
        </div>
    </header>
</body>
</html>