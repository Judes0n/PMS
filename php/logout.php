<?PHP
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(session_destroy())

{
sleep(2);
header("Location: ../index.html");

}

?>