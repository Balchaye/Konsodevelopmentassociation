
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
        <ul class="su_menu">
		<?php include("general1.php"); ?>
    <li class="active"><a href="php_home_out.php"><span>KDA HOME</span></a></li>
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
        <!-- 



        -->
    <?php

include("modal_style.php");
?>
<?php 
include("conf.php");
?>

<!--End View of Full Prroject  -->
            <div class="article">
              <!-- <h2><span>SOCIAL AND POLETICAL DATA ANALYSIS</span></h2> -->
                <div class="clr"></div>
                <font size="4.5"><a href="php_ict.php"><strong>ICT center </strong></font></a> <p></p>
                <font size="4.5"><a href="php_special_school.php"><strong>Konso Development Association(KDA) Special School</strong></font></a> <p></p>
                <font size="4.5"><a href="php_garage.php"><strong>Konso Development Association(KDA) Garage </strong></font></a> <p></p>

                   </div>
              </div>
            </div>
            <div class="sidebar">
              <div class="gadget">
              <table style=" border:10px solid blue" cellpadding="3px" cellspacing="0px" border="10">
              <td><a target="_self" href="php_membership.php"><span><marquee><font size="4" color="green" >Please Register For KDA Membership</font></marquee></span></a></td>
                </table>
                <?php include("general4.php"); ?>
              </div>
            </div>
            <div class="clr"></div>
          </div>
  </div>
  <?php include("general2.php"); ?>
</html>
