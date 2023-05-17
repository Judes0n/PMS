<?php
include("../php/connection.php");
$accid=$_GET['acc_id2'];
$query="DELETE FROM sel_profiles WHERE acc_id2=$accid";
$result=mysqli_query($conn,$query);
if($result)
{?>
<script>
alert("Response Deleted!");
</script> 
<?php 
}
else {
?>
<script>
alert("Response Deletion!");
</script>
<?php
}
?>