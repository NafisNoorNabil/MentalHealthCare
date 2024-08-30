<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/MentalHealthCare/css/Homepage.css" />
</head>
<body>
    <?php include('navbar.php'); ?>
    <section>
        <div class="lottie">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_zly3nrlb.json"  background="transparent"  speed="1"  style="width: 80%; height:90%;"  loop  autoplay></lottie-player>
        </div>
        <div class="new">
            <h1>Let's heal through conversations.</h1>
            <a class="submit-btn" href="questions.php">Diagnose Problem</a>
            <a class="submit-btn" href="contact medical.php">Book a Therapist</a>
        </div>
    </section>
</body>
</html>
