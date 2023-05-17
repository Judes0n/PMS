<?php
include('../php/connection.php');
$que="SELECT * FROM feedback ORDER BY fid";
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
    <?php ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm table-bordered table-hover">
       <thead><tr>
         <th>Sl.No</th>   
         <th>Acc ID</th>
         <th colspan="14">Message</th>
    </thead>
    <tbody>
  <?php   
      $sn=1;
      $fetc=mysqli_fetch_all(mysqli_query($conn,$que),MYSQLI_ASSOC);
      if(is_array($fetc))
      {
      foreach($fetc as $data){
    ?>
      <tr>
      <td><br><?php echo $sn; ?></td>  
      <td><br><?php echo $data['acc_id']??''; ?></td>
      <td><br><?php echo $data['feed']??''; ?></td>
     <?php
      $sn++;}}?>
  </td>
    <tr>
    <?php
    ?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>