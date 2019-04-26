<?php 
session_start();
header('location:index.php');
$con = mysqli_connect("localhost","root","","finallogin");

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM  user where name = '$name'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "User name is already taken";
}
else{
    $reg = "insert into user(name,email,password)values('$name','$email','$pass')";
    mysqli_query($con,$reg);
    echo "Registration succesfully";
}
?>
