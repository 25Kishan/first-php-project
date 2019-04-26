<?php
session_start();

$con = mysqli_connect("localhost","root","","finallogin");

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM  user where name = '$name'&& password = '$pass'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['username'] = $name;
   header('location:home.php');
}
else{
   header('location:index.php');
}
?>
