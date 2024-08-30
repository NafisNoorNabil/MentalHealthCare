<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/MentalHealthCare/css/contactmedical.css?v=<?php echo time(); ?>" />
        <title>Medical Help</title>
    </head>
    <body>
    <?php include('navbar.php'); ?>
        <section class="doctors" id="doctors">
            <h1 class="heading">Our <span> Doctors</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="/MentalHealthCare/images/male.png" alt="" />
                    <h3>Nafis</h3>
                    <span>Therapist</span>

                </div>
                <div class="box">
                    <img src="/MentalHealthCare/images/male.png" alt="" />
                    <h3>Siam</h3>
                    <span>psychiatrist</span>

                </div>
                <div class="box">
                    <img src="/MentalHealthCare/images/female.png" alt="" />
                    <h3>Farhana</h3>
                    <span>Psychologist</span>

                </div>
                <div class="box">
                    <img src="/MentalHealthCare/images/male.png" alt="" />
                    <h3>Sabir</h3>
                    <span>Therapist</span>

                </div>
                <div class="box">
                    <img src="/MentalHealthCare/images/male.png" alt="" />
                    <h3>Mahmud</h3>
                    <span>Counselor</span>
                </div>
                <div class="box">
                    <img src="/MentalHealthCare/images/male.png" alt="" />
                    <h3>Arif</h3>
                    <span>Therapist</span>
                </div>
            </div>
        </section>



        <section class="book" id="book">
            <h1 class="heading"><span>book</span> now</h1>

            <div class="row">
                <div class="image">
                    <img src="/MentalHealthCare/images/consultation.png" alt="" />
                </div>

                <form action="booking.php" method="POST">
                    <h3>Book Appointment</h3>
                    <input type="text" name="name" placeholder="Name" class="box" required/>
                    <input type="number" name="number" placeholder="Number" class="box" required/>
                    <input type="email" name="email" placeholder="Email" class="box" required/>
                    <input type="date" name="date" class="box" required/>
                    <input type="submit" value="Book Now" class="btn" />
                    <a class="btn" href="Payment.php">Payment</a>
                </form>
            </div>
        </section>



        <section class="map" id="map">
            <h1 class="heading"><span>Nearby Health Care Centers</span></h1>
            <p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58426.406336248896!2d90.40325586443107!3d23.75984324624278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smental%20health%20clinic!5e0!3m2!1sen!2sbd!4v1650088125585!5m2!1sen!2sbd"
                    width="800px"
                    height="450px"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </p>
        </section>
    </body>
</html>
