<?php
session_start();
include("../php/connection.php");

$accid1=$_GET['accid1'];
$accid2=$_GET['accid2'];
$que="SELECT * FROM acc WHERE acc_id='$accid2';";
$res=mysqli_query($conn,$que);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$rname=$_GET['name'];
$sname=$row['fname'];
$scnct=$row['cnct'];
$simg=$row['img'];


$q="SELECT * FROM sel_profiles WHERE acc_id1=$accid1 AND  acc_id2=$accid2";
$res=mysqli_query($conn,$q);
$c=mysqli_fetch_array($res,MYSQLI_ASSOC);

if(is_array($c)) 
{$k=0;}
else 
{$k=1;}


if($k==0)
    {

    ?>
    <script> 
    alert("Responded Already");
    top.location.replace("../accdetails/details.php");
     </script>
    <?php

    }
else
    {
   
    $query="INSERT INTO sel_profiles(acc_id1,acc_id2,r_name,s_name,s_cnct,s_img,stat) VALUES('$accid1','$accid2','$rname','$sname','$scnct','$simg','0'); ";
    if(mysqli_query($conn,$query))
    {?>
    <script> 
    
    alert("Response Successful");
    top.location.replace("../accdetails/details.php");
     </script>
    <?php
    }
    else
    echo "<script>alert('Failed')</script>";
    }

?>
