<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS\Home.css">
  <title>Home</title>
  <meta charset="utf-8">       
</head>
<body>

<?php
  //Dispaying employees section
  // Accessing the database
  require_once("config.php");
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
         or die("ERROR: Database connection has failed");
  $query = "SELECT employeeNumber, lastName, firstName FROM employees"; //Sort out what you need to select
  $result = mysqli_query($conn, $query)
            or die("ERROR: Unable to retreive the employee data"); 
?>  

<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels">
      <li> <a class="active" href="Home.php">Home</a> </li>
      <li> <a href="CurrentTemp.php">Bookings</a> </li>
      <li style="float:center"> <img id="logo" src="icons/Logo.png" alt="On The Go logo" style="margin-left: 400px; width:140px; height:80px;"> </li>
       <li style="float:right"> <a href="UserProfile.html"> <img src="icons/User.png" alt="User Profile" style="width:40px; height:40px;"></a> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
<!--Start of Google map-->
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.3879834040304!2d26.519476914758638!3d-33.3086708976349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e645ddbaf10da2b%3A0xeb8f44929ac050e5!2sPick%20n%20Pay%20Family%20Grahamstown!5e0!3m2!1sen!2sza!4v1602178583458!5m2!1sen!2sza" 
    title="Google Map"  height="450" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<!--End of Google map-->

<!-- Start of buttons section -->
<ul class="buttons">
    <li> <button onclick="newSingleTrip()">Book Single Trip</button> </li> <!-- Add javascript code below -->
    <li> <button onclick="newTour()">Book Tour</button> </li> <!-- Add javascript code below -->
</ul>
<!-- End of buttons section -->

<!--Start of the booking history section-->
<aside>
    <ul class="aside_labels"> <!-- Have to add php to retrieve booking codes from the database-->
        <h3 style="color: lightgoldenrodyellow; border-bottom: 1px solid lightgoldenrodyellow; margin: 5px;">Booking History</h3>
        <li><a class="active" href="Temp.php">Booking: BD68493722</a></li> 
        <li>Booking: BD68493722</li> 
        <li>Booking: BD68493722</li>
        <li>Booking: BD68493722</li>
        <li>Booking: BD68493722</li>
    </ul>
</aside>
<!--End of booking history section-->

</main>
<!--Just a footer for profesionalism-->
<footer>
            <p>&copy; 2020 On-The-Go.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
                <a id="rdd" href="#">Trademark</a>
            </p>
            <p>
                <small>Last modified:
                    <time>3 October 2020</time>
                </small>
            </p>
        </footer>
</body>
</html>