<?php
$connect =mysqli_connect("localhost","root","","voting") or die("connection_aborted");

if($connect){
    echo "Connected!!";
}
else{
    echo "Connection faild";
}
?>