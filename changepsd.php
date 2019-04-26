<?php
session_start();
$con = mysqli_connect("localhost","root","","finallogin");
if($_POST)
{
  $opass = $_POST["opass"];
  $npass = $_POST["npass"];
  $cpass = $_POST["cpass"];
  $user = $_SESSION['username'];

  $sql=mysqli_query($con,"SELECT password FROM user where password='$opass' && name='$user'");
  $num=mysqli_fetch_array($sql);

if($num>0)
{

 $con=mysqli_query($con,"update user set password=' $npass' where name='$user'");

        echo "<script>alert('password changed')</script>";
        header('location:signin.php');

    }else {
      echo "<script>alert('confirm password not match')</script>";
    }

  }
?>
