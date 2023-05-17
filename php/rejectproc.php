<?php
session_start();
include ('../php/connection.php');
$acc=$_GET['acc_id'];
$query="update acc set stats='0' where acc_id='$acc'";
$res=mysqli_query($conn,$query);
if($res)
{
?>

<script language="javascript">alert('Application Rejected Successfully');
window.top.location.replace('../admin/admin.php');</script>
<?php
 
}
else
{
    echo "Application Reject Failed";
}



?>