<?php      
    $host = "sql105.epizy.com";  
    $user = "epiz_32318770";  
    $password = 'JZfDsDVXIeHwbb';  
    $db_name = "epiz_32318770_PMS";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  