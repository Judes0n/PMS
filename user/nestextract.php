<?php
session_start();
include("../php/connection.php");

$accid=$_SESSION['acc_id'];
$db= $conn;
$tableName="sel_profiles";
$columns= ['s_id', 'acc_id1','acc_id2','s_name','s_cnct','s_img','stat'];
$fetch = fetch_data($db, $tableName, $columns,$accid);
function fetch_data($db, $tableName, $columns,$condition){
 if(empty($db)){
  $msg= "Database connection error";
 }
 elseif (empty($columns) || !is_array($columns))
  {
  $msg="Empty";
 }
 elseif(empty($tableName)){
   $msg= "Table Name is empty";
}
else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." WHERE acc_id1=$condition";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}


return $msg;
}
?>