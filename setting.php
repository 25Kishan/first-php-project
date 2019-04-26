<?php
session_start();
$con = mysqli_connect("localhost","root","","finallogin");
$user = $_SESSION['username'];
$sql = "SELECT email FROM user where name='$user'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>settings</title>
    <style>
      body{
        margin: 0;
        padding: 0;
        background: #fff;
      }
      .logo{
        margin-top: 8px;
        margin-left: 100px;
        color: #2C3335;
        cursor: pointer;
      }
      .acc h2{
        margin-top: 160px;
        margin-left: 100px;
        font-size: 40px;
      }
      .left{
        width: 40%;
        float: left;
        margin-top: 50px;
        }
        .left button{
          margin-top: 44px;
          margin-left: 205px;
          font-size: 35px;
          border-radius: 4%;
          border: 1x solid grey;
        }
        .left  h3{
          font-size: 5px;
        }
        #change{
          display: inline-block;
          padding: 15px 35px;
          text-decoration: none;
          text-transform: uppercase;
          border-radius: 200px;
          transition: background-color 0.2s,border 0.2s,color 0.2s;
          background-color: transparent;
          margin-top: 25px;
          margin-left: 180px;
          border: 1px solid lightgray;

        }

        .social{
          color: #99AAAB;
          font-size: 50px;
          background-color: #DAE0E2;
          border-radius: 50%;
          border: 1x solid grey;
          margin-bottom: 100px;
          margin-left: 250px;
          padding: 25px;
        }
        .right{
          width: 60%;
          float: right;
        }
        hr{
          color: lightgray;
        }
        .right h3{
          margin-top: 50px;
          font-size: 30px;
        }
        input[type=text] {
        width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        background-color: #3CBC8D;
        color: white;
      }
      input[type=password] {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: none;
      background-color: #3CBC8D;
      color: white;
    }

    </style>
  </head>
  <body>
    <header>
      <h2 class="logo"><a href="home.php">LALU PATEL</a></h2>
    </header>
    <section class="main">
      <div class="acc">
        <h2>ACCOUNT</h2>
        <hr>
      </div>
    </section>
    <section>
      <div class="left">
       <a href="#" class="social"><i class="fa fa-user"></i></a>
       <div id="change">
         <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;
         &nbsp;CHANGE PHOTO
       </div>
      </div>
      <div class="right">
        <h3>Account Details</h3>
        <hr>
        <div>
        <form action="changevalue.php" method="post">
            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="fname" value="<?php echo $user ?>" disabled />
            <hr>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value="<?php echo $row['email'] ?>" disabled />
            <button type="edit" class="btn btn-default" id="edit" onclick="return handleEdit()">Edit</button>
            <button type="submit" class="btn btn-default" id="save" hidden>Save</button>

        </form>
      </div>
      <div class="password">
        <h3>change password</h3>
        <hr>
        <form action="changepsd.php" method="post">
          <label for="fname">Old Password</label><br>
          <input type="password" id="opass" name="opass" value="" onchange='check_pass();' />
          <br>

          <label for="npass">New Password</label><br>
          <input type="password" id="npass" name="npass" value="" onchange='check_pass();' />
          <br>

          <label for="cpass">Verify New Password</label><br>
          <input type="password" id="cpass" name="cpass" value="" onchange='check_pass();' />

            <input type="submit" name="submit"  value="registration"  id="submit" disabled/>
            <hr>
        </form>
      </div>

      </div>
    </section>

    <script type="text/javascript">
    function handleEdit() {
    document.getElementById('fname').disabled = false;
    document.getElementById('email').disabled = false;
    document.getElementById('edit').hidden = true;
    document.getElementById('save').hidden = false;

    return false;}
    function check_pass() {
      if(document.getElementById('npass').value == document.getElementById('cpass').value){
        document.getElementById('submit').disabled= false;
      }
      else{
        document.getElementById('submit').disabled= true;
      }
    }
    </script>
  </body>
</html>
