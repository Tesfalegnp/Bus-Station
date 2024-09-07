<?php
$DB_SERVER="localhost:3306";
$DB_USER="root";
$DB_PASS="";
$DB_NAME="station";
//$conn=mysqli_connect('localhost:3306','root',' ','Station');
$db = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);
if(!$db)
{
    die('The connection Problem'.mysqli_connect_error());
}
 else{

    
}
?>
