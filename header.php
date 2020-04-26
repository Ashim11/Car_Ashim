<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EasyQuickPark</title>


</head>

<body>
<div id="wrapper_sec">
	<div id="masthead">
    	<div class="logo">
        	<a href="./index.php" class="logo-custom">EasyQuickPark</a>
        </div>
        <div class="slogan"></div>
        <div class="clear"></div>
            <div class="navigation">
            	<div id="smoothmenu1" class="ddsmoothmenu">
                    <ul>
                    <li><a href="./index.php">Home</a>
                   </li>
                    <li><a href="./about.php">About Us</a></li>
					<?php if($_SESSION['user_details']['user_level_id'] == 1) {?>
						<li><a href="#">Adminstration</a>
							<ul>
								<li><a href="">Add Parking Space</a></li>	
								<li><a href="">Parking Space Report</a></li>
								<li><a href="">Parking Report</a></li>	
								<li><a href="">Assign Paking</a></li>
								<li><a href="">Add System User</a></li>
								<li><a href="">System User Report</a></li>									
								<li><a href="">Search Car</a></li>
							</ul>
						</li>
						
					<?php } if($_SESSION['login'] == 1) {?>
					<li><a href="">Book Space</a></li>
					<li><a href="./user.php?user_id=<?php echo $_SESSION['user_details']['user_id']; ?>">My Account</a></li>
					<li><a href="">Change Password</a></li>
					<li><a href="./lib/login.php?act=logout">Logout</a></li>
					<?php } else { ?>
					<li><a href="./contact.php">Contact Us</a></li>
					<li><a href="./login.php">Login</a></li>
					<li><a href="./signUp.php">SignUp</a></li>
					
                    
					<?php }?>
                    </ul>
                    <br style="clear: left" />
                    </div>
					
            </div>
    </div>