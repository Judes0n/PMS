<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('connection.php');

$rname=$_POST['regname'];
$rmail=$_POST['regemail'];
$rpwd=$_POST['regpass'];  


$sql1 = "select * from users where u_email='$rmail'";
$res=mysqli_query($conn, $sql1);
$count= mysqli_num_rows($res);
if(($rmail=='admin')||($rmail=='ADMIN')||($count!=0))
{
  ?>
  <script>alert("Choose Another Username or Email");window.top.location.replace("../register.html");</script></script>
  <?php
}
else
{
$sql = "INSERT INTO users(u_name,u_email,u_pwd) VALUES('$rname','$rmail','$rpwd')";
$result=mysqli_query($conn,$sql);
if ($result == TRUE)
 {
 
  
?>
  <script>alert("REGISTERATION SUCESSFULL");
  window.top.location.replace("../register.html");</script>
<?php
} 
else
 {
  ?><script>alert("Registeration Failed");</script><?php
}
}
$conn->close();

?>