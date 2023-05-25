<?php 
include"./connectiondb.php";
session_start();
//login to site
if(isset($_POST['login'])){
    $uname=mysqli_real_escape_string($con,$_POST["username"]);
    $password=mysqli_real_escape_string($con,$_POST["password"]);
$_SESSION['uname']=$uname;
    $sql="select * from user where username='$uname' && password='$password';";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){
        header('location:home.php');
    }else{
        header('location:login.php');
    }

}


//add medicine

if(isset($_POST['add'])){
    $medname=mysqli_real_escape_string($con,$_POST['name']);
    $qtt=mysqli_real_escape_string($con,$_POST['qtt']);

    $sql1="insert into medicines(name,quantity) values('$medname','$qtt') ";
    $sql2="select * from medicines where name='$medname'";

    $res1=mysqli_query($con,$sql2);
    if(mysqli_num_rows($res1)<=0){
        $res2=mysqli_query($con,$sql1);
        if($res2){
            header("location:home.php");
        }else{
            echo "data cant insert";
        }
    }else{
        echo "this medicine is alrady in stock";
    }

}

//update medicines

if(isset($_POST['update'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $medname=mysqli_real_escape_string($con,$_POST['name']);
    $qtt=mysqli_real_escape_string($con,$_POST['qtt']);

    $sql1="update medicines set name ='$medname' , quantity='$qtt' where id='$id'";
   

   
        $res2=mysqli_query($con,$sql1);
        if($res2){
            header("location:home.php");
        }else{
            echo "data cant  update";
        }
    }




?>