
<?php
include('includes/config.php');
?>
<?php

include("modal_style.php");
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
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<!-- -->
<link rel="stylesheet" href="new/css/font-awesome.min.css">
	<link rel="stylesheet" href="new/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="new/css/bootstrap-social.css">
	<link rel="stylesheet" href="new/css/bootstrap-select.css">
	<link rel="stylesheet" href="new/css/fileinput.min.css">
	<link rel="stylesheet" href="new/css/awesome-bootstrap-checkbox.css">
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
              <li class="active"><a href="home.php"><span><font size="3">KDA HOME</font></span></a></li>
              <li class="active"><a href="php_insert_project.php"><span><font size="3">Add project</font></span></a></li>
              <li class="active"><a href="php_add_bids.php"><span><font size="3">Add Bids</font></span></a></li>
              <li class="active"><a href="php_add_vacancis.php"><span><font size="3">Add vacancies</font></span></a></li>
              <li class="active"><a href="php_add_documens.php"><span><font size="3">Add documents</font></span></a></li>
              <li class="active"><a href="php_add_message.php"><span><font size="3">Add Message</font></span></a></li>
              <li><?php include("php_togther.php"); ?></li>
              <li><a href="logout.php"><span> <img src="images/shutdown.png" width="20" height="20" title="Lockout" />
              </span></a></li>
        
              
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
        
        <font size="4.5"><strong>List of ongoing Projects under Konso Development Association(KDA) </strong></font> <p></p>
         <font align="center" size="4.5"><strong >	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
            በኮንሶ ልማት ማህበር (ኮልማ) ስር ያሉ ቀጣይ ፕሮጀክቶች ዝርዝር</strong></font> 
          <div class="clr"></div>
       <font color="black" size="3">
            <!-- View The Whole Project  -->
       
    <?php
       $user='root';
       $pass='';
       $db="kda";
       $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
        if (isset($_GET['del'])){
        $resulti = "select * from projecttable where ProjectCode = '$_GET[del]'";
        $result = $conn->query($resulti);
        while($row=mysqli_fetch_array($result))
        {
        echo"<table style=' border:4px solid silver' cellpadding='15px' cellspacing='10px'
                      align='center' border='0' >";
                      $date1=new DateTime($row['PostTime']);
                      $date2=new DateTime("now");
                      $interval = $date1->diff($date2);
                     
        echo"<tr>";
        echo"<td>"."<strong>"."<font size=4>"."Project Title:-"."<u>" .$row['Title']."</u>"."</font>"."</strong>"."</td>";
        echo "</tr>"; 
        echo"<tr>";
        echo "<td>". "<img style='margin-top:0px; border-width: 0px; margin-left:0px;'  alt='Unable to View' src='" .$row['ProjectImage'] ."' >"."</td>";
        echo"</tr>";
        echo "<tr>"; 
        echo"<td>".$row['Project_introduction']."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>"."<strong>".  "Posted Before ".$interval->y . " years, " . $interval->m." months, ".$interval->d.
        " days ".$interval->h. " hour " .$interval->i." Minute " .$interval->s. " Second ". "</strong>"."</td>";
        echo "</tr>"; 
        echo"</table>";
        echo"<p>";
          echo"</p>";
        }
      }
        mysqli_close($conn);
    ?> 
<!--
    -->



    <!---
    -->
