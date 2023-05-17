<?php     
ini_set('display_errors', 1);
error_reporting(E_ALL); 
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "pms";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 