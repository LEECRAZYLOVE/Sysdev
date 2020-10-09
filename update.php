<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body>

<?php
//add appropriate fields

    require_once("config.php");
    $employee_id = $_REQUEST['employeeNumber'];
    $jobTitle_update = $_REQUEST['jobtitle'];
    $extension_update =  $_REQUEST['extension'];
    $email_update = $_REQUEST['email'];
    $officeCode_update = $_REQUEST['officecode'];
    $reportsTo_update = $_REQUEST['report'];

    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "UPDATE employees SET jobTitle = '$jobTitle_update' , extension = '$extension_update' , email = '$email_update' , officeCode = '$officeCode_update' , reportsTo = '$reportsTo_update'
            WHERE employeeNumber = $employee_id ";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    echo "<strong style = \"color: green; \" >The record was successfully updated! </strong>";    
?>

</body> 
</html>