      <?php
      include('includes/config.php');
      ?>
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
                    <li class="active"><a href="php_insert_project.php"><span>Add project</span></a></li>
                    <li class="active"><a href="php_add_bids.php"><span>Add Bids</span></a></li>
                    <li class="active"><a href="php_add_vacancis.php"><span>Add vacancies</span></a></li>
                    <li class="active"><a href="php_add_documens.php"><span>Add documents</span></a></li>
                    <li class="active"><a href="php_add_message.php"><span>Add Message</span></a></li>
                    <li class="active"><a href="php_institutions_info.php"><span>Institutions Information</span></a></li>


            
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
              <form class="form-horizontal" name="Form1"  method="POST" enctype="multipart/form-data"> 
            
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
              <input type="submit" name="insertproject" value="Add The Project" id ="Project_introduction"  class="btn btn-success"   />
              <input type="reset" value="Cancel" class="btn btn-success"  />
                      
              <?php
          include("conf.php");
          if (isset($_POST['insertproject'])){
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
              $inserts= "insert into projecttable(ProjectCode,Title,ProjectDonor,Project_introduction,ProjectImage)
      values('$ProjectCode','$Title','$ProjectDonor','$Project_introduction','$ProjectImage') or die(mysqli_error())";
              $insert1 = "insert into projectinforormation(ProjectCode)
      values('$ProjectCode') or die(mysqli_error())";

          
      echo '<div class="alert alert-dismissable alert-success">';
          echo '<strong>'."Successfully Added!".'</strong>';
        echo'</div>';
        
        
      }
          }
        ?> 
        
            </td>
                  
          </form> 
                  </table>
          
            
              <!--ending the additoin of header image  -->
              <!--start of adding footer image -->
              <!--adding header photo to the system -->
              <?php
          include("conf.php");
          $user='root';
          $pass='';
          $db="kda";
          $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
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
        $resulti = "select *FROM projecttable where ProjectCode = '$_POST[ProjectCode]' ";
        $result = $conn->query($resulti);
        $row=mysqli_fetch_array($result);
          if($row>0)
          
            {
                      
              $result="UPDATE projecttable SET ProjectImage='$ProjectImage' WHERE ProjectCode = '$_POST[ProjectCode]'";

          
        if(!mysqli_query($conn, $result)){
      die('couldnot update .mysqli_error()');  
      }
      echo '<div class="alert alert-dismissable alert-success">';
          echo '<strong>'."Successfully Added!".'</strong>';
          echo'<p>';
          echo'</div>';
          
        }
        }
      }
        ?> 
      <!--
            
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
                /*  $con=mysql_connect("localhost","root","vertrigo");
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
                mysql_close($con);*/
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
                -->
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
              <form class="form-horizontal" name="Form1"  method="POST" enctype="multipart/form-data"> 
            
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
              <input type="submit" name="insertachive"  value="Add The Project"  class="btn btn-success" id="input_width"  />
              <input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                      
              <?php
          include("conf.php");
          
          if (isset($_POST['insertachive'])){
        $ProjectCode=$_POST['ProjectCode'];
        $Title=$_POST['Title'];
        $ProjectDonor=$_POST['ProjectDonor'];
        $Date_started=$_POST['Date_started'];
        $Date_finished=$_POST['Date_finished'];
        $Project_introduction=$_POST['Project_introduction'];
        ////////////////////////////////////////////////////////
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
        /////////////////////////////////////////////////////////////	
        
              $mysql_query = "insert into achievementable(ProjectCode,Title,ProjectDonor,Date_started,Date_finished,Project_introduction,ProjectImage)
      values('$ProjectCode','$Title','$ProjectDonor','$Date_started','$Date_finished','$Project_introduction','$ProjectImage') or die(mysql_error())";

          
      echo '<div class="alert alert-dismissable alert-success">';
          echo '<strong>'."Successfully Added!".'</strong>';
        echo'</div>';
        
        }
      }
        ?> 
            </td>
                  
          </form> 
                  </table>
          <!-- 


      -->
      <p>
      <font size="4.5"><strong>List of ongoing Projects under Konso Development Association(KDA) </strong></font> <p></p>
              <font align="center" size="4.5"><strong >	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
                  በኮንሶ ልማት ማህበር (ኮልማ) ስር ያሉ ቀጣይ ፕሮጀክቶች ዝርዝር</strong></font> 
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
                    $ret="select * from projecttable ORDER BY PostTime DESC";
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
                    <td><?php echo $row->Title;?></td>
                    <td><?php echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=60 height=45 alt='Unable to View' src='" .$row->ProjectImage."' >";?></td>
                    <td><?php echo "<strong>".  "Posted Before ".$interval->y . " years, "
                    . $interval->m." months, ".$interval->d. " days ".$interval->h. " hour "
                      .$interval->i." Minute " .$interval->s. " Second ". "</strong>"."/".$row->PostTime;?></td>
                      <td><a href="php_insert_project.php?del=<?php echo $row->ProjectCode;?>" title="View About The Project" name="project_edit" onclick=";">
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
                                    </p>
      <!-- 

          -->
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
      </html>