<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="1%">
									<thead>
										<tr>
										<th>Sno.</th>
											<th>Project Title</th>
											<th>Project Image</th>
											<th>Project Posted On</th>
                      <th>Action on Project</th>
										 
										</tr>
									</thead>
									<tfoot>
										<tr>
                   <th>Sno.</th>
                      <th>Project Title</th>
											<th>Project Image</th>
											<th>Project Posted On</th>
                      <th>Action on Project</th>
										</tr>
									</tfoot>
									<tbody>
              <?php	
              //$aid=$_SESSION['Username'];
              $user='root';
            $pass='';
            $db="kda";
            $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
              $reti="select * from projecttable ORDER BY PostTime DESC";
              $stmt= $conn->prepare($reti) ;
              //$stmt->bind_param('i',$aid);
              $stmt->execute() ;
              $res=$stmt->get_result();
              $cnt=1;
              while($row=$res->fetch_object())
                  {
                    ?>
                  <?php  $date1=new DateTime($row->PostTime);
                        $date2=new DateTime("now");
                        $interval = $date2->diff($date1);?>
              <tr><td><?php echo $cnt;;?></td>
              <td><?php echo $row->Title;?></td>
              <td><?php echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=60 height=45 alt='Unable to View' src='" .$row->ProjectImage."' >";?></td>
              <td><?php echo "<strong>".  "Posted Before ".$interval->y . " years, "
              . $interval->m." months, ".$interval->d. " days ".$interval->h. " hour "
                .$interval->i." Minute " .$interval->s. " Second ". "</strong>"."/".$row->PostTime;?></td>
                <td><a href="home.php?del=<?php echo $row->ProjectCode;?>" title="View About The Project" onclick=";">
                <i class="fa fa-close"></i>View</a><p></p>
                <a href="php_edit_project.php?Code=<?php echo $row->ProjectCode;?>" title="Delete Record" onclick="return confirm("Do you want to delete");">
                <i class="fa fa-close"></i>Delete</a>
              <p></p><a href="php_edit_project.php?id=<?php echo $row->ProjectCode;?>"><i class="fa fa-edit"></i>Edit</a></td>
              </td>
                                  </tr>
                                <?php
              $cnt=$cnt+1;
                                } ?>
                                    
										
									</tbody>
								</table>


                <!-- --->
                <font size="4.5"><strong>List of Bids Posted By Konso Development Association(KDA) </strong></font> <p></p>
         <font align="center" size="4.5"><strong >	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
            በኮንሶ ልማት ማህበር (ኮልማ) የተለቀቁ ጨረታዎች</strong></font> 
          <div class="clr"></div>
       <font color="black" size="8">
         <!-- -->
      <table border="1px solid silver" cellpadding="15px" cellspacing="10px"
          align="center">
         <?php
      $user='root';
      $pass='';
      $db="kda";
      $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
        if (isset($_GET['bid'])){
        $resulti = "select * from bids where Bid_id = '$_GET[bid]'";
        $result = $conn->query($resulti);
        while($row=mysqli_fetch_array($result))
        {

          echo "<tr>"; 
              echo"<td>"."Bid Tile:- ".$row['BidTitle']."</td>";
              echo"</tr>";
          $date1=new DateTime($row['EndBid']);
          $date3=new DateTime($row['PostTime']);
          $date2=new DateTime("now");
          $interval = $date2->diff($date3);
          /*else if for day and month separation

          */
          if( $date1>= $date2){
            $interval1 = $date2->diff($date1);
            if($interval1->m>0)
            {
            echo "</tr>"; 
            echo"<td>"."<font color='Green' size='4'>".$interval1->m." month and " .$interval1->d. " days left for expiration/to pass ". "</font>"."</td>";
            echo "</tr>"; 
            }
            else{
            if($interval1->m<=0)
            echo "</tr>"; 
            echo"<td>"."<font color='Green' size='4'>" .$interval1->d. " days left for expiration/to pass ". "</font>"."</td>";
            echo "</tr>"; 
            }
          }
                  else {
                    
                    $interval1 = $date2->diff($date1);
                    if($interval1->m>0)
                    {
                  echo"<tr>";
                  echo"<td>"."<font color='red' size='4'>"." It was Passed Before ".$interval1->m." month and " .$interval1->d. " days ". "</font>"."</td>";
                  echo"</tr>";  
                    }
                    else{
                    if($interval1->m<=0)
                    echo "</tr>"; 
                    echo"<td>"."<font color='red' size='4'>"."It was Passed Before " .$interval1->d. " days  ". "</font>"."</td>";
                    echo "</tr>";  
                    }
                  } 
                   /*else if for day and month separation
                            
                            */   
              echo "<tr>"; 
              echo"<td>".$row['NameBids']."</td>";
              echo"</tr>";
              echo"<tr>";
              echo"<td>"."<strong>".  "Posted Before ".$interval->y . " years, " . $interval->m." months, ".$interval->d.
              " days ".$interval->h. " hour " .$interval->i." Minute " .$interval->s. " Second ". "</strong>"."</td>";
              
              echo"<p>";
                echo"</p>";
              }
            }
        mysqli_close($conn);
    ?> 
    </table>
         <!-- -->
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="1%">
									<thead>
										<tr>
										<th>Sno.</th>
											<th>Bid Title</th>
											<th>Posted  On</th>
											<th>Bid ends On</th>
                      <th>Action on Bids</th>
										 
										</tr>
									</thead>
									<tfoot>
										<tr>
                   <th>Sno.</th>
                      <th>Bid Title</th>
											<th>Posted  On</th>
											<th>Bid ends On</th>
                      <th>Action on Bids</th
										</tr>
									</tfoot>
									<tbody>
              <?php	
              //$aid=$_SESSION['Username'];
              $user='root';
            $pass='';
            $db="kda";
            $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
              $ret="select * from bids ORDER BY PostTime DESC";
              $stmt= $conn->prepare($ret) ;
              //$stmt->bind_param('i',$aid);
              $stmt->execute() ;
              $res=$stmt->get_result();
              $cnt=1;
              while($row=$res->fetch_object())
                  {
                    ?>
                  <?php  $date1=new DateTime($row->PostTime);
                        $date2=new DateTime("now");
                        $interval = $date2->diff($date1);?>
              <tr><td><?php echo $cnt;;?></td>
              <td><?php echo $row->BidTitle;?></td>
              <td><?php echo $row->PostTime;?></td>
              <td><?php echo $row->EndBid;?></td>
                <td><a href="home.php?bid=<?php echo $row->Bid_id;?>" title="View About The Project" onclick=";">
                <i class="fa fa-close"></i>View</a><p></p>
                <a href="php_edit_project.php?biddel=<?php echo $row->Bid_id;?>" title="Delete Record" onclick="return confirm("Do you want to delete");">
                <i class="fa fa-close"></i>Delete</a>
              <p></p><a href="php_edit_bid.php?id=<?php echo $row->Bid_id;?>"><i class="fa fa-edit"></i>Edit</a></td>
              </td>
                                  </tr>
                                <?php
              $cnt=$cnt+1;
                                } ?>
                                    
										
									</tbody>
								</table>
                <!-- --->

                <script src="new/js/jquery.min.js"></script>
	<script src="new/js/bootstrap-select.min.js"></script>
	<script src="new/js/bootstrap.min.js"></script>
	<script src="new/js/jquery.dataTables.min.js"></script>
	<script src="new/js/dataTables.bootstrap.min.js"></script>
	<script src="new/js/Chart.min.js"></script>
	<script src="new/js/fileinput.js"></script>
	<script src="new/js/chartData.js"></script>
	<script src="new/js/main.js"></script>
