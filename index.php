<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <title>Welcome</title>

   </head>
   <body>
     <div class="container" id="container">
  	<div class="form-container sign-up-container">
  		<form action="signup.php" method = "post">
  			<h1>Create Account</h1>
  			<div class="social-container">
  				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
  				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
  				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
  			</div>
  			<span>or use your email for registration</span>
  			<input type="text" placeholder="Name" name="user" />
  			<input type="email" placeholder="Email" name="email" />
  			<input type="password" placeholder="Password" name = "password"/>
  			<button>Sign Up</button>
  		</form>
  	</div>
  	<div class="form-container sign-in-container">
  		<form action="signin.php" method = "post">
  			<h1>Sign in</h1>
  			<div class="social-container">
  				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
  				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
  				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
  			</div>
  			<span>or use your account</span>
  			<input type="text" placeholder="Name" name="user" />
  			<input type="password" placeholder="Password" name = "password" />
  			<a href="#">Forgot your password?</a>
  			<button>Sign In</button>
  		</form>
  	</div>
  	<div class="overlay-container">
  		<div class="overlay">
  			<div class="overlay-panel overlay-left">
  				<h1>Welcome Back!</h1>
  				<p>To keep connected with us please login with your personal info</p>
  				<button class="ghost" id="signIn">Sign In</button>
  			</div>
  			<div class="overlay-panel overlay-right">
  				<h1>Hello, Friend!</h1>
  				<p>Enter your personal details and start journey with us</p>
  				<button class="ghost" id="signUp">Sign Up</button>
  			</div>
  		</div>
  	</div>
  </div>

  <script type="text/javascript" src="script.js">

  </script>
   </body>
  </html>
