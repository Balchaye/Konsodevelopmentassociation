
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
		  <li class="active"><a href="login_selection.php"><span>About</span></a></li>
		  <li class="active"><a href="php_project.php"><span>Projects</span></a></li>
		  <li class="active"><a href="php_coadmin_login_page.php"><span>Contacts</span></a></li>
		  <li class="active"><a href="php_achieve_before.php"><span>Pervious Achievments</span></a></li>
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
     <p><font color="black-red" size="3">From the above tool bar select the pages like "ADMINSTRATOR LOGIN" to login as adminstrator, "Co-ADMINSTRATOR LOGIN" to login as co-adminsitrator,"CREATE ADMINSTRATOR ACCOUNT" to create account for system controller and "LOGIN TO MANGE ACCOUNT" to login to manage account using ADMINISTRATOR username, country code and password</font></p>
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
         <h2><span>LIST OF ONGOING PROJECTS</span></h2> 
          <div class="clr"></div>
          <?php
      $con = mysql_connect("localhost","root","vertrigo");
      if (!$con)
             {
            die('Could not connect: ' . mysql_error());
             }
  
        mysql_select_db("kda",$con);
        $result=mysql_query("select * from projecttable where ProjectCode = '$_POST[ProjectCode]'");
        $row=mysql_fetch_array($result);
        echo"<table style=' border:4px solid silver' cellpadding='15px' cellspacing='10px'
              align='center' border='0' >";


echo"<tr>";
echo"<td>"."<strong>"."<font size=4>"."Project Title:-"."<u>" .$row['Title']."</u>"."</font>"."</strong>"."</td>";
echo "</tr>"; 
echo"<tr>";
echo "<td>". "<img style='margin-top:0px; border-width: 0px; margin-left:0px;'  alt='Unable to View' src='" .$row['ProjectImage'] ."' >"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3.5>"."<strong>"."Introduction of the Project:-"."</strong>" .$row['Project_introduction']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3.5>"."<strong>"."Project Body:-"."</strong>" .$row['Project_body']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=4.5>"."<strong>"."የፕሮጀክቱ ርዕስ:-"."<u>" .$row['AProjectTitle']."</u>"."</strong>"."</font>"."</td>";
echo"</tr>";
echo"<tr>";
echo "<td>". "<img style='margin-top:0px; border-width: 0px; margin-left:0px;'  alt='Unable to View' src='" .$row['ProjectImage'] ."' >"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3.5>"."<strong>"."የፕሮጀክቱ ማብራርያ:-"."</strong>" .$row['AProject_introduction']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3.5>"."<strong>"."የፕሮጀክቱ አጠቃላይ እይታ:-"."</strong>" .$row['Aproject_body']."</font>"."</td>";
echo"</tr>";
echo"</table>";
echo"<p>";
  echo"</p>";
        mysql_close($con);
      ?>
		   <font color="black" size="3">
         <?php
$con=mysql_connect("localhost","root","vertrigo");
if(!$con)
{
die('coud not conect:'.mysql_error());
}
mysql_select_db("kda",$con);
$result=mysql_query("select *FROM  projecttable ");
while($row=mysql_fetch_array($result))
{
 echo"<table style=' border:4px solid silver' cellpadding='15px' cellspacing='10px'
              align='center' border='0' >";


echo"<tr>";
echo"<td>"."<strong>"."<font size=4>"."Project Title:-"."<u>" .$row['Title']."</u>"."</font>"."</strong>"."</td>";
echo "</tr>"; 
echo"<tr>";
echo "<td>". "<img style='margin-top:0px; border-width: 0px; margin-left:0px;'  alt='Unable to View' src='" .$row['ProjectImage'] ."' >"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3.5>"."<strong>"."Introduction of the Project:-"."</strong>" .$row['Project_introduction']."</font>"."</td>";
echo "<tr>"; 
echo"<td>"."<form action='php_view_project_all.php' Method ='POST'>"."View More About The Project:-"." "."<input type='submit' name='ProjectCode' value='$row[ProjectCode]''/>"."<font size=3.5>"."<strong>"."</strong>" ."</font>"."</form>"."</td>";
echo"</tr>";
echo"</table>";
echo"<p>";
  echo"</p>";

}
mysql_close($con);
?>
</font>
      <div class="article">
         <!-- <h2><span>SOCIAL AND POLETICAL DATA ANALYSIS</span></h2> -->
          <div class="clr"></div>
      <p><font color="Green" size="5">THE USERS OF THE SYSTEM</font></p>
          
           <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> A persone only view all the information provided by the system A persone who will control the whole system by creating account for data collectors and co-adminsitratorion provided by the system, also he/she can manage the accounts. And system will have only one ADMINISTRATOR</font></p>
           <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> A persone only view all the information provided by the system</font></p>
           <p><font color="blue" size="4">3.<u>DATA INPUTERS AND UPDATERS:-</u> They uses the either Mobile based application or 
        directly access the site to input data needed
       to system and update informations that needs updating. But they have no right or power to create account or view the analyzed data </font></p>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
         <table style=" border:10px solid blue" cellpadding="3px" cellspacing="0px" border="10">
        <td><a href="php_membership.php"><span><marquee><font size="4" color="green" >Please Register For KDA Membership</font></marquee></span></a></td>
        
    
      
            </table>
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