<!--End View of Full Prroject  -->
            <div class="article">
              <!-- <h2><span>SOCIAL AND POLETICAL DATA ANALYSIS</span></h2> -->
                    <!-- finishing the addition header photo-->
                <form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
                  <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
                          border="0">
                    <td><font size="4" color="blue-black" >Upload Header Photo</font></td>
                    <tr>
              
                    <tr><td><font size="4">Select Picture</font></td>
                    <td>          
                    <input type="file" name="image1" id="input_width" class="btn btn" title="You must select the image you added before"  required>
                    </td>
                      </tr>
                    
                

                          
                      <tr>
                    <td></td>
                          <td colspan="2">
                    <input type="submit" name="Headerimages" value="Add"  class="btn btn-success" id="input_width"  />
                    <input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                           
                            <?php
                include("conf.php");
              if (isset($_POST['Headerimages'])){
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
                                            $prof_pic = "identification_image/" . $_FILES["image1"]["name"];
                            
                      $insert = "insert into headerimage (Date_im,heade_image) values(NOW(),'$prof_pic')or die(mysql_error())";

                
           // echo '<div class="alert alert-dismissable alert-success">';
                echo '<strong>'."Successfully Added!".'</strong>';
                echo'<p>';
                
              }
              }
              ?> 
                      </td>  </tr>

                       <!--- --> <tr></td>
                  <?php
                        
                        if(isset($_GET['delheadim']))
                        {
                        $Imageids=intval($_GET['delheadim']);
                        $adn="delete from headerimage where Imageids=?";
                        $stmt= $mysqli->prepare($adn);
                        $stmt->bind_param('i',$Imageids);
                        $stmt->execute();
                        $stmt->close();	   
                        echo "Data Deleted";
                        }
                        ?></td></tr>
                  <!-- -->
                  <p></p>
                      <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="1%">
                  <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Header Image </font>
                  <thead>
										<tr>
										<th>Sno.</th>
											<th>Image</th>
                      <th>Image Posted On</th>
                      <th>Action on Bids</th>
										 
										</tr>
									</thead>
									<tfoot>
										<tr>
                   <th>Sno.</th>
                      <th>Image</th>
                      <th>Image Posted On</th>
                      <th>Action on Bids</th>
										</tr>
									</tfoot>
									<tbody>
              <?php	
              //$aid=$_SESSION['Username'];
              $user='root';
            $pass='';
            $db="kda";
            $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
              $ret="select * from headerimage ORDER BY Date_im DESC";
              $stmt= $conn->prepare($ret) ;
              //$stmt->bind_param('i',$aid);
              $stmt->execute() ;
              $res=$stmt->get_result();
              $cnt=1;
              while($row=$res->fetch_object())
                  {
                    ?>
              <tr><td><?php echo $cnt;;?></td>
            	<td><?php echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=80 height=80 alt='Unable to View' src='" .$row->heade_image."' >";?></td>
              <td><?php echo $row->Date_im;?></td>
                <td>
                <a href="home.php?delheadim=<?php echo $row->Imageids;?>" title="Delete Record" onclick="return confirm("Do you want to delete");">
                <i class="fa fa-close"></i>Delete</a></td>
              </td>
                                  </tr>
                                <?php
              $cnt=$cnt+1;
                                } ?>
                                    
										
									</tbody>
								</table>
                  
                        </table>
                
                    </form>
                    <!--ending the additoin of header image  -->
                    <!--start of adding footer image -->
                    <!--adding header photo to the system -->
                    
            
                    <!-- finishing the addition footer Photo-->
                    <form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
                  <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
                          border="0">
                    <td><font size="4" color="blue-black" >Upload Footer Photo</font></td>
                    <tr>
              
                    <tr><td><font size="4">Select Picture</font></td>
                    <td>          
                    <input type="file" name="image1" id="input_width" class="btn btn" title="You must select the image you added before"  required>
                    </td>
                      </tr>
                    
                

                          
                      <tr>
                    <td></td>
                          <td colspan="2">
                    <input type="submit" name="Footerimages" value="Add"  class="btn btn-success" id="input_width"  />
                    <input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                    <?php
                include("conf.php");
              if (isset($_POST['Footerimages'])){
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
                                            $prof_pic = "identification_image/" . $_FILES["image1"]["name"];
                            
                      $insret = "insert into footerimage (Date_im,heade_image) values(NOW(),'$prof_pic')or die(mysql_error())";

                  echo '<strong>'."Successfully Added!".'</strong>';
                echo'<p>';
                
              }
              }
              ?>          
                  
                  
                  </td>
                        </tr>
                
                  <!--- --> <tr></td>
                  <?php
                        
                        if(isset($_GET['delfooterim']))
                        {
                        $Imageid=intval($_GET['delfooterim']);
                        $adn="delete from footerimage where Imageid=?";
                        $stmt= $mysqli->prepare($adn);
                        $stmt->bind_param('i',$Imageid);
                        $stmt->execute();
                        $stmt->close();	   
                        echo "Data Deleted";
                        }
                        ?></td></tr>
                  <!-- -->
                  <p></p>
                  <p></p>
                  <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="1%">
                  <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Footer Image </font>
                  <thead>
										<tr>
										<th>Sno.</th>
											<th>Image</th>
                      <th>Image Posted On</th>
                      <th>Action on Bids</th>
										 
										</tr>
									</thead>
									<tfoot>
										<tr>
                   <th>Sno.</th>
                      <th>Image</th>
                      <th>Image Posted On</th>
                      <th>Action on Bids</th>
										</tr>
									</tfoot>
									<tbody>
              <?php	
              //$aid=$_SESSION['Username'];
              $user='root';
            $pass='';
            $db="kda";
            $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
              $ret="select * from footerimage ORDER BY Date_im DESC";
              $stmt= $conn->prepare($ret) ;
              //$stmt->bind_param('i',$aid);
              $stmt->execute() ;
              $res=$stmt->get_result();
              $cnt=1;
              while($row=$res->fetch_object())
                  {
                    ?>
              <tr><td><?php echo $cnt;;?></td>
            	<td><?php echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=80 height=80 alt='Unable to View' src='" .$row->heade_image."' >";?></td>
              <td><?php echo $row->Date_im;?></td>
              <td>
                <a href="home.php?delfooterim=<?php echo $row->Imageid;?>" title="Delete Record" onclick="return confirm("Do you want to delete");">
                <i class="fa fa-close"></i>Delete</a></td>
              </td>
                                  </tr>
                                <?php
              $cnt=$cnt+1;
                                } ?>
                                    
										
									</tbody>
								</table>



                  <!-- -->

                        </table>
                
                    </form>


                    <!--ending the additoin of footer image  -->
                  <!-- adding video to the database-->
              
             <div class="clr"></div>
          
         
