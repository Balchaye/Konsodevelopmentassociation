            <?php
            //session_start();
            include('includes/config.php');
            //include('includes/checklogin.php');
            //check_login();
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
                    <font size="4.5"><strong>List of ongoing Projects under Konso Development Association(KDA) </strong></font> <p></p>
                    <font align="center" size="4.5"><strong >	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
                        በኮንሶ ልማት ማህበር (ኮልማ) ስር ያሉ ቀጣይ ፕሮጀክቶች ዝርዝር</strong></font> 
                      <div class="clr"></div>
                  <font color="black" size="3">
                        <!-- View The Whole Project  -->
                  
                <?php
                    // $con=mysqli_connect("localhost","root","vertrigo");
                    // if(!$con)
                    // {
                    // die('coud not conect:'.mysqli_error());
                    // }
                    // mysqli_select_db("kda",$con);
                    $user='root';
                    $pass='';
                    $db="kda";
                    $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                    if (isset($_GET['del'])){
                    $resulti="select * from projecttable where ProjectCode = '$_GET[del]'";
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
            <!--View The full project End -->
                  
            </font>
            <!--End View of Full Prroject  -->
                  <div class="article">
                    <!-- <h2><span>SOCIAL AND POLETICAL DATA ANALYSIS</span></h2> -->
                      <div class="clr"></div>
                      
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
            <p><?php echo $row->Title;?></p>
            <p><?php echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=60 height=45 alt='Unable to View' src='" .$row->ProjectImage."' >";?></td>
            <p><?php echo "<strong>".  "Posted Before ".$interval->y . " years, "
            . $interval->m." months, ".$interval->d. " days ".$interval->h. " hour "
              .$interval->i." Minute " .$interval->s. " Second ". "</strong>"."/".$row->PostTime;?></p>
              <p><a href="php_project.php?del=<?php echo $row->ProjectCode;?>" title="View About The Project" onclick=";">
              <i class="fa fa-close"></i></a>View More About The Project</p>
                              
                              <?php
            $cnt=$cnt+1;
                              } ?>  
                              <script src="new/js/jquery.min.js"></script>
              <script src="new/js/bootstrap-select.min.js"></script>
              <script src="new/js/bootstrap.min.js"></script>
              <script src="new/js/jquery.dataTables.min.js"></script>
              <script src="new/js/dataTables.bootstrap.min.js"></script>
              <script src="new/js/Chart.min.js"></script>
              <script src="new/js/fileinput.js"></script>
              <script src="new/js/chartData.js"></script>
              <script src="new/js/main.js"></script>
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
