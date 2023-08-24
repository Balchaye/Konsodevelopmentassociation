
                  <?php
                  //session_start();
                  include('includes/config.php');
                  //include('includes/checklogin.php');
                  //check_login();
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
                          $con=mysql_connect("localhost","root","vertrigo");
                          if(!$con)
                          {
                          die('coud not conect:'.mysql_error());
                          }
                          mysql_select_db("kda",$con);
                          if (isset($_GET['del'])){
                          $result=mysql_query("select * from projecttable where ProjectCode = '$_GET[del]'");
                          while($row=mysql_fetch_array($result))
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
                          mysql_close($con);
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
                  $ret="select * from projecttable ORDER BY PostTime DESC";
                  $stmt= $mysqli->prepare($ret) ;
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
                                  <div class="clr"></div>
                            <!--




                            -->
                            
                            <div class="clr"></div>
                                          <form method="POST" class="form-horizontal" >


                                          <?php
                                         include('includes/config.php');
                                        if($_POST['submit'])
                                        {
                                        $NameBids=$_POST['NameBids'];
                                        $EndBid=$_POST['EndBid'];
                                       // $coursefn=$_POST['cnf'];
                                        $Bid_id=$_GET['id'];
                                        $query="update bids set NameBids ='$NameBids',EndBid='$EndBid' where Bid_id='$Bid_id'";
                                        $stmt = $mysqli->prepare($query);
                                        $rc=$stmt->bind_param('bi',$NameBids,$EndBid,$Bid_id);
                                        $stmt->execute();
                                        echo"<script>alert('Bid has been Updated successfully');</script>";
                                        }

                                        ?>


                                          <?php	
                                          $id=$_GET['id'];
                                          $ret="select * from  bids where Bid_id='$id'";
                                          $stmt= $mysqli->prepare($ret) ;
                                          // $stmt->bind_param($id);
                                          $stmt->execute() ;//ok
                                          $res=$stmt->get_result();
                                          //$cnt=1;
                                          while($row=$res->fetch_object())
                                          {
                                          ?>

                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">BID ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                          <input type="text"  name="Bid_id"  value="<?php echo $row->Bid_id;?>" disabled class="form-control" > 
                                          <font color="red">Bid Identification Can not be Edited!!</font> 
                                          <p></p>
                                          <label class="col-sm-2 control-label">Bid Title&nbsp;&nbsp;&nbsp;</label>
                                          <input type="text"  name="BidTitle"  value="<?php echo $row->BidTitle;?>" disabled class="form-control" > 
                                          <font color="red">Bid Title Can not be Edited!!</font>
                                      </div>
                                          <p></p>
                                          <label class="col-sm-2 control-label">End Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                          <div class="col-sm-8">
                                          <input type="date" name="EndBid" value="<?php  echo $row->EndBid;?>"    class="form-control"> </div>
                                          </div>
                                          <div class="form-group">
                                          <label class="col-sm-2 control-label">Bid Body</label>
                                          <div class="col-sm-8">
                                          <textarea type="text" class="form-control" name="NameBids" id="Project_introduction" value="<?php echo $row->NameBids;?></textarea>
                                          <span class="help-block m-b-none"></span>
                                          </div>
                                          </div>
                                          <div class="form-group">



                                          <?php } ?>


                                          <input class="btn btn-primary" type="submit" name="submit" value="Update Bids">



                                          </form>


                                        


                          <!--




                            -->
                              
                  <!-- 
                      
                  ---><p></p>
                  <font size="4.5"><strong>List of Bids Posted By Konso Development Association(KDA) </strong></font> <p></p>
                          <font align="center" size="4.5"><strong >	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
                              በኮንሶ ልማት ማህበር (ኮልማ) የተለቀቁ ጨረታዎች</strong></font> 
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
                                $ret="select * from bids ORDER BY PostTime DESC";
                                $stmt= $mysqli->prepare($ret) ;
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

                          
                  <meta charset="utf-8">
                                      </div>
                                </div>
                              </div>
                              <div class="sidebar">
                                <div class="gadget">
                                <?php
                        $con = mysql_connect("localhost","root","vertrigo");
                        if (!$con)
                              {
                              die('Could not connect: ' . mysql_error());
                              }
                    
                          mysql_select_db("kda",$con);
                          $result=mysql_query("select count(*) from memeberships where Type='New' ");
                          $row=mysql_fetch_array($result);
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
                        
                          mysql_close($con);
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
