<?php
session_start();
include('../php/connection.php');
$accid=$_SESSION['saccid']=$_GET['acc_id'];
$_SESSION['suid']=$_GET['u_id'];
$query="SELECT lim,mid FROM acc WHERE acc_id=$accid";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row['mid']==2)
$lim=50;
elseif($row['mid']==1)
$lim=20;
else
$lim=10;


if($row['lim']<$lim)
{
?>
<script>top.location.replace("../accdetails/details.php");</script>
<?php
}
else{
    ?>
 <script>
 alert('Profile Visit Limit Reached!! Kindly Wait 24hrs For Reset ');
 top.location.replace("../home.php");
 </script>   
<?php
}
?>
