<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('connection.php');


$lmail=$_POST['logemail'];
$lpwd=$_POST['logpass'];

 if($lmail=="admin" && $lpwd=="admin")
 {  
    $lmail = stripcslashes($lmail);  
    $lpwd = stripcslashes($lpwd);  
   
    $lmail = mysqli_real_escape_string($conn, $lmail);  
    $lpwd = mysqli_real_escape_string($conn, $lpwd);  

    $sql = "select * from admins where a_name = '$lmail' and a_pwd = '$lpwd'";  
    $res= mysqli_query($conn, $sql);  
    $row1 = mysqli_fetch_array($res, MYSQLI_ASSOC);  
    $count1 = mysqli_num_rows($res);  
      
    if($count1 == 0)
    { 
         echo "<h1><center> Wrong Credentials<center></h1>";  
       
    }  
    else{  
        $_SESSION['log']=true;
        $_SESSION['aname']=$row1['a_name'];
      
       /* header("url:../admin/admin.php");
        exit;*/
?>    <script>
    alert("ADMINISTRATOR LOGING IN..");
    window.top.location.replace('../admin/admin.php');</script>;
 <?php
 }
}
  else
  {  //to prevent from mysqli injection  
    $lmail = stripcslashes($lmail);  
    $lpwd = stripcslashes($lpwd);  
   
    $lmail = mysqli_real_escape_string($conn, $lmail);  
    $lpwd = mysqli_real_escape_string($conn, $lpwd); 
    $sql = "select * from users where u_email = '$lmail' and u_pwd = '$lpwd'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
 
       
        $uid=$_SESSION['uid']=$row['u_id'];
        $que="SELECT * FROM acc WHERE u_id=$uid;";
        $k=mysqli_query($conn,$que);
        $arr=mysqli_fetch_array($k,MYSQLI_ASSOC);
        $no=mysqli_num_rows($k);
        if($no==1)
        {   
          $_SESSION['app_status']=0;
            $_SESSION['accid']=$arr['acc_id'];
            $_SESSION['name']=$arr['fname'];
            
            ?>
         <script> 
        alert("Sign In Successful!\nRedirecting to Home"); 
        
        window.top.location.replace("../home.php");
        
        </script>
        <?php }
        else {
        
          unset($_SESSION['app_status']);
        
        ?>
        <script> 
        alert("Sign In Successful!"); 
        window.top.location.replace("../acc.php");
        </script>
 <?php }
            exit;
   }  
    else{  ?>
        <script language="javascript"> 
        alert("Invalid Username or Password");
        top.location.replace("../register.html"); 
        </script>
<?php   
    }     
}
?>
