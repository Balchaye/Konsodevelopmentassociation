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
<link rel="shortcut icon" HREF="images/rut.jpg" />
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
		<div  > <a href="#"><img src="images/fl.gif" width="150" height="115" alt="" />
	<img src="images/rut.jpg" width="180" height="115" alt="" />
	<marquee width="480" direction="up" height="115px">
	<img src="images/ict.jpg" width="480" height="215" alt="" />
	<img src="images/konso6.jpg" width="480" height="215" alt="" />
	<img src="images/konso2.jpg" width="480" height="215" alt="" />
	<img src="images/konso3.jpg" width="480" height="215" alt="" />
	<img src="images/konso4.jpg" width="480" height="215" alt="" />
	<img src="images/konso7.jpg" width="480" height="215" alt="" />
	<img src="images/konso8.jpg" width="480" height="215" alt="" />
	<img src="images/konso9.jpg" width="480" height="215" alt="" />
	<img src="images/konso5.jpg" width="480" height="215" alt="" /></marquee>
	<img src="images/rut.jpg" width="180" height="115" alt="" />
	<img src="images/fl.gif" width="150" height="115" alt="" /> 
	</a> <a href="#"> <strong><marquee direction="right" height="40px"><font size="5" color="Black">Konso Development Association(KDA) የኮንሶ ልማት ማህበር(ኮልማ)</marquee></font></strong></a>
      </div>
          <li class="active"><a href="home.php"><span>KDA HOME</span></a></li>
		  <li class="active"><a href="login_selection.php"><span>About</span></a></li>
		  <li class="active"><a href="php_system_login.php"><span>Acadmics</span></a></li>
		  <li class="active"><a href="php_project.php"><span>Projects</span></a></li>
		  <li class="active"><a href="php_coadmin_login_page.php"><span>Contacts</span></a></li>
		  <li class="active"><a href="php_achieve_before.php"><span>pervious Achievments</span></a></li>
		  <li class="active"><a href="php_login_admin.php"><span>Login</span></a></li>
		  <li class="active"><a href="php_system_login.php"><span>System Admin</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
	  <?php
	include("conf.php");
	
	if (isset($_POST['php_system_login_page'])){
		$Username=$_POST['username'];
		$Password=$_POST['password'];
		$Password=md5($Password);
	$check_user = "select * from system_admin where Username='$Username'  and  Password='$Password'";
	//$check_delete = "select * from system_admin where Username='$Username' and Type='Deleted'";
	//$delete = mysql_query($check_delete);
	$run = mysql_query($check_user);
	$result = mysql_num_rows($run);
	/*$resu = mysql_num_rows($delete);	
	if($resu>0){
		echo '<font size="4" color="red">' ." YOUR ACCOUNT HAS BEEN DELETED!!!".'</font>';
	}
	//else
		*/
	if($result>0){
			$_SESSION['log']['login']    = TRUE;
			$_SESSION['log']['Username'] = $_POST['username'];
			$session = "1";
	header("Location: php_creat_administrator_account.php");
				}
	else{

		echo '<div class="alert alert-dismissable alert-error">';
		echo '<font size="3" color="red">'."Incorrect System Password/Username, So Please Enter Correct Information To Logn!!!".'</font>';
		echo '</div>';
		/*if($Type='Deleted')
		{
			echo '<font size="3" color="blue">'."Or maybe Your Account has been deleted, So Please Contact Adminsitrator!!!".'</font>';
		}*/
	}

	
}
	
	?>
           <form  method="POST" action="">
         <table>
        <td><font size="4" color="white">Administrator Username</font></td><td><input type="password" name="username" placeholder="Username " required></td>
        </tr>
		 <tr>
        <td><font size="4" color="white">Administrator Password</font></td><td><input type="password" name="password" placeholder="Password" required></td>
        </tr>
		<td></td><td><input type="reset" value ="clear" name="cancel"> <input type="submit" value ="Login" name="php_system_login_page"></td>
        </table>
        </form>
        </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        
        <div class="gadget">
          
         
        </div>
        <div class="article">
          
          
           
     
           <p><a href="#"><strong></strong></a> <span></span> <span></span> <a href="#"><strong></strong></a></p>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          
         
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <?php include("general2.php"); ?>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by <a href="http://www.hellasc.com/">HELLA SOFTWARE COMPANY</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</html>
