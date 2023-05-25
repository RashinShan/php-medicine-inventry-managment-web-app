<?php
include("./connectiondb.php");
$id=$_GET['id'];
$sql="delete from medicines where id='$id'";

$res=mysqli_query($con,$sql);
if($res){
    header("location:home.php");
}else{
    echo"error";
}

?>