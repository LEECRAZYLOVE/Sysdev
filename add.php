<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"> 
  </head> 
  <body>

  <?php

    //this page will be used to add client information when they sign up to the dabatase
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['number'];
    $password = $_REQUEST['password'];
    $clientId = substr($firstname,0,1) . substr($lastname,0,1). "2020";

    require_once("config.php");
    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "INSERT INTO client (clientId, firstName, lastName, email, password, contactNumber) VALUE ('$clientId','$firstname','$lastname','$email', '$password', '$phone');";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    ?>

</body> 
</html>