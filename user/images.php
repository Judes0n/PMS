<?php
session_start();
$acc_id=$_SESSION['accid'];
include('../php/connection.php');
if(isset($_POST['Submit']))
{  
    $folder="../uploads/user/";
    $fileName1 = $_FILES["img1"]["name"];
    $tmpName1 = $_FILES["img1"]["tmp_name"];
    $c1=move_uploaded_file($tmpName1,$folder.$fileName1);
    $fileName2 = $_FILES["img2"]["name"];
    $tmpName2 = $_FILES["img2"]["tmp_name"];
    $c2=move_uploaded_file($tmpName2,$folder.$fileName2);
    $fileName3 = $_FILES["img3"]["name"];
    $tmpName3 = $_FILES["img3"]["tmp_name"];
    $c3=move_uploaded_file($tmpName3,$folder.$fileName3);
    $sql="SELECT * FROM img_tbl WHERE acc_id=$acc_id;";
    $res=mysqli_query($conn,$sql);
    $c4=mysqli_num_rows($res);
    if($c1==TRUE && $c2==TRUE && $c3==TRUE && $c4==0)
    {
        $query="INSERT INTO img_tbl(acc_id,img1,img2,img3) VALUES ('$acc_id','$fileName1','$fileName2','$fileName3');";
        if(mysqli_query($conn,$query))
        {
            ?>
            <script>
                alert("Images Uploaded Successfully!\nPlease Click Ok to Return to Home.");
                $_SESSION['app_status']=0;
                top.location.replace("../home.php");
            </script>
            
            <?php
        }
        else
        {
        ?>
            <script>
            alert("Images Upload Failed \nPlease Click Ok to Retry ");
           top.location.replace("imageupld.php");
        </script>  
        <?php 
        }
    }
    elseif($c4!=0)
    {
        $query="UPDATE img_tbl SET img1='$fileName1',img2='$fileName2',img3='$fileName3' WHERE acc_id=$acc_id;";
        if(mysqli_query($conn,$query))
        {
            ?>
            <script>
                alert("Images Updated Successfully!\nPlease Click Ok to Return to Home.");
                $_SESSION['app_status']=0;
                top.location.replace("../home.php");
            </script>
            
            <?php
        }
        else
        {
        ?>
            <script>
            alert("Images Updation Failed \nPlease Click Ok to Retry ");
           top.location.replace("imageupld.php");
        </script>  
        <?php 
        }
    }
    else
    {
        echo "<script>alert('Image Upload Failed!!!');</script>";
    }
}
?>
<html>
<head>
<title>IMAGES | PMS</title>   
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>   
<body>
<div class="container">
    <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="Img1" class="form-label">Image 1:</label>
            <input type="file" accept="image/*" class="form-control" name="img1" id="Img1">
            </div>
            <div class="mb-3">
            <label for="Img2"  class="form-label">Image 2:</label>
            <input type="file" accept="image/*" class="form-control" name="img2" id="Img2">
            </div>
            <div class="mb-3">
            <label for="Img3" class="form-label">Image 3:</label>
            <input type="file" accept="image/*" class="form-control" name="img3" id="Img3">
            </div>            
        <center><button type="submit" name="Submit" id="Submit" class="btn btn-primary">Submit</button></center>
    </form>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body> 
</html>
<?php
?>