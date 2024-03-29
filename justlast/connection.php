<?php
$connect = mysqli_connect("localhost","root","","justlast");
if($connect){
    echo "connected";
}
else{
    echo "not connected";
}