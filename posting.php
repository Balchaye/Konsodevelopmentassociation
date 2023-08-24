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
<!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
<script type="text/javascript">
tinymce.init({
    selector: "#tha",
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
       <!--adding header photo to the system -->
 
        <!-- finishing the addition-->
        <div><font size="6" color="blue-black" >Add Project To Your Website</font></div><p></p>
         <table style=" border:4px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
        <form class="form-horizontal" name="Form1" action="posting.php"  method="POST" enctype="multipart/form-data"> 
      
        <tr>
        <td><font size="4">Project Code</font></td><td><input type="text" name="ProjectCode" placeholder="Enter Father name" required></td>
        </tr>
        <tr>
        <td><font size="4">Title of The Project</font> </td><td><input type="text" name="Title" placeholder="Enter Name" required></td>
        </tr>
    <tr>
        <td><font size="4">Code For Project Donors</font></td><td><input name="ProjectDonor" placeholder="Enter Donor Code"  required  ></textarea></td>
        </tr>
    
    
    <tr>
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
        <td><font size="4">Project Introduction with Full discription </font></td><td><input  name="Project_introduction" id="Project_introduction" ></td>
        </tr>
         <tr><td><font size="4">Select Picture</font></td>
        <td>          
        <input type="file" name="image1"  class="btn btn" title="You must select the image you added before"  required>
        </td>
      </tr>
              <td colspan="2">
        <input type="submit"  value="Add The Project" id ="Project_introduction"  class="btn btn-success"   />
        <input type="reset" value="Cancel" class="btn btn-success"  />
                </td>
            
     </form> 
	 <tr><td></td><td>
	  <?php
    include("conf.php");
  $ProjectCode=$_POST['ProjectCode']; 
  $Title=$_POST['Title'];
  $ProjectDonor=$_POST['ProjectDonor'];
  $Project_introduction=$_POST['Project_introduction'];
  $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                                $image_name = addslashes($_FILES['image1']['name']);
                                $image_size = getimagesize($_FILES['image1']['tmp_name']);
                $type = explode('.', $image_name);
                $type = end($type);
                  if($type != 'jpg' && $type != 'png' && $type !='PNG' && $type != 'gif' && $type != 'jpeg'){
                      $message = "Invalid Photo Format Not Supported !";
                    echo '<div class="alert alert-dismissable alert-danger">';
                      echo '<button type="button" class="close" data-dismiss="alert">X</button>';
                      echo '<strong>'.$message.'</strong>';
                    echo '</div>';
                    } else{
                  
                                move_uploaded_file($_FILES["image1"]["tmp_name"], "identification_image/" . $_FILES["image1"]["name"]);
                            $ProjectImage = "identification_image/" . $_FILES["image1"]["name"];
         mysql_query("insert into projecttable(ProjectCode,Title,ProjectDonor,Project_introduction,ProjectImage)
values('$ProjectCode','$Title','$ProjectDonor','$Project_introduction','$ProjectImage')")or die(mysql_error());
         mysql_query("insert into projectinforormation(ProjectCode)
values('$ProjectCode')")or die(mysql_error());

    
echo '<div class="alert alert-dismissable alert-success">';
    echo '<strong>'."Successfully Added!".'</strong>';
	echo'</div>';
  
  
}
  ?> 
	 
	 
	 </td></tr>
            </table>
    
       
        <!--ending the additoin of header image  -->
        <!--start of adding footer image -->
        <!--adding header photo to the system -->
        <?php
    include("conf.php");
  if (isset($_POST['UpAddprojectphoto'])){
  $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                                $image_name = addslashes($_FILES['image1']['name']);
                                $image_size = getimagesize($_FILES['image1']['tmp_name']);
                $type = explode('.', $image_name);
                $type = end($type);
                  if($type != 'jpg' && $type != 'png' && $type !='PNG' && $type != 'gif' && $type != 'jpeg'){
                      $message = "Invalid Photo Format Not Supported !";
                    echo '<div class="alert alert-dismissable alert-danger">';
                      echo '<button type="button" class="close" data-dismiss="alert">X</button>';
                      echo '<strong>'.$message.'</strong>';
                    echo '</div>';
                    } else{
                  
                                move_uploaded_file($_FILES["image1"]["tmp_name"], "identification_image/" . $_FILES["image1"]["name"]);
                                $ProjectImage = "identification_image/" . $_FILES["image1"]["name"];
       $ProjectCode=$_POST['ProjectCode'];
   $result=mysql_query("select *FROM projecttable where ProjectCode = '$_POST[ProjectCode]' ");
   $row=mysql_fetch_array($result);
    if($row>0)
    
       {
                
        $result="UPDATE projecttable SET ProjectImage='$ProjectImage' WHERE ProjectCode = '$_POST[ProjectCode]'";

    
  if(!mysql_query($result,$con)){
die('couldnot update '.mysql_error());  
}
echo '<div class="alert alert-dismissable alert-success">';
    echo '<strong>'."Successfully Added!".'</strong>';
    echo'<p>';
    echo'</div>';
    
  }
  }
}
  ?> 
 
        <!-- finishing the addition-->
        <form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
      <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
        <td><font size="4" color="blue-black" >Change Project Image/Photo</font></td>
        <tr>
  
         <tr><td><font size="4" color="blue-black">Select Picture</font></td>
        <td>          
        <input type="file" name="image1" id="input_width" class="btn btn" title="You must select the image you added before"  required>
        </td>
      </tr>
        <tr>
                
<td><font size="4" color="blue-black" >Select Project To Change Image/Photo</font></td>
 <td> 
       <?php
            $con=mysql_connect("localhost","root","vertrigo");
            if(!$con)
                {
            die('coud not conect:'.mysql_error());
               }
          mysql_select_db("kda",$con);
      echo'<select name="ProjectCode">';
          $result=mysql_query("select ProjectCode FROM projecttable ");
         while($row=mysql_fetch_array($result))
            {
          echo'<option>' .$row['ProjectCode']. '</option>';
           }
       echo'</select>';
           mysql_close($con);
           ?>
        </td>
          </tr>
        
    

               
           <tr>
         <td></td>
              <td colspan="2">
        <input type="submit" name="UpAddprojectphoto" value="Add"  class="btn btn-success" id="input_width"  />
        <input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                </td>
            </tr>
    
      
            </table>
    
        </form> 
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
		 
        <div><font size="5" color="blue-black" >Add Achievement of the Association to the Website</font></div><p></p>
         <table style=" border:4px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
        <form class="form-horizontal" name="Form1" action="posting_achiev.php"  method="POST" enctype="multipart/form-data"> 
      
        <tr>
        <td><font size="4">Project Code</font></td><td><input type="text" name="ProjectCode" placeholder="Enter Father name" required></td>
        </tr>
        <tr>
        <td><font size="4">Title of The Project</font> </td><td><input type="text" name="Title" placeholder="Enter Name" required></td>
        </tr>
    <tr>
        <td><font size="4">Code For Project Donors</font></td><td><input name="ProjectDonor" placeholder="Enter Donor Code"  required  ></textarea></td>
        </tr>
     <tr>
        <td><font size="4">Date Started</font></td><td><input type="date" name="Date_started" placeholder="Enter Donor Code"  required  ></textarea></td>
        </tr>
         <tr>
        <td><font size="4">Date Finished</font></td><td><input type="date" name="Date_finished" placeholder="Enter Donor Code"  required  ></textarea></td>
        </tr>
    
        <tr>
	
        <td><font size="4">Project Introduction with Full discription </font></td><td><textarea name="Project_introduction" id="tha"></textarea></td>
        </tr>
       
         <tr><td><font size="4">Select Picture</font></td>
        <td>          
        <input type="file" name="image1" id="input_width" class="btn btn" title="You must select the image you added before"  required>
        </td>
      </tr>
              <td colspan="2">
        <input type="submit"  value="Add The Project"  class="btn btn-success" id="input_width"  />
        <input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                </td>
            
     </form> 
            </table>
    
    
    


		   <p><a href="#"><strong></strong></a> <span></span> <span></span> <a href="#"><strong></strong></a></p>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
        <?php include("general5.php"); ?>
          <?php include("general4.php"); ?>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <?php include("general2.php"); ?>
</html>
