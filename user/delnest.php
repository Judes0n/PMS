<?php
include("../php/connection.php");
$acc=$_GET['acc'];
$acc2=$_GET['acc2'];
$query="DELETE FROM sel_profiles WHERE acc_id1=$acc and acc_id2=$acc2;";
$result=mysqli_query($conn,$query);
if($result)
{?>
<script>
alert("Response Deleted!");
top.location.replace("nest.php");
</script> 
<?php 
}
else {
?>
<script>
alert("Response Deletion Failed!");
</script>
<?php
}
?>