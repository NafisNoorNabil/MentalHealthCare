<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Questionnaire</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/MentalHealthCare/css/questions.css?v=<?php echo time(); ?>"> 
    <style>
        .mental-health-condition {
            display: none;
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_7bfNOv.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
    <form id="Questionnaire">
        <div class="head">
            <p>Choose your symptoms</p>
        </div>
        <div class="boxes">
        <p><input type="checkbox" name="q[]" value="anxiety"> Getting worked up/stressed about every little thing</p>
                <p><input type="checkbox" name="q[]" value="anxiety"> Constant worrying about future events</p>
                <p><input type="checkbox" name="q[]" value="depression"> Loss of interest or pleasure in activities</p>
                <p><input type="checkbox" name="q[]" value="adhd"> Difficulty staying focused on tasks</p>
                <p><input type="checkbox" name="q[]" value="depression"> Changes in appetite or weight</p>
                <p><input type="checkbox" name="q[]" value="adhd"> Difficulty organizing tasks</p>
                <p><input type="checkbox" name="q[]" value="insomnia"> Difficulty falling asleep</p>
                <p><input type="checkbox" name="q[]" value="ocd"> Needing things to be arranged in a particular way</p>
                <p><input type="checkbox" name="q[]" value="adhd"> Impulsive behavior</p>
                <p><input type="checkbox" name="q[]" value="anxiety"> Feeling restless or on edge</p>
                <p><input type="checkbox" name="q[]" value="depression"> Feeling hopeless or pessimistic</p>
                <p><input type="checkbox" name="q[]" value="insomnia"> Feeling tired or not well-rested in the morning</p>
                <p><input type="checkbox" name="q[]" value="ocd"> Constantly checking things</p>
                <p><input type="checkbox" name="q[]" value="insomnia"> Waking up frequently during the night</p>
                <p><input type="checkbox" name="q[]" value="ocd"> Intrusive thoughts or fears</p>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="mental-health-condition anxiety">
        <h2>Anxiety</h2>
        <!-- Add information about anxiety -->
    </div>

    <div class="mental-health-condition depression">
        <h2>Depression</h2>
        <!-- Add information about depression -->
    </div>

    <div class="mental-health-condition adhd">
        <h2>ADHD</h2>
        <!-- Add information about ADHD -->
    </div>

    <div class="mental-health-condition insomnia">
        <h2>Insomnia</h2>
        <!-- Add information about insomnia -->
    </div>

    <div class="mental-health-condition ocd">
        <h2>OCD</h2>
        <!-- Add information about OCD -->
    </div>

    <script>
        document.getElementById('Questionnaire').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            
            var selectedSymptoms = [];
            var symptoms = document.querySelectorAll('input[name="q[]"]:checked');
            symptoms.forEach(function(symptom) {
                selectedSymptoms.push(symptom.value);
            });
            
            // Hide all mental health condition sections
            document.querySelectorAll('.mental-health-condition').forEach(function(el) {
                el.style.display = 'none';
            });
            
            // Show relevant mental health condition sections based on selected symptoms
            selectedSymptoms.forEach(function(symptom) {
                var conditionSection = document.querySelector('.mental-health-condition.' + symptom);
                if (conditionSection) {
                    conditionSection.style.display = 'block';
                }
            });
        });
    </script>
</body>
</html>