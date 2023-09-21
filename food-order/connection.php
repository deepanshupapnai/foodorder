<?php 

$username = "root";
$password = "";
$server = 'localhost';
$db = 'food';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    echo "connection sucessful";
}
else{
    echo "no connection";
}

?>