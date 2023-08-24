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
          <div><font size="6" color="blue-black" >Add Documents To Your Website</font></div><p></p>
          <table style=" border:4px solid silver" cellpadding="5px" cellspacing="0px"
                border="0">
          <form class="form-horizontal" name="Form1"   method="POST" enctype="multipart/form-data"> 
          <tr>
          <td><font size="4">Title of The Document</font> </td><td><textarea  name="Document_Title"  placeholder="What is the Title of the Document" required></textarea></td>
          </tr>
          <tr>
          <td><font size="4">Document Introduction with Full discription </font></td><td><textarea  name="Project_introduction" id="Project_introduction" ></textarea></td>
          </tr>
                <td colspan="2">
          <input type="submit" name="adddocument"  value="ADD DOCUMENT" id ="Project_introduction"  class="btn btn-success"   />
          <input type="reset" value="Cancel" class="btn btn-success"  />
          <?php
      include("conf.php");
      if (isset($_POST['adddocument'])){
    $Document_Title=$_POST['Document_Title'];
    $Name=$_POST['Project_introduction'];
  
  mysql_query("insert into documents(Document_Title,Name,PostTime) values('$Document_Title','$Name',now())")or die(mysql_error());
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
              <p></p><font size="4.5"><strong>List of Documents Uploaded By Konso Development Association(KDA) </strong></font> <p></p>
          <font align="center" size="4.5"><strong >	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
              በኮንሶ ልማት ማህበር (ኮልማ) የተለቀቁ ሰነዶች</strong></font> 
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
          if (isset($_GET['docuid'])){
          $resulti = "select * from documents where document_id = '$_GET[docuid]'";
          $result = $conn->query($resulti);
          while($row=mysqli_fetch_array($result))
          {

            echo "<tr>"; 
                echo"<td>"."Document Tile:- ".$row['Document_Title']."</td>";
                echo"</tr>";
          
                  
                    /*else if for day and month separation
                              
                              */   
                echo "<tr>"; 
                echo"<td>".$row['Name']."</td>";
                echo"</tr>";
                echo "<tr>"; 
                echo"<td>"."Uploaded on " .$row['PostTime']."</td>";
                echo"</tr>";
                echo"<p>";
                  echo"</p>";
                }
              }
          mysqli_close($conn);
      ?> 
      </table>
      <p></p>
          <!-- -->
        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="1%">
                    <thead>
                      <tr>
                      <th>Sno.</th>
                        <th>Document Title</th>
                        <th>Uploaded On</th>
                        <th>Action on Bids</th>
                      
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                    <th>Sno.</th>
                        <th>Document Title</th>
                        <th>Uploaded On</th>
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
                $ret="select * from documents ORDER BY PostTime DESC";
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
                <td><?php echo $row->Document_Title;?></td>
                <td><?php echo $row->PostTime;?></td>
                  <td><a href="php_add_documens.php?docuid=<?php echo $row->document_id;?>" title="View About The Project" onclick=";">
                  <i class="fa fa-close"></i>View</a><p></p>
                  <a href="php_edit_documens.php?deldocu=<?php echo $row->document_id;?>" title="Delete Record" onclick="return confirm("Do you want to delete");">
                  <i class="fa fa-close"></i>Delete</a>
                <p></p><a href="php_edit_document.php?id=<?php echo $row->document_id;?>"><i class="fa fa-edit"></i>Edit</a></td>
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
