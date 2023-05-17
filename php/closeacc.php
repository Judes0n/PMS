<?php
session_start();
include('connection.php');
$acc_id=$_GET['acc_id'];

$query="UPDATE acc SET stats=2 WHERE acc_id=$acc_id";
?>
<?php
$res=mysqli_query($conn,$query);
if($res)
{   ?>
<script>
alert('You Closed Your Account !!!');
top.location.replace('../index.html');
</script>
<?php 
session_destroy();
}
else
{ $_SESSION['app_status']=0;
?>
<script>
alert('Closing Account Failed !');
top.location.replace('../home.php');
</script>
<?php 
}
?>