<?php

include("modal_style.php");
?>
<?php 
include("conf.php");
?>
<?php
include("conf.php");
session_start();
if(!isset($_SESSION['log']['Username']))
{

header("location: php_home_out.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf8">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="js/cargz.js"></script>
<script type="text/javascript" src='tinymce4/js/tinymce/tinymce.min.js' referrerpolicy="origin"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#Project_introduction",
    width: 680,
    height: 300,
    plugins: [
              'advlist autolink link image lists charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
              'table emoticons template paste help ',
              'responsivefilemanager code'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
              'bullist numlist outdent indent | link image | print preview media fullpage | ' +
              'forecolor backcolor emoticons |help',
               image_advtab: false ,
  
   external_filemanager_path:"filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "filemanager/plugin.min.js"}
 });
 </script> 
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
              <li class="active"><a href="php_add_ict.php"><span>ICT</span></a></li>
              <li class="active"><a href="php_add_garage.php"><span>General Garage</span></a></li>
              <li class="active"><a href="php_add_special_school.php"><span>Special School</span></a></li>
             
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
       <!--adding header photo to the system -->
        <!-- finishing the addition-->
        <div><font size="6" color="blue-black" >Add Documents To Your Website</font></div><p></p>
         <table style=" border:4px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
        <form class="form-horizontal" name="Form1"   method="POST" enctype="multipart/form-data"> 
        <tr>
        <td><font size="4">Bid Introduction with Full discription </font></td><td><textarea  name="Project_introduction" id="Project_introduction" ></textarea></td>
        </tr>
              <td colspan="2">
        <input type="submit" name="adddocument"  value="ADD DOCUMENT" id ="Project_introduction"  class="btn btn-success"   />
        <input type="reset" value="Cancel" class="btn btn-success"  />
        <?php
    include("conf.php");
    if (isset($_POST['adddocument'])){
  $Name=$_POST['Project_introduction'];
 
mysql_query("insert into documents(Name,PostTime) values('$Name',now())")or die(mysql_error());
echo '<div class="alert alert-dismissable alert-success">';
    echo '<strong>'."Successfully Added!".'</strong>';
	echo'</div>';
  
}

  ?>   
    </td>
            
     </form> 
            </table>
        <div class="article">
          <font color="black" size="3">
            <!-- View The Whole Project  -->
            
<!--View The full project End -->
</font>
          <div class="clr"></div>
		   <ul class="sb_menu">
        
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
		 
        <div></div>
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
