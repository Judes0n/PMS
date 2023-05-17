<?php
session_start();
include('../php/connection.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
$acc=$_GET['accid'];
$sql="SELECT * FROM sel_profiles WHERE acc_id1=$acc;";
$res=mysqli_query($conn,$sql);

$count=mysqli_num_rows($res);
?>
<html> 
<head>
<title>RESPONSES | PMS</title>
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
       <thead><tr>
         <th>Sl.No</th>
         <th>Account ID</th>
         <th>Name</th>
         <th>Contact</th>
         <th>Actions</th>
    </thead>
    <tbody>
  <?php
          
      $sn=1;
      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
      {
    ?>
      <tr>
      <td><br><?php echo $sn; ?><br></td>
      <td><br><?php echo $row['acc_id2'] ?><br></td>
      <td><br><?php echo $row['s_name'] ?><br></td>
      <td><br><?php echo $row['s_cnct'] ?><br></td>
      <td><br><?php if($row['stat']==0) {?><a href="resaction.php?sid=<?php echo $row['s_id']; ?>&&status=<?php echo $row['stat']; ?>">Accept</a><?php } else {?><a href="resaction.php?sid=<?php echo $row['s_id']; ?>&&status=<?php echo $row['stat']; ?>">Reject</a> <?php } ?><br> </td>
  <br><br>
      </td> 
    </tr>
     <?php
      $sn++;}?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>

</body>    
</body>    
</html>