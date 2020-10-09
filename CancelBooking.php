<?php
require_once("secure.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="surfing.ico">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8f7b167549.js" crossorigin="anonymous"></script>
    <title>Sipho's Surf Shop</title>
</head>

<body>
    <main>
        <header id="mainTitle">Sipho's Surf Shop
            <div id="admin"><a href="admin.html" style="color: white;"><i class="fas fa-user-cog"></i></a></div>
        </header>
        <div id="banner"><img src="images/banner.jpg" alt="Sipho's Surf Shops" /></div>
        <nav>
            <ul>
                <li>
                    <a href="add.php">Add</a>
                </li>
                <li>
                    <a href="manage.php" class="active">Manage</a>
                </li>
                <li>
                    <a href="schedule.php">Schedule</a>
                </li>
                <li>
                    <a href="reports.php">Reports</a>
                </li>

                <li>
                    <a href="index.html">Exit</a>
                </li>
            </ul>
        </nav>
        <section id="rental">
            <?php
            // import database credentials
            require_once("config.php");
            // store the id from the previous page
            $booking_ID = $_REQUEST['id'];
            // make connection to database
            $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("ERROR: unable to connect to database!");
            // issue query instructions
            $query = "DELETE FROM bookings WHERE booking_id = $booking_ID";
            $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
            // close the connection to database
            mysqli_close($conn);
            //redirecting to the manage page
            header("Location:ActiveBooking.php");
            ?>
        </section>

    </main>
</body>

</html>