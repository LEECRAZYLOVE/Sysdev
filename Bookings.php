<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS\Temp.css">
  <title>Temp</title>
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
      <li> <a href="Home.php">Home</a> </li>
      <li> <a class="active" href="CurrentTemp.php">Bookings</a> </li>
      <li style="float:center"> <img id="logo" src="icons/Logo.png" alt="On The Go logo" style="margin-left: 400px; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="UserProfile.html"> <img src="icons/User.png" alt="User Profile" style="width:40px; height:40px;"></a> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
<!--Start of the local navigation section-->
<aside>
  <nav>
    <ul class="local_nav">
    <li>
       <ul class="aside_labels">
          <li style="border-bottom: 1px solid lightgoldenrodyellow;"><h3> <a href="AllBookings.php">Booking: BD68493722</a> </h3></li> <!--Might have to make these php-->
          <li><a href="CustomizeTrip.html">Customize Trip</a></li> 
          <!-- <li><a href="MessageDriver.html" onclick="SendMessage()">Message Driver </a></li> 
          <a href="BuddyWatch.php">Activate BuddyWatch</a></li> -->
          <li><a href="CancelBooking.html">Cancel Booking</a></li>
       </ul>
    </li>
    <li>
      <ul class="lower_section">
        <li> <h3>Driver Details:</h3><img src="icons/User.png" alt="User Profile" style="width:40px; height:40px; margin-bottom: 10px;"><!-- Enter php code to retrieve booking code --></li>
        <li> 
          <form action="/action_page.php"> <!-- Create php from the driver section -->
            <label for="driver_name">Name:</label><br>
            <input type="text" id="driver_name" name="driver_name" value="John"><br><br>
            <label for="driver_car">Car:</label><br>
            <input type="text" id="driver_car" name="driver_car" value="White Toyota Yaris"><br><br>
            <label for="driver_license">License Plate:</label><br>
            <input type="text" id="driver_license" name="driver_license" value="KYT 161 EC"><br><br> 
          </form> 
        </li>
      </ul>
     </li>
    </ul>
  </nav>
</aside>
<!--End of the local navigation section-->

  <!--Start of Google map-->
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.3879834040304!2d26.519476914758638!3d-33.3086708976349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e645ddbaf10da2b%3A0xeb8f44929ac050e5!2sPick%20n%20Pay%20Family%20Grahamstown!5e0!3m2!1sen!2sza!4v1602178583458!5m2!1sen!2sza" 
    title="Google Map"  height="535" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<!--End of Google map-->
  </main>

<!--Message Driver feature-->
<script>
  function SendMessage() { //Gonna get the driver details from the database and send the message  
    var person = prompt("Please enter your message:"); 
    }
  </script>
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