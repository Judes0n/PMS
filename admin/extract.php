<?php
include("../php/connection.php");
$db= $conn;
$tableName="acc";
$columns= ['acc_id', 'u_id','mid','fname','age','bday', 'relg','cnct','addrss','gender','income','height','wight','educ','occup','img','lim','stats'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
if(isset($_SESSION['key']))
{
   $key=$_SESSION['key'];
   $query = "SELECT ".$columnName." FROM acc WHERE fname LIKE '%$key%' OR acc_id='$key'";
   unset($_SESSION['key']);
}
else
{
   $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY acc_id DESC";
}
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