<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Info</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/MentalHealthCare/css/patientinfo.css" />
</head>
<body>
<?php include('docnav.php'); ?>

<table>
    <thead>
        <tr>
            <th>Patient Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Booking Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once('../DBconnect.php');

        // Write a query to select all appointments
        $sql = "SELECT * FROM appointments";
        $result = mysqli_query($conn, $sql);

        // Check if there are any appointments
        if (mysqli_num_rows($result) > 0) {
            // Loop through each row in the result set
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['appointment_date']; ?></td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="4">No appointments found</td>
            </tr>
            <?php
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </tbody>
</table>

</body>
</html>
