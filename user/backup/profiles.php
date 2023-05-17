<?php
session_start();
require('../php/extract.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>PROFILES | PMS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/88b3830aff.js" crossorigin="anonymous"></script>
        <style>
        #cards
            {
            float:left; 
            width: 18rem;
            height: 40rem; 
            margin-left: 3rem;
            margin-top:2rem;
            background: linear-gradient(240deg,white,grey,silver);
             }
        #cards:hover
            {
            float:left; 
            width: 18rem;
            height: 40rem; 
            margin-left: 3rem;
            margin-top:2rem;
            background:linear-gradient( 95.2deg, rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );
            }
        </style>
    </head>
    <body>
<?php
if(is_array($fetchData))
foreach($fetchData as $data)  
{
   $accid=$data['acc_id'];
   $fname=$data['fname'];
   $age=$data['age'];
   $relg=$data['relg'];
   $cnct=$data['cnct'];
   $img=$data['img'];
   $uid=$data['u_id'];
   
   //$lim=($data['mid']==0? 10:($data['mid']==1? 20:($data['mid']==2? 100:0)));
 
    
    if(($data['stats']==1) && ($data['u_id']!=$_SESSION['uid']))
    {
?>                  
                    <div class="card shadow" id="cards">
                        <br>
                        <center>
                            <br>
                        <img src='../uploads/<?php echo $img; ?>' alt='' class='card-img-top' style='height:300px;width:225px; border: 1px solid; border-radius:5px;'>
                            <div class="card-body" style="float:left; width:100%;">
                                <h4 class="card-title">&nbsp;<?php echo $fname; ?></h4>
                                <p class="card-text" >Age:&nbsp;&nbsp;<?php echo $age; ?></p>
                                <p class="card-text">Gender:&nbsp;&nbsp;<?php if($data['gender']=='Male'){?><i class="fa-solid fa-mars"></i> <?php }elseif($data['gender']=='Female') {?><i class="fa-solid fa-venus"></i><?php }else {?><i class="fa-solid fa-neuter"></i><?php } ?></p>
                                <p class="card-text">Religion:&nbsp;&nbsp;<?php echo $relg; ?><br><br>
                                <a href='../user/redirect.php?acc_id="<?php echo $accid; ?>"&&u_id="<?php echo $uid;?>"' class="btn btn-primary">View Details</a></p>
                                
                            </div>
                            </center>
                        </div>
                    </div>
                    
          
        <?php
 }}
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>