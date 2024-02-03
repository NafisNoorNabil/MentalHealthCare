

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8" />
        <title>Info</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="css/table.css" />
    </head>
    <body>
        <header>
            <div class="wrapper">

                <ul class="nav-area">
                    <li><a href="Doctorhome.php">Home</a></li>
                    <li><a href="docforum.php">Discuss Forum</a></li>
                    <li><a href="patientinfo.php">Patient information</a></li>
                    <li><a href="User and medical.php">Logout</a></li>
                    <div class="container">
                </ul>
                <table class="table table-border">

                    <thead>
                        <tr>

                            <th>Patient Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $c=1;
                        $con = mysqli_connect("localhost","root","","mental health care");
                        $sel="Select *FROM patient";
                        $query=$con->query($sel);
                        while ($row=$query->fetch_assoc())
                        {
                    ?>
                    <tr>

                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                    </tr>
                    <?php
                    }

                    ?>


                    </table>
                    </div>
            </div>
        </header>
    </body>
</html>