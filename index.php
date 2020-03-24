<?php
session_start();
if( isset( $_SESSION['email'] ) )
     {
	 header("location: logged-index.php");
	 exit;
  }
   ?>
<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
  <!--  <title>responsive test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>  -->
  
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="img/building.jpg" alt="Mountain View" style="width:954px;height:470px">
<section class="account">
  <h1>Log In</h1>
<hr>
  <form action="process-log-in.php" method="post">
     <input type="text" id="FullName" name="email"placeholder="Your Email" maxlength="31" required />
	 <input type="password" id="FullName" name="password" placeholder="Your Password" maxlength="10" required />
	 <input type="submit" id="LogIn" value="Log In">
	 </form>
	 <p><a href="signup.php" class="Link">Or Sign Up</a></p>
</section>
</section>
<section class="kisii-bottom">
<p>Park your car in city center</p>
</section>
</body>
</html>
