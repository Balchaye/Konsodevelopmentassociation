
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
<?php include("general1.php"); ?>
          <li class="active"><a href="home.php"><span>KDA HOME</span></a></li>
		  <li class="active"><a href="login_selection.php"><span>About</span></a></li>
		  <li class="active"><a href="php_project.php"><span>Projects</span></a></li>
		  <li class="active"><a href="php_coadmin_login_page.php"><span>Contacts</span></a></li>
		  <li class="active"><a href="php_achieve_before.php"><span>pervious Achievments</span></a></li>
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
	include("conf.php");
	
	if (isset($_POST['php_admin_login_page'])){
		$Username=$_POST['username'];
		$CountryCode=$_POST['code'];
		$Password=$_POST['password'];
		$Password=md5($Password);
	$check_user = "select * from adminstrator where Username='$Username'  and CountryCode='$CountryCode' and  Password='$Password' ";
	$check_delete = "select * from adminstrator where Username='$Username' and Responsibility!='251' and CountryCode!='+251e416' ";
	$delete = mysql_query($check_delete);
	$run = mysql_query($check_user);
	$result = mysql_num_rows($run);
	$resu = mysql_num_rows($delete);
	if($resu>0){
		echo '<font size="4" color="red">' ." YOUR ACCOUNT HAS BEEN BLOCKED!!!".'</font>';
	}
	else
	if($result>0){
			$_SESSION['log']['login']    = TRUE;
			$_SESSION['log']['Username'] = $_POST['username'];
			$session = "1";
	header("Location: home1.php");
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
        <td>Association Code</td><td><input type="password" name="code" placeholder="Enter Association Code" required></td>
        </tr>
		 <tr>
        <td>Password</td><td><input type="password" name="password" placeholder="************" required></td>
        </tr>
		<td></td><td><input type="reset" value ="clear" name="cancel"> 
		<input type="submit" value ="Login" name="php_admin_login_page" ></td>
		</form>
		<form  method="POST" action="php_forget_adminpassword.php">
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
		  <p><font color="Green" size="5">THE USERS OF THE SYSTEM</font></p>
		   <p><font color="blue" size="4" style="Times New Roman">1.<u>ADMINSTRATOR:-</u> A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR</font></p>
			     <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> A persone only view all the information provided by the system A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR</font></p>
			     <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> A persone only view all the information provided by the system A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR A persone who will control the whole system by creating account for data collectors and co-adminsitrator
               and who can view all the information provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR</font></p>
			     <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> </font></p>
			     <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> </font></p>
			     <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> A persone only view all the information provided by the system</font></p>
           <p><font color="blue" size="4">3.<u>DATA INPUTERS AND UPDATERS:-</u> They uses the either Mobile based application or 
		    directly access the site to input data needed
		   to system and update informations that needs updating. But they have no right or power to create account or view the analyzed data </font></p>
    
    


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
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by  <img src="images/hella.png" width="45" height="45" alt="" class="gal" /> <a href="https://hellasc.weebly.com//">HELLA SOFTWARE COMPANY</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</html>
