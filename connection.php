<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn) {
    echo 'coonnected';

}
else{
    echo 'error';

}
?>