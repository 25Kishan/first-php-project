<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style media="screen">
  body{
        background:#2C3335 !important;
    }
    h2{
        color:#fff;
        margin-top:100px !important;
        text-align:center;
        text-transform : uppercase;
    }
    .dropdown{
      float: right;
      margin-top: -330px;
      margin-right: -3px;

    }
  </style>
</head>
<body>
<?php include("profile/index.html") ?>
<div class="container">
  <div class="dropdown">
 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Settings
 <span class="caret"></span></button>
 <ul class="dropdown-menu">
   <li><a href="setting.php">Change Password</a></li>
   <li><a href="logout.php">LOGOUT</a></li>
 </ul>
</div>
  <h2>Welcome  &nbsp; " <?php echo $_SESSION['username'] ; ?> " </h2>
</div>

</body>
</html>
