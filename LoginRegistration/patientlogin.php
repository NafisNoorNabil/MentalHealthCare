
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Mental Health Care </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <style>
        form{
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
    <section>
        <div class="imgBx">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_of3skn6w.json"  background="#BAE8C7"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
        </div>
        <div class="contentBx">
            <h1 class="header"> Mental Health Care</h1>
            <div class="formBx">
                <h1>Login</h1>
                <form action="login.php" class="form_design" method="post" >
                    <div class="inputBx">
                        Email <input type="email" name="email"/>
                    </div>

                    <div class="inputBx">

                         Password <input type="password" name="pass"/>
                    </div>

                    <div>
                        <br>
                        <input type="submit" value="LOGIN" name="">

                    </div>
                    <div class="inputBx">
                        <br>
                        <p> Don't have an account? </p>
                    </div>
                    <button class="submit-btn"><a href="regi.php">Create an account</a></button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
