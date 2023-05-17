<?php
include('../php/connection.php');
$que="SELECT * FROM membership ORDER BY m_id";
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
         <th>Acc ID</th>
         <th>Membership</th>
         <th>Card Name</th>
         <th colspan="12">Card Number</th>
         <th>Card Expiry</th>
         <th>Cost</th>
         <th>Valdity</th>
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

      <td><br><?php echo $data['acc_id']??''; ?></td>
      <td><br><?php echo $data['mname']??''; ?></td>
      <td><br><?php echo $data['cname']??''; ?></td>
      <td colspan="12"><br><?php echo $data['cnum']??''; ?></td>
      <td><br><?php echo $data['cexp']??''; ?></td>
      <td><br><?php echo $data['cost']??''; ?></td>
      <td><br><?php echo $data['valdity']??''; ?></td>
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