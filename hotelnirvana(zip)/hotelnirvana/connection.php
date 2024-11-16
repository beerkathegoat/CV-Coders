<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hotelnirvana";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); //makes a new sql query 
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  //error message if failed to connect database
    }  
?>  