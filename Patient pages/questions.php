
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Questionnaire</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="/MentalHealthCare/css/questions.css?v=<?php echo time(); ?>"> 
    </head>

    <body>
    <?php include('navbar.php'); ?>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_7bfNOv.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
            <form  action="qdata.php" method="post" name="questionnaire" id="Questionnaire">
                


                <div class="head">
                    <p> Choose your symptoms</p>
                </div>
                <div class="boxes">
                    <p><input type="checkbox" name="q[]" value="1">  Getting worked up/stressed about every little things</p>
                    <p><input type="checkbox" name="q[]" value="2">  Having breathing difficulties/ noticeable perspiration/ sudden panic attacks</p>
                    <p><input type="checkbox" name="q[]" value="3">  Having little energy/Not being able to control overthinking</p>
                    <p><input type="checkbox" name="q[]" value="4">  Having poor appetite/overeating</p>
                    <p><input type="checkbox" name="q[]" value="5">  Feeling impulsiveness/excessive restlessness</p>
                    <p><input type="checkbox" name="q[]" value="6">  Having difficulties falling asleep/ not being able to sleep at all</p>
                    <p><input type="checkbox" name="q[]" value="7">  Having short time memory loss problem</p>
                    <p><input type="checkbox" name="q[]" value="8">  Having the need to keep things in an orderly state/ symmetrical position</p>
                    <p><input type="checkbox" name="q[]" value="9">  Having aggressive thoughts of harming yourself most often</p>
                    <p><input type="checkbox" name="q[]" value="10">  Feeling mentally exhausted all the time</p>
                </div>


                <br>
                <button type="submit" name="save_multiple_checkbox" class="btn btn-primary">Submit</button>

            </form>


    </body>
</html>