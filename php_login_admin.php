			<?php 
			include("conf.php");
			include("modal_style.php");
			?>
			<?php
			session_start();
			if(isset($_SESSION['log']['Username'])){
			header("location: home.php");
			}

			?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta charset="utf-8">
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
			<script type="text/javascript" src="js/cufon-yui.js"></script>
			<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
			<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
			<script type="text/javascript" src="js/coin-slider.min.js"></script>
			<title>Adminstrator Page </title>
				<link rel="shortcut icon" HREF="images/konsofig.PNG" />
			</head>
			<body>
			<div class="main">
			  <div class="header">
				<div class="header_resize">
				
				  <div class="searchform">

				  </div>
				  <div class="clr"></div>
				  <div class="menu_nav">
					<ul>
			 <div align="center" > <a href="#">
				   </div>
				  <li class="active"><img src="images/rut.png"  width="60" height="60" alt="" /></li>
					<li class="active"><a href="php_home_out.php"><span>KDA HOME</span></a></li>
					  <li class="active"><a href="php_project.php"><span>Projects</span></a></li>
					  <li class="active"><a href="php_achieve_before.php"><span>Pervious Achievments</span></a></li>
				  <li class="active"><a href="php_publication.php"><span>Publications</span></a></li>
				  <li class="active"><a href="php_institutions.php"><span>Institutions</span></a></li>
					  <li class="active"><a href="php_login_admin.php"><span>Login</span></a></li>
				  <li class="active"><img src="images/rut.png"  width="60" height="60" alt="" /></li>
				  </a> <a href="#"> <strong><marquee direction="left" height="40px"><font size="5" color="Black">Konso Development Association(KDA)- <font color="blue">For the Better Life of Konso People!!</font> የኮንሶ ልማት ማህበር(ኮልማ)-<font color="blue">ለኮንሶ ሕዝብ የተሻለ ሕይወት!!</font></marquee></font></strong></a>
					</ul>
				  </div>
				 
					<div class="clr"></div>
				 <!-- <div class="slider">
				  <h1><font color="blue-black">LOGIN SELECTION PAGE</font></h1>
			</div> -->
				  <div class="clr"></div>
				</div>
			  </div>
			  <div class="content">
				<div class="content_resize">
				  <div class="mainbar">
					<div class="article">
					 <!-- <h2><span>ADMINSTRATOR</span></h2> -->
					  <div class="clr"></div>
					   <ul class="sb_menu">
				 <?php
				 $user='root';
				$pass='';
				$db="kda";
				$conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
				if (isset($_POST['logs'])){
					$Username=$_POST['username'];
					$KDA=$_POST['KDA'];
					$Password=$_POST['password'];
					$Password=md5($Password);
				$check_user = "select * from adminstrator where Username='$Username'";
				//$check_user = "select * from adminstrator where Username='$Username'  and KDA='$KDA' and  Password='$Password' ";
				
				$run = $conn->query($check_user);
				$result = mysqli_num_rows($run);
				if($result>0){
						$_SESSION['log']['login']    = TRUE;
						$_SESSION['log']['Username'] = $_POST['username'];
						$session = "1";
				header("Location: home.php");
							}
				else{

					echo '<div class="alert alert-dismissable alert-error">';
					echo '<font size="4" color="red">'."Incorrect Information, So Please Enter Correct Information To Login!!!".'</font>';
					echo '</div>';
				}
			}
				?>
				 <form  method="POST" action="">
					 <table>
					<td>User Name</td><td><input type="text" name="username" placeholder="Enter Your User Name " required></td>
					</tr>
					<tr>
					<td>Association Code</td><td><input type="password" name="KDA" placeholder="Enter Association Code" required></td>
					</tr>
					 <tr>
					<td>Password</td><td><input type="password" name="password" placeholder="************" required></td>
					</tr>
					<td></td><td><input type="reset" value ="clear" name="cancel"> 
					<input type="submit" value ="Login" name="logs" ></td>
					</form>
					<form  method="POST" action="pass_forget.php">
					<tr><td></td><td>
					<input type="submit" value ="Forget Password"  >
					</td></tr>
					</table>
					</form> 
					<!-- -->
				<!-- --> 
				<!-- -->

			   
				<!-- --> 
				<!-- -->
				<!-- -->
					<p><a href="#"><strong></strong></a> <span></span> <span></span> <a href="#"><strong></strong></a></p>
				   </ul>
					</div>
					<div class="gadget">
					 <!-- <h2 class="star"><span>ECONOMIC AND GOOD GOVERNANCE ANALYSIS</span></h2> -->
					  <div class="clr"></div>
					  <ul class="ex_menu">
					
					  <div class="comment"> <a href="#"></a>
					  </div>
					  </ul>
					</div>
					<div class="article">
					 <!-- <h2><span>SOCIAL AND POLETICAL DATA ANALYSIS</span></h2> -->
					  <div class="clr"></div>
					   <p><a href="#"><strong></strong></a> <span></span> <span></span> <a href="#"><strong></strong></a></p>
					</div>
				  </div>
				  <div class="sidebar">
					<div class="gadget">
					 <?php include("general4.php"); ?>
					</div>
				  </div>
				  <div class="clr"></div>
				</div>
			  </div>
			  <?php include("general2.php"); ?>
			</html>
