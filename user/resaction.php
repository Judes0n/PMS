<?php
session_start();
include('../php/connection.php');
$sid=$_GET['sid'];
if($_GET['status']==0)
{
$sql="UPDATE sel_profiles SET stat=1 WHERE s_id=$sid;";
if(mysqli_query($conn,$sql))
{ $_SESSION['app_status']=0;
?>
<script>alert('Response Accepted');
top.location.replace('../home.php');
</script>
<?php
}
else
{ $_SESSION['app_status']=0;
    ?>
    <script>alert('Response Accepting Failed');
   
    top.location.replace('../home.php');
    </script>
    <?php
}
}
else
{
    $sql="UPDATE sel_profiles SET stat=0 WHERE s_id=$sid;";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['app_status']=0;
    ?>
    <script>alert('Response Rejected');
   
    top.location.replace('../home.php');
    </script>
    <?php
    }
    else
    {$_SESSION['app_status']=0;
        ?>
        <script>alert('Response Rejection Failed');
        
        top.location.replace('../home.php');
        </script>
        <?php
    }    

}
?>