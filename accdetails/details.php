<?php 
session_start();
include('../php/connection.php');
$accid=$_SESSION['saccid'];
$sql="SELECT * FROM acc WHERE acc_id=$accid;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
$uid=$row['u_id'];

$accid2=$_SESSION['acc_id'];
$sql5="SELECT * FROM acc WHERE acc_id=$accid2;";
$res2=mysqli_query($conn,$sql5);
$row4=mysqli_fetch_array($res2, MYSQLI_ASSOC);
$lim=$row4['lim'];
$lim=$lim+1;
$sql4="UPDATE acc SET lim=$lim WHERE acc_id=$accid2;";
$rslt=mysqli_query($conn,$sql4);

$sql2="SELECT * FROM users WHERE u_id=$uid;";
$reslt=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($reslt, MYSQLI_ASSOC);

$sql3="SELECT * FROM img_tbl WHERE acc_id=$accid;";
$result=mysqli_query($conn,$sql3);
$nos=mysqli_num_rows($result);
if($nos==1)
{
$row3=mysqli_fetch_array($result, MYSQLI_ASSOC);
}
$email=$row2['u_email'];
$strArray = explode(' ',$row['fname']);
if(is_array($strArray))
{
$firName = $strArray[0];
if(!isset($strArray[1]))
$strArray[1]='';
$secName = $strArray[1];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DETAILS | PMS | PROFILE | <?php echo $row['fname']; ?></title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://kit.fontawesome.com/88b3830aff.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?php echo $row['fname']; ?></span>
                <span class="d-block d-lg"> <img class="img-fluid img-profile" src="../uploads/<?php echo $row['img']; ?>"   /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../home.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#details">Details</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#phy">Physique</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#images">Images</a></li>
                    <br><br>
                    <?php if($row['stats']==1){?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" title="Respond" href="../user/respond.php?accid1=<?php echo $row['acc_id'];?>&&accid2=<?php echo $_SESSION['acc_id'];?>&&name=<?php echo $row['fname']; ?>"><i class="fa-solid fa-bell fa-2x"></i></a></li>
                        <?php }?>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                       <?php if(is_array($strArray)){ echo $firName;} else echo $row['fname']; ?>
                        <span class="text-primary"><?php if(is_array($strArray)){ echo $secName; }?></span>
                    </h1>
                    <br> <br> <br>
                    <div class="subheading mb-5">
                    Address&nbsp;&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;:&nbsp;&nbsp; <?php echo $row['addrss']; ?><br><br>
                    Email&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-envelope"></i> &nbsp;:&nbsp;&nbsp;<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br><br>
                    Age &nbsp;&nbsp;<i class="fa-solid fa-arrow-down-1-9"></i></i>&nbsp;:&nbsp;<?php echo $row['age'];?><br><br>
                    Gender &nbsp;&nbsp;<i class="fa-solid fa-person-half-dress"></i>&nbsp;:&nbsp;<?php echo $row['gender'];?><br><br>
                    Relegion&nbsp;&nbsp; <i class="fa-solid fa-hands-praying"></i>&nbsp;:&nbsp;<?php echo $row['relg'];?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="details">
                <div class="resume-section-content">
                    <h2 class="mb-5">DETAILS</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="subheading mb-5">
                                 
                          Annual Income &nbsp;&nbsp;<i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;:&nbsp;<?php echo $row['income']; ?><br><br>
                          Education &nbsp;&nbsp;<i class="fa-solid fa-building-columns"></i>&nbsp;:&nbsp;<?php echo $row['educ']; ?><br><br>
                          Occupation &nbsp;&nbsp;<i class="fa-solid fa-briefcase"></i>&nbsp;:&nbsp;<?php echo $row['occup']; ?><br>
                        </div>
                       
            </section>
            <hr class="m-0" />
    

            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="phy">
                <div class="subheading mb-5">
                    <h2 class="mb-5">Physique</h2>
                    Height &nbsp;&nbsp;<i class="fa-solid fa-person"></i>&nbsp; : &nbsp; <?php echo $row['height']; ?>cm<br><br>
                    Weight  &nbsp; &nbsp;<i class="fa-solid fa-weight-scale"></i> &nbsp;: &nbsp; <?php echo $row['wight']; ?>Kg
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="images">
                <div class="subheading mb-5">
                    <h2 class="mb-5">Images</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <img src="../uploads/user/<?php if($nos==1) {echo $row3['img1'];} else {echo "default_img.png";} ?>" height="600px" width="auto" >
                        </li>
                        <hr>
                        <li>
                            <img src="../uploads/user/<?php if($nos==1) {echo $row3['img2'];} else {echo "default_img.png";} ?>" height="600px" width="auto">
                        </li>
                        <hr>
                        <li>
                            <img src="../uploads/user/<?php if($nos==1) {echo $row3['img3'];} else {echo "default_img.png";} ?>" height="600px" width="auto">
                        </li>
                    </ul>
                    
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
