<?php
session_start();
include('../php/connection.php');
$id=$_SESSION['acc_id'];
$query = "SELECT * FROM sel_profiles WHERE acc_id2='$id'";
$que="SELECT fname FROM acc WHERE acc_id='$id';";
$res=mysqli_query($conn,$query);
$arr=mysqli_fetch_array(mysqli_query($conn,$que),MYSQLI_ASSOC);
$fname=$arr['fname'];
$sn=1;
?>
<!DOCTYPE html>
<head>
<title>PMS | CHOICES | <?php echo $fname; ?></title> 
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<div class="topnav">
  <a class="" onclick="<?php $_SESSION['app_status']=0; ?>" href="../home.php">HOME</a>&nbsp;
  <a style="visibility: hidden"></a>&nbsp;
  <a style="visibility: hidden" href="#"></a>&nbsp;

  <a href="../acc.php" onclick="<?php $_SESSION['app_status']=0; ?>" class="">MY ACCOUNT</a>
</div>

<section class="vh-100" style=" background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col col-lg-9 ">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">CHOICES</h4>

            <table class="table table-hover mb-4">
              <thead>
                <tr>
                  <th scope="col">Sl.No</th>
                  <th scope="col">Account ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th>Contact</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php


                while($data=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                  $id2=$data['acc_id1'];
                  $q="SELECT img FROM acc WHERE acc_id=$id2";
                  $rslt=mysqli_query($conn,$q);
                  $ar=mysqli_fetch_array($rslt,MYSQLI_ASSOC);
                  $img=$ar['img'];
                  ?>
                <tr>
                  
                  <th scope="row"><br><br><br><?php echo $sn; ?></th>
                  <td><br><br><br><?php echo $data['acc_id1']; ?></td>
                  <td><br><br><br><?php echo $data['r_name']; ?></td>
                  <td><img src="../uploads/<?php echo $img;?>" height="200px" width="auto"></td>
                  <td><br><br><br><?php if($data['stat']==1){ echo $data['s_cnct']; } else { echo 'Wait for Response!<br>Once Accepted Contact Number Will Be Presented'; }?> </td>
                  <td><br><br><br><a class="btn btn-danger" href='delnest.php?acc=<?php echo $data['acc_id1']; ?>&&acc2=<?php echo $data['acc_id2']; ?>'>Delete</a></td>
                </tr>
                <?php
               $sn++; }
                ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>