<?php
session_start();
include ('../php/connection.php');
$acc=$_GET['acc_id'];
$query3="delete from img_tbl where acc_id='$acc'";
$result2=mysqli_query($conn,$query3);
$query2="delete from membership where acc_id='$acc'";
$result=mysqli_query($conn,$query2);
$query="delete from acc where acc_id='$acc'";
$res=mysqli_query($conn,$query);


if($res||$result||$result2)
{
?>

<script language="javascript">alert('Application Deleted Successfully');
window.top.location.replace('../admin/admin.php');</script>
<?php
 
}
else
{
    echo "Application Deletion Failed";
}



?>