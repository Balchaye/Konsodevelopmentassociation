
<?php 
include("conf.php");
include("modal_style.php");
?>
<?php
session_start();
if(isset($_SESSION['log']['Username'])){
header("location: home1.php");
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
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<title>Konso Development Association Home Page</title>
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
		<?php include("general1.php"); ?>
					<li class="active"><a href="home.php"><span>KDA HOME</span></a></li>
					<li class="active"><a href="php_project.php"><span>Projects</span></a></li>
					<li class="active"><a href="php_achieve_before.php"><span>Pervious Achievments</span></a></li>
					<li class="active"><a href="php_publication.php"><span>Publications</span></a></li>
					<li class="active"><a href="php_institutions.php"><span>Institutions</span></a></li>
					<li class="active"><a href="php_login_admin.php"><span>Login</span></a></li>
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
  	
	  if (isset($_POST['change_Admin_password'])) 
			{	
		  
			  $Username = $_POST['Username'];	
			  $FirstName = $_POST['FirstName']; 
			  $FatherName = $_POST['FatherName'];
			  $newPassword = $_POST['newPassword'];
			  $confirmPassword = $_POST['confirmPassword'];
			  $Password = md5($_POST['newPassword']);
		  $resulsasst = mysql_query("SELECT * FROM adminstrator WHERE Username = '$Username'  and FirstName='$FirstName' and FatherName='$FatherName'");
		  $counssst=mysql_num_rows($resulsasst);
			  if($counssst == 0){
			  echo '<div class="alert alert-dismissable alert-error"><strong>';
				  echo "Opration Faild Please Insert Your Information Correctly ! ";
				  echo '</strong></div>';
			  } else{
			  
			  if(strlen($newPassword) <8) { 
		   echo '<div class="alert alert-dismissable alert-e">';
			  die( '<strong>'."Password Must Be Grater Than Or Equal To 8 Characters !".'</strong>');
			  echo '</div>';
		  }
	   if($_POST['newPassword']!= $_POST['confirmPassword'])
		  {
		   echo '<div class="alert alert-dismissable alert-e">';
			  die( '<strong>'."Password do not mach !".'</strong>');
			  echo '</div>';	
		  }	
			  /* $Password1=$_POST['newPassword'];
			$Password=md5($Password1);*/
			  $result="UPDATE adminstrator SET Password = '$Password' where Username = '$Username'";
			  echo '<div class="alert alert-dismissable alert-success"><strong>';
			  echo '<font color="red" size="3">'."Successfully Changed!&nbsp;&nbsp;".'<font style="background-color:#fff;" color="#000" size="3">'."&nbsp;".$newPassword."&nbsp;".'</font>'."&nbsp;&nbsp;Is your new password".'<br>'.'</font>';
			  echo "".'<a href="php_login_admin.php">'."Login Here".'</a>';
			  if(!mysql_query($result,$con)){
	  die('couldnot update '.mysql_error());	
	  }
			  echo '</strong></div>';
			  }
			  
				  
		  }
			  ?>
			 <table style=" border:2px solid black" cellpadding="3px" cellspacing="2px" border="0">
		  <form method="POST" action="">
		  <tr><td><font size="5" color="Black">User Name</font></td><td><input type="text" title="Enter Your user Name" name="Username" id="kl" placeholder="User name" required></td></tr>
		  <tr><td><font size="5" color="Black">First Name</font></td><td><input type="text" title="Enter Your First Name" name="FirstName" id="kl" placeholder="First Name" required></td></tr>
		  <tr><td><font size="5" color="Black">Middle Name</font></td><td><input type="text" title="Enter Your Last Name" name="FatherName" id="kl" placeholder="Last Name" required></td></tr>
		  <tr><td><font size="5" color="Black">New Password</font></td><td><input type="password" title="Enter Your Password" name="newPassword" id="kl" placeholder="New password" required></td></tr>
		  <tr><td><font size="5" color="Black">Confirm Password</font></td><td><input type="password" title="Enter Your Password" name="confirmPassword" id="kl" placeholder="Confirm password" required></td></tr>
		  <tr><td></td><td><input type="submit" name="change_Admin_password"  value="Chang Admin Password"  class="btn" id="kl"  ></td></tr>
		  </form>
		  </table>
		  <?php
		  
				  
	  
	  ?>
		  </ul>
              </div>
            </div>
            <div class="clr"></div>
          </div>
  </div>
  <?php include("general2.php"); ?>
</html>
