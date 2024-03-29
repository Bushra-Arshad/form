<?php
  include("connection.php");
  $roll=$_GET['id'];
  $sql="DELETE FROM done WHERE id='$roll'";

  $d=mysqli_query($connect, $sql);
  if($d){
    echo "record delete";
  }
  else{
    echo "not";
  }





?>