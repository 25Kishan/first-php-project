<?php
session_start();
$con = mysqli_connect("localhost","root","","finallogin");
if($_POST)
{
  $name = $_POST['fname'];
  $email = $_POST['email'];
  $user = $_SESSION['username'];

  $sql=mysqli_query($con,"SELECT name,email FROM user where name='$user'");
  $num=mysqli_fetch_array($sql);
  if($num>0)
  {

   $con=mysqli_query($con,"update user set name=' $name', email ='$email' where name='$user'");

          echo "<script>alert('Your data is changed')</script>";
          header('location:index.php');

      }else {
        echo "<script>alert('data is not match')</script>";
      }

    }
 ?>