<meta charset="utf-8">
                    </div>
              </div>
            </div>
            <div class="sidebar">
              <div class="gadget">
              <?php
			$user='root';
      $pass='';
      $db="kda";
      $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
			  $resulti = "select count(*) from memeberships where Type='New' ";
        $result = $conn->query($resulti);
			  $row=mysqli_fetch_array($result);
        $total =$row[0];
        echo"<table style=' border:8px solid green' cellpadding='15px' cellspacing='10px' border='0' >";
        
        if($total>0)
     
        {
          echo"<tr>";
			  echo"<td>"."<a href='php_view_members.php'  >"." New Members " ."<font size=5>". $total."</font>"."</td>";
        echo"</tr>";
        }
        else
        if($total<=0){
          echo"<tr>";
          echo"<td>"." No new registered Member" . "</td>";
          echo"</tr>";
        echo"</table>";
        }
       
			  mysqli_close($conn);
			?><p></p>
              <table style=" border:10px solid blue" cellpadding="3px" cellspacing="0px" border="10">
              <td><a target="_self" href="php_view_members.php"><span><marquee><font size="4" color="green" >View and Manage KDA Members</font></marquee></span></a></td>
                </table>
          <?php include("general4.php"); ?>
              </div>
            </div>
            <div class="clr"></div>
          </div>
          
  </div>
  <?php include("general2.php"); ?>
</html>
