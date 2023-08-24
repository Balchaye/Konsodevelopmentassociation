
<?php

include("modal_style.php");
?>
<?php 
include("conf.php");
?>
<?php
include("conf.php");
session_start();
if(!isset($_SESSION['log']['Username']['KDA']))
{

header("location: php_home_out.php");
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
       <ul >
	   <?php include("general1.php"); ?>
	   <li class="active"><a href="home.php"><span><font size="3">Back</font></span></a></li>
		<li><font color="white" size="4">Profile Page of </font></li>   
           <li class="active"><?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo '<table>';
				echo '<tr>';
				echo '<td>';
				echo '</td>';
				echo '<td>';
				//echo '<a href="php_view_profile_of_coadmin.php" >';
				echo'<font color="white" style="italic" size="4">';
		  // echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=37 alt='Unable to View' src='" .$row['prof_pic'] ."' >"; 
		  echo $row['FirstName'] . " " . $row['FatherName'];
		    echo'</font>';
			echo '</td>';
				echo '</tr>';
				echo '</table>';
	?><span></span></a></li>
           
		  
			
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
	
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
         <table  cellpadding='5px' cellspacing='0px'
             >
			 <tr><td></td><td><?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo '<table>';
				echo '<tr>';
				echo '<td>';
				echo '</td>';
				echo '<td>';
				//echo '<a href="php_view_profile_of_admin.php" >';
				echo'<font color="blue" style="italic" size="4">';
		 echo "<img style='margin-top:-80px; border-width: 0px; margin-left:-80px;'  width=180 height=180 alt='Unable to View' src='" .$row['profileimage'] ."' >";
		//  echo $row['FirstName'] . " " . $row['FatherName'];
		    echo'</font>';
			echo '</td>';
				echo '</tr>';
				echo '</table>';
	?></td></tr>
			  <tr><td>
          <font color="black" size="4">Full Name </font> </td><td> <?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo'<font color="blue" style="italic" size="4">';
		  // echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=37 alt='Unable to View' src='" .$row['prof_pic'] ."' >"; 
		  echo $row['FirstName'] . " " . $row['FatherName']. " ".$row['GFaName'];
		    echo'</font>';
			echo '</td>';
				//echo '</tr>';
				//echo '</table>';
	?>
           
     </td></tr>
	 <tr><td>
	  <font color="black" size="4">Phone Number </font> </td><td> <?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo'<font color="blue" style="italic" size="4">';
		   //echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=37 alt='Unable to View' src='" .$row['profileimage'] ."' >"; 
		  echo $row['PhoneNumber'];
		    echo'</font>';
			echo '</td>';
				//echo '</tr>';
				//echo '</table>';
	?></td></tr>
	<tr><td>
	  <font color="black" size="4">User Name </font> </td><td> <?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo'<font color="blue" style="italic" size="4">';
		  // echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=37 alt='Unable to View' src='" .$row['prof_pic'] ."' >"; 
		  echo $row['Username'];
		    echo'</font>';
			echo '</td>';
				//echo '</tr>';
				//echo '</table>';
	?></td></tr>
	<tr><td>
	  <font color="black" size="4">Sex </font> </td><td> <?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo'<font color="blue" style="italic" size="4">';
		  // echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=37 alt='Unable to View' src='" .$row['prof_pic'] ."' >"; 
		  echo $row['Sex'];
		    echo'</font>';
			echo '</td>';
				//echo '</tr>';
				//echo '</table>';
	?></td></tr>
	<tr><td>
	  <font color="black" size="4">Account Type </font> </td><td> <?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				//echo '<table>';
				//echo '<tr>';
				//echo '<td>';
				//echo '</td>';
				//echo '<td>';
				//echo '<a href="php_view_profile_of_coadmin.php" >';
				echo'<font color="blue" style="italic" size="4">';
		  // echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=37 alt='Unable to View' src='" .$row['prof_pic'] ."' >"; 
		//  echo $row['Responsibility'];
		    echo'</font>';
			echo '</td>';
				//echo '</tr>';
				//echo '</table>';
	?></td></tr>
	 </table>
	 
 
	<form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
    	<table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
			  <td><font color="blue-black" >Upload Your Profile Photo</font></td>
			  <tr>
  
				 <tr><td>Profile Picture</td>
				<td>					
				<input type="file" name="image1" id="input_width" class="btn btn" title="You must select the image you added before"  required>
				</td>
					</tr>
				
		

               
			     <tr>
				 <td></td>
            	<td colspan="2">
				<input type="submit" name="Registesdfvszdr" value="Add"  class="btn btn-success" id="input_width"  />
				<input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                
				<?php
    include("conf.php");
	
	if (isset($_POST['Registesdfvszdr'])){
	 $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                                $image_name = addslashes($_FILES['image1']['name']);
                                $image_size = getimagesize($_FILES['image1']['tmp_name']);
								$type = explode('.', $image_name);
								$type = end($type);
									if($type != 'jpg' && $type != 'png' && $type != 'gif' && $type != 'jpeg'){
											$message = "Invalid Photo Format Not Supported !";
										echo '<div class="alert alert-dismissable alert-danger">';
										  echo '<button type="button" class="close" data-dismiss="alert">X</button>';
										  echo '<strong>'.$message.'</strong>';
										echo '</div>';
										} else{
									
                                move_uploaded_file($_FILES["image1"]["tmp_name"], "identification_image/" . $_FILES["image1"]["name"]);
                                $profileimage = "identification_image/" . $_FILES["image1"]["name"];
  					 $idfeta = $_SESSION['log']['Username'];	
				$result=mysql_query("select *FROM adminstrator where Username = '$idfeta'");
	 $row=mysql_fetch_array($result);
	  if($row>0)
	  
			 {
				 $idfeta = $_SESSION['log']['Username'];
	$result="UPDATE adminstrator SET profileimage='$profileimage' where Username = '$idfeta'";
	
	if(!mysql_query($result,$con)){
die('couldnot update '.mysql_error());	
}
echo '<div class="alert alert-dismissable alert-success" align="center">';
		echo '<strong>'."Your Profile Photo Successfully Upload!".'</strong>';
		/// data inputted by the user 
		 $idfeta = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator where Username = '$idfeta' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				
			//	mysql_query("insert into input_date(Year,DateOfInput,TypeofInpute,NameorID,Username) values(NOW(),NOW(),'Add Photo For Identification','$_POST[ID]','$id')");
			////the end of input
			 }
 //else 
	    //echo '<font size="4" color="Blue">'. "The Identification Number of ". " ".$_POST['FirstName']. " ".$_POST['FatherName']. " ".$_POST['GFatherName']. " is not " .$_POST['ID']. " so may be you have entered un registered name or name that does not mach the id number " ;               
	}
	

	}
	?>
			</td>
            </tr>
		
			
          	</table>
		
        </form>
		<p> </p>
	   <?php
    include("conf.php");
	
	if (isset($_POST['php_change_admin_password'])){
	
	
	//$Password=$_POST['oldPassword'];
	
	
	$Password2=$_POST['confirmPassword'];
	
	$Password1=$_POST['newPassword'];
	if(strlen($Password1) <8) {
	 echo '<div class="alert alert-dismissable alert-e">';
		die( '<strong>'."Password Must Be Grater Than Or Equal To 8 Characters !".'</strong>');
		echo '</div>';
	} 
	 $idfeta = $_SESSION['log']['Username'];
	 $query = mysql_query("SELECT Password FROM adminstrator WHERE Username = '$idfeta' ") or die (mysql_error()); 
	 $countpass = mysql_fetch_array($query);
	if($_POST['newPassword']!= $_POST['confirmPassword'])
	{
	 echo '<div class="alert alert-dismissable alert-e">';
		die( '<strong>'."Password do not mach !".'</strong>');
		echo '</div>';	
	}
      else
		if($countpass['Password']!= md5($_POST['oldPassword']))
		{
		echo '<div class="alert alert-dismissable alert-e">';
		die( '<font size="4" color="red">'."old password is not correct/wrong old Password!".'</font>');
		echo '</div>';	
		}                          
	//$Password=$_POST['password'];
      $idfeta = $_SESSION['log']['Username'];
	   $Password=$_POST['newPassword'];
	  $Password=md5($Password);
		$result="UPDATE adminstrator SET Password = '$Password' where Username = '$idfeta'";
		echo'<p>'. '<font size="2" color="Blue-black">' ."Your Password is successfully changed".'</font>'.'</p>';
	if(!mysql_query($result,$con)){
die('couldnot update '.mysql_error());	
}
			
								
					
	}
	?>
         
		 <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
              border="0">
			  <form  method="POST" onsubmit="javascript:return validateTextBox();">
	<td><font align="center" color="black" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Change Password</u></font> </td>
		<tr>
        <td>Old Password</td><td><input type="Password"  name="oldPassword" placeholder=" " required></td>
        </tr>		
		<tr>
        <td>New Password</td><td><input type="Password"  name="newPassword" placeholder=" " required></td>
        </tr><tr>
        <td>Confirm Password</td><td><input type="Password"  name="confirmPassword" placeholder=" " required></td>
        </tr><tr>
        <td></td><td><input type="reset" value ="Clear" name="cancel">
		<input type="submit" value ="Change" name="php_change_admin_password" onclick="add()"></td>
		</form>
        </tr>
		</table>
		<p> </p>
		<?php
    include("conf.php");
	
	if (isset($_POST['php_change_admin_phone'])){
	
	$PhoneNumber=$_POST['PhoneNumber'];
	if(strlen($PhoneNumber) < 13 ) {
	 echo '<div class="alert alert-dismissable alert-e">';
		die( '<strong>'."Phone Number Must Be Greater Than 13 or equal to 13 Digits!".'</strong>');
		echo '</div>';
	}
	
	if(strlen($PhoneNumber) >13 ) {
	 echo '<div class="alert alert-dismissable alert-e">';
		die( '<strong>'."Phone Number Must Be Less Than 13 or equal to 13 Digits!".'</strong>');
		echo '</div>';
	}
	
	
	$sdvsdvdsp  = substr($PhoneNumber,0,4);
	if($sdvsdvdsp != '+251'){
	 echo '<div class="alert alert-dismissable alert-e">';
		die( '<strong>'."Phone  Nomber Format Is Note Correct It Must Start By +251".'</strong>');
		echo '</div>';
	}
	$idfeta = $_SESSION['log']['Username'];
	 $query = mysql_query("SELECT Password FROM adminstrator WHERE Username = '$idfeta' ") or die (mysql_error()); 
	 $countpass = mysql_fetch_array($query);
	 if($countpass['Password']!= $_POST['Password'])
		{
		echo '<div class="alert alert-dismissable alert-e">';
		die( '<font size="4" color="red">'."password is not correct/wrong Password!".'</font>');
		echo '</div>';	
		}
                                
	//$Password=$_POST['password'];
      $idfeta = $_SESSION['log']['Username'];
		$result="UPDATE adminstrator SET PhoneNumber = '$_POST[PhoneNumber]' where Username = '$idfeta'";
		echo'<p>'. '<font size="2" color="Blue-black">' ."Your Phone Number is successfully changed".'</font>'.'</p>';
	if(!mysql_query($result,$con)){
die('couldnot update '.mysql_error());	
}
			
								
					
	}
	?>
	<!--
         
		 <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
			  <form  method="POST" onsubmit="javascript:return validateTextBox();">
			  <td><font align="center" color="black" size="4"><u>Change Phone Number</u></font> </td>
		<tr>
        <td>Old Phone</td><td><?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
				$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM adminstrator WHERE Username = '$id' ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo'<font color="blue" style="italic" size="4">';
		  // echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=37 alt='Unable to View' src='" .$row['prof_pic'] ."' >"; 
		  echo $row['PhoneNumber'];
		    echo'</font>';
			echo '</td>';
				//echo '</tr>';
				//echo '</table>';
	?></td>
        </tr>		
		<tr>
        <td>New Phone</td><td><input type="text"  name="PhoneNumber" placeholder="+251" required></td>
        </tr>
		<tr>
        <td>Your Password</td><td><input type="Password"  name="Password" placeholder="******************" required></td>
        </tr>
		<tr>
        <td></td><td><input type="reset" value ="Clear" name="cancel">
		<input type="submit" value ="Change" name="php_change_admin_phone" onclick="add()"></td>
        </tr>
		</table></form>
-->
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
</html>
