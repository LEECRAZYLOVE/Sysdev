<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"> 
  </head> 
  <body>

  <?php
    //$clientId = $_REQUEST['id'];
    require_once("config.php");
    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "SELECT  firstName, lastName, email, password, contactNumber FROM client WHERE clientId = \"FB2020\"";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    while($row = mysqli_fetch_array($result)){
      $firstname = $row['firstName'];
      $lastname =  $row['lastName'];
      $email = $row['email'];
      $password = $row['password'];
      $number = $row['contactNumber'];
      
      echo "<h3>" ."Welcome ". $row['firstName'] . " " . $row['lastName'] ."!". "</h3>". "<br>";
    } 
    
    //close connection to the database
    mysqli_close($connect);
  ?>

    <form action ="update.php" method = "POST">
      <label>First Name: </label><br>
      <input type = "text" id= "firstname" name = "firstname" required placeholder = "Ncebakazi" value = "<?php echo $firstname ; ?> " ><br>
      <label>Last Name: </label><br>
      <input type = "text" id = "lastname" name = "lastname" required placeholder = "Gxako" value = "<?php echo $lastname ; ?> "><br>
      <label>Email Address: </label><br>
      <input type = "email" id= "email" name = "email" required  placeholder = "ngxako@gmail.com" value = "<?php echo $email ; ?> " ><br>
      <label>Password: </label><br>
      <input type = "password" id = "password" name = "password"  required placeholder = "password" 
            pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
            value = "<?php echo $password ; ?> " ><br>
      <label>Contact Number: </label><br>
      <input type = "text" id = "number" name = "number" maxlength = "10" placeholder = "0789334567" pattern = "[0-9]{10}" required value = "<?php echo $number ; ?> " ><br>

      <!-- <input type ="hidden" name ="clientId" id = "clientId" value = "<?php echo $clientId ; ?> "><br><br> -->
      
      <input type ="submit" name = "submit" id = "submit" value = "Update"><br>
    </form>
</body> 
</html>