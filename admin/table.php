<?php
session_start();
if(!isset($_SESSION['log']))
{
  if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
		header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
		die ("<center><h1>ACCESS DENIED!</h1><hr><br><br><b>This Page is Protected,<br><a href='../register.html'>Login</a> to Access.<b><center>");
		}
}
if($_SESSION['srch']==1)
{ 
  include("admin.php");
 
  $result = $db->query($query);
  if($result== true){ 
    if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $msg= $row;
   } else {
      $msg= "No Record Found"; 
   }
  }
}
else{
  include("extract.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
  
</head>
<body>
<div class="container-fluid">
 <div class="row">
   <div class="col-xl-12">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-dark table-striped table-bordered table-hover">
       <thead><tr><th>Sl.No</th>
         <th>Acc ID</th>
         <th>Image</th>
         <th>User ID</th>
         <th>Full Name</th>
         <th>Age</th>
         <th>DOB</th>
         <th>Relegion</th>
         <th>Contact</th>
         <th>Address</th>
         <th>Gender</th>
         <th>Income</th>
         <th>Height</th>
         <th>Weight</th>
         <th>Education</th>
         <th>Occupation</th>
         <th>Membership</th>
         <th>Profile Visits</th>
         <th>Actions</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><br><?php echo $sn; ?></td>
      <td><br><?php echo $data['acc_id']??''; ?></td>
      <td><img src="../uploads/<?php echo $data["img"]; ?>" width = "75px" height="100px" ></td>
      <td><br><?php echo $data['u_id']??''; ?></td>
      <td><br><?php echo $data['fname']??''; ?></td>
      <td><br><?php echo $data['age']??''; ?></td>
      <td><br><?php echo $data['bday']??''; ?></td>
      <td><br><?php echo $data['relg']??''; ?></td>
      <td><br><?php echo $data['cnct']??''; ?></td>
      <td><br><?php echo $data['addrss']??''; ?></td>
      <td><br><?php echo $data['gender']??''; ?></td>
      <td><br><?php echo $data['income']??''; ?></td>
      <td><br><?php echo $data['height']??''; ?></td>
      <td><br><?php echo $data['wight']??''; ?></td>
      <td><br><?php echo $data['educ']??''; ?></td>
      <td><br><?php echo $data['occup']??''; ?></td>
      <td><br><?php if($data['mid']==0){echo "Basic";} elseif($data['mid']==1){echo "Premium";}elseif($data['mid']==2){echo "Deluxe";} ?></td>  
      <td><br><?php if($data['stats']!=2){ echo $data['lim']??''; ?>/<?php if($data['mid']==0){echo "10";} elseif($data['mid']==1){echo "20";}elseif($data['mid']==2){echo "50";}} else {echo "Account Closed";} ?></td>
      <td>      <?php if($data['stats']==0)
            { ?>
      &nbsp;&nbsp;&nbsp;&nbsp;<a title="Approve Application" href="../php/apprvproc.php?acc_id=<?php echo $data['acc_id'];?>"><i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i></a>
      <?php }
      elseif($data['stats']==1)
        {
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;<a title="Reject Application" href="../php/rejectproc.php?acc_id=<?php echo $data['acc_id'];?>"><i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i></a>
          <br> <br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a title="Delete Application" href="../php/delproc.php?acc_id=<?php echo $data['acc_id'];?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
  <?php } else { ?>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a title="Closed Account" href="../php/openacc.php?acc_id=<?php echo $data['acc_id'];?>"><i class="fa fa-unlock fa-2x" aria-hidden="true"></i></a>
  <br><br><?php } ?>
</tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="14">
    <?php echo $msg; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>