<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
        <link rel="stylesheet" href="/MentalHealthCare/css/style1.css" />
    </head>
    <body>
        <div class="wrapper">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_of3skn6w.json"  background="#BAE8C7"  speed="1"  style=" width: 100%; height: 100%;"  loop  autoplay></lottie-player>

            <h2>Registration</h2>
            <form action="\MentalHealthCare\LoginRegistration\regidata.php" method="POST">
                <div class="input-box">
                    <input type="text" placeholder="Enter your name" name="name" required />
                </div>
                <div class="input-box">
                    <input
                        type="text"
                        placeholder="Enter your email"
						name="email"
                        required
                    />
                </div>
                <div class="input-box">
                    <input
                        type="password"
                        placeholder="Create password"
						name="pass"
                        required
                    />
                </div>
                <div class="input-box">
                    <input
                        type="phone"
                        placeholder="Phone Number"
						name="phone"
                        required
                    />
                </div>
                <div class="input-box">
                    <input
                        type="address"
                        placeholder="Address"
						name="address"
                        required
                    />
                </div>
                <div class="policy">
                    <input type="checkbox" />
                    <h3>I accept all terms & condition</h3>
                </div>
                <div class="input-box button">
                    <input type="Submit" name="submit" value="Register Now" />
                </div>
                <div class="text">
                    <h3>Already have an account? <a href="{{url_for('index')}}">Login now</a></h3>
                </div>
            </form>
        </div>
    </body>
</html>
