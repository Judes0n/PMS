<?php
session_start();
// Include the database configuration file
include('connection.php');

    $uid=$_SESSION['uid'];
    $fname=$_POST['fname'];
    if(!isset($_POST['mid']))
    {
      $mid=$_SESSION['m_id'];
    }
    else
    {
    $mid=$_POST['mid'];
    }
    if($mid==2)
      {$mname="Deluxe";}
    elseif($mid==1)
      {$mname="Premium";}
    else
    {$mname="Basic";}
    $_SESSION['mname']=$mname;
    $_SESSION['mid']=$mid;
    if(!isset($_POST['age']))
    {$age=18;}
    else
    $age=$_POST['age'];
    $bday=$_POST['bday'];
    $relg=$_POST['relg'];
    $cnct=$_POST['cnct'];
    $educ=$_POST['educ'];
    $gender=$_POST['gender'];
    $addrs=$_POST['addrs'];
    $height=$_POST['height'];
    $inc=$_POST['income'];
    $weight=$_POST['weight'];
    $occup=$_POST['occup'];
    $insta=$_POST['insta'];
   // $name = $_POST["name"];
    $fileName = $_FILES["img"]["name"];
    $tmpName = $_FILES["img"]["tmp_name"];
    $folder="../uploads/";
    $check=mysqli_query($conn,"SELECT * FROM acc WHERE u_id ='$uid' ");
    if(!isset($_SESSION['app_status'])||($check==FALSE ))
    {
    if(move_uploaded_file($tmpName,$folder.$fileName))
    {
      $sql="INSERT INTO acc(u_id,mid,fname,age,bday,relg,cnct,addrss,gender,income,height,wight,educ,occup,img,insta,stats) VALUES('$uid','$mid','$fname','$age','$bday','$relg','$cnct','$addrs','$gender','$inc','$height','$weight','$educ','$occup','$fileName','$insta','0')";
      $res=mysqli_query($conn,$sql);
      if ($res == 1)
        {
          sleep(3);
           $_SESSION['app_status']=0;
           $sql2="SELECT acc_id FROM acc WHERE u_id=$uid;";
           $res=mysqli_query($conn,$sql2);
           $row1 = mysqli_fetch_array($res, MYSQLI_ASSOC);
           $_SESSION['accid']=$row1['acc_id'];
          ?>
          <script>
           alert("Application Submitted for Verification!");
          location.replace("../payment/payment.php");         
           </script>
          <?php
        } 
       else
         {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
   }
  else{
    ?>
    <script>alert("Application Submission Failed");
    location.replace('../reg/accreg.php');
  </script>
    
<?php
   }
  }
  elseif($_SESSION['app_status']==0)
  {
   
    $fileName = $_FILES['img']['name'];
    if($fileName!="") {
    move_uploaded_file($_FILES['img']['tmp_name'],'../uploads/'.$fileName);
                  }
   else {
    $que="SELECT acc_id,img FROM acc WHERE u_id=$uid;";
    $reslt=mysqli_query($conn,$que);
    $row2 = mysqli_fetch_array($reslt, MYSQLI_ASSOC);
    $fileName=$row2['img'];
    $_SESSION['accid']=$row2['acc_id'];

         }

    $sql="update acc set mid='$mid',fname='$fname',age='$age',bday='$bday',relg='$relg',cnct='$cnct',addrss='$addrs',gender='$gender',income='$inc',height='$height',wight='$weight',educ='$educ',occup='$occup',img='$fileName',insta='$insta',stats='0' where u_id='$uid'";
    $res=mysqli_query($conn,$sql);
    if ($res == 1)
     {
      sleep(3);
      $_SESSION['app_status']=0;
  ?>
      <script>
      alert("Application Submitted for Updation!");
      window.top.location.replace("../home.php");         
      </script>
    <?php
    } 
    else
     {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  

?>