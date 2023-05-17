<?php
session_start();
include('connection.php');
$cost=$_POST['cost'];
$cnum=$_POST['cnum'];
$cexp=$_POST['cexp'];
$cvv=$_POST['cvv'];
$cname=$_POST['cname'];
$accid=$_SESSION['accid'];
$mname=$_SESSION['mname'];
$val=date('y/m/d',strtotime("+6months"));
$check=mysqli_query($conn,"select * from membership where acc_id='$accid'");
$count=mysqli_num_rows($check);
if($count==0)
{
$sql="INSERT INTO membership(acc_id,mname,cnum,cname,cvv,cexp,cost,valdity) VALUES('$accid','$mname','$cnum','$cname','$cvv','$cexp','$cost','$val')";
if(mysqli_query($conn,$sql))
{   
    echo '<script type="text/javascript">alert("Payment Sucessfull,Membership Expires on '.$val.'");</script>';
    ?>
<script>
alert("Redirecting to HOME Page,\nCurrently You are a Visitor\n Wait For Approval From Admininstrator For Using the Website!..");
window.top.location.replace("../home.php");
</script>
<?php
}
else{
    ?><script>alert("Payment Error!!!")</script>
    <?php
}

}
else
{
    echo '<script type="text/javascript">alert("Membership Active, Expires on '.$val.'");</script>';
    sleep(5);
    ?>
    <script>
    window.top.location.replace("../home.php");
    </script>
    <?php
}

?>