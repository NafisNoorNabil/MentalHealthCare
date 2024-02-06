

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Info</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="/MentalHealthCare/css/table.css" />
    </head>
    <body>
    <?php include('docnav.php'); ?>
    <table>
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
            </tr>
    </table>

    </body>
</html>