<?php
session_start();
require('../php/extract.php');
$colors=array("0"=>"Brown","1"=>"Red","2"=>"Pink","3"=>"Purple","4"=>"Indigo","5"=>"Blue","6"=>"Light-Blue","7"=>"Cyan","8"=>"Deep-Purple","9"=>"Teal","10"=>"Green","11"=>"Light-Green","12"=>"Amber","13"=>"Orange","14"=>"Deep-Orange","15"=>"Blue-Grey","16"=>"Grey");
$accid=$_SESSION['acc_id'];
$sql="SELECT mid,lim,stats FROM acc WHERE acc_id=$accid;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
if($row['mid']==2)
$lim=50;
elseif($row['mid']==1)
$lim=20;
else
$lim=10;

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PMS | Profiles</title>
  <script src="https://kit.fontawesome.com/88b3830aff.js" crossorigin="anonymous"></script>
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<section class="container">
    <div class="page-header">
        <center><h1><span>P</span><span>R</span><span>O</span><span>F</span><span>I</span><span>L</span><span>E</span><span>S</span></h1></center>
    </div>
    
    <div class="row active-with-click">
<?php
if(is_array($fetchData))
foreach($fetchData as $data)  
{
   $accid=$data['acc_id'];
   $fname=$data['fname'];
   $occup=$data['occup'];
   $age=$data['age'];
   $relg=$data['relg'];
   $cnct=$data['cnct'];
   $img=$data['img'];
   $uid=$data['u_id'];
   $insta=$data['insta'];
   shuffle($colors);
   $random=array_rand($colors);
   shuffle($colors);
   //$lim=($data['mid']==0? 10:($data['mid']==1? 20:($data['mid']==2? 100:0)));
 
    
    if(($data['stats']==1) && ($data['u_id']!=$_SESSION['uid']))
    {
?>                 
<!-- partial:index.partial.html -->

        <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 2rem;  float:left; ">
            <article class="material-card <?php echo $colors[$random];?>">
                <h2>
                    <span><?php echo $fname; ?></span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        <?php echo $occup; ?>
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="../uploads/<?php echo $img; ?>">
                    </div>
                    <div class="mc-description">
                    <h4>
                    <p>Age:&nbsp;&nbsp;<?php echo $age; ?></p>
                    <p>Gender:&nbsp;&nbsp;<?php if($data['gender']=='Male'){?><i class="fa-solid fa-mars"></i> <?php }elseif($data['gender']=='Female') {?><i class="fa-solid fa-venus"></i><?php }else {?><i class="fa-solid fa-neuter"></i><?php } ?></p>
                    <p>Religion:&nbsp;&nbsp;<?php echo $relg; ?></p>
                    <p>Marital Status:&nbsp;&nbsp;Unmarried</p>
                    </h4>
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                      Learn More
                    </h4>
                    <?php if($row['stats']==1&&$row['lim']<=$lim){ ?><a href="<?php echo $insta;?>" target="_blank" style="border-radius:8px;"><center><i class="fa-brands fa-instagram"></i></center></a>
                    <a style="border-radius:8px;" href='../user/redirect.php?acc_id="<?php echo $accid; ?>"&&u_id="<?php echo $uid;?>"'><center><i class="fa fa-arrow-right"></i></center></a><?php }?>
                    
                </div>
            </article>
        </div>
 

<?php
 }}
        ?>
           </div>
</section>

<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
