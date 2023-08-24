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
<link rel="shortcut icon" HREF="images/ethi.png" />
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
	<div > <a href="#"><img src="images/fl.gif" width="250" height="95" alt="" />
	<img src="images/gj.jpg" width="100" height="95" alt="" />
	<img src="images/et.png" width="240" height="95" alt="" />
	<img src="images/gj.jpg" width="100" height="95" alt="" />
	<img src="images/fl.gif" width="250" height="95" alt="" /> 
	</a> <a href="#"> <strong><font size="5"><marquee>CENTRAL STATSTICAL AGENCY OF ETHIOPIA የኢትዮጵያ ማዕከላዊ ስታትስትካስ ኤጀንስ</marquee></font></strong></a>
      </div>
      <div class="searchform">

      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
		 <li><a href="loginselec.php"><span>Back</span></a></li>
		  <strong><font size="4" color="BLUE">CENTRAL STATSTICAL AGENCY OF ETHIOPIA Login Page የኢትዮጵያ ማዕከላዊ ስታትስትካስ ኤጀንስ መግቢያ ገፅ</font></strong>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
	  <?php
	include("conf.php");
	
	if (isset($_POST['php_admin_login_page'])){
		$Username=$_POST['username'];
		$CountryCode=$_POST['code'];
		$Password=$_POST['password'];
		$Password=md5($Password);
	$check_user = "select * from adminstrator where Username='$Username'  and CountryCode='$CountryCode' and  Password='$Password' ";
	$check_delete = "select * from adminstrator where Username='$Username' and Responsibility!='251' and CountryCode!='+251e416'";
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
	header("Location: php_create_account.php");
				}
	else{

		echo '<div class="alert alert-dismissable alert-error">';
		echo '<font size="4" color="red">'."Incorrect Administrator Password/Username and Country Code, So Please Enter Correct Information To Logn!!!".'</font>';
		echo '</div>';
	}
}
	?>
	<!--<p><font color="blue-black" size="4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMINISTRATOR ACCOUNT MANAGEMENT LOGIN PAGE</font></p>
    <font color="blue-black" size="4"> LOGI AS ADMINSTRATOR TO CREATE ACCCOUNT FOR DATA COLLECTORS AND Co-ADMINISTRATORS</font>-->
           <form  method="POST" action="">
         <table>
        <td>User Name</td><td><input type="text" name="username" placeholder="Enter GFather " required></td>
        </tr>
		<tr>
        <td>Country Code</td><td><input type="password" name="code" placeholder="Enter Name" required></td>
        </tr>
		 <tr>
        <td>Password</td><td><input type="password" name="password" placeholder="Enter Name" required></td>
        </tr>
		<td></td><td><input type="reset" value ="clear" name="cancel"> <input type="submit" value ="Login" name="php_admin_login_page" ></td>
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
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
      <marquee> <a href="#"><img src="images/1.jpg" width="75" height="75" alt="" class="gal" />
	    <img src="images/2.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/3.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/4.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/5.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/6.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/7.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/8.jpg" width="75" height="75" alt="" class="gal" />
	   </a> <a href="#">
	   <img src="images/9.jpg" width="75" height="75" alt="" class="gal" /></a> 
	   <a href="#"><img src="images/11.jpg" width="75" height="75" alt="" class="gal" /></marquee>
	   <marquee></a> <a href="#"><img src="images/12.jpg" width="75" height="75" alt="" class="gal" /></a> 
	    <img src="images/13.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/14.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/15.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/16.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/17.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/18.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/19.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/21.jpg" width="75" height="75" alt="" class="gal" /></a> 
	   <a href="#"><img src="images/2.jpg" width="75" height="75" alt="" class="gal" /></a> </marquee></div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>The system will provide the following things to the user of the system.</p>
        <ul class="fbg_ul">
          <li>1-Calculate All Information Regarding Population</li>
		  <li>2-Calculate All Information Regarding Income of Population</li>
		  <li>3-Calculate All Information Regarding Domestic Animals</li>
        </ul>
      </div>
      <div class="col c3">
      <h2><span>Developer's</span> Contact</h2>
        <p>Blow there is the contact information of the system developers including their Name and E-mail</p>
        <p class="contact_info"> <span>Address:</span> Xonso Zone, ETHIOPIA<br />
	      <span>Programer:</span>BalchaNamakoW'cBombe<br />
		  <span>Telephone:</span>       +2519-6470-1944<br />
		  <span>Designer:</span>Balcha Bekele Lawca<br />
		   <span>Telephone:</span>       +2519-3870-9459<br />
		   <span>E-mail:</span> <a href="http://www.gmail.com/balchabekeles">balchabekeles@gmail.com</a>
		</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by <a href="http://www.hellasc.com/">HELLA SOFTWARE COMPANY</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</html>
