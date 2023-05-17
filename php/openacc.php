<?php
session_start();
include ('../php/connection.php');
$acc=$_GET['acc_id'];
$query="update acc set stats='1' where acc_id='$acc'";
$res=mysqli_query($conn,$query);
if($res)
{
?>

<script language="javascript">alert('Application Opened Successfully');
window.top.location.replace('../admin/admin.php');</script>
<?php
 
}
else
{
    echo "Application Opening Failed";
}



?>