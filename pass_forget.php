
        <?php 
        include("conf.php");
        include("modal_style.php");
        ?>
        <?php
        session_start();
        if(isset($_SESSION['log']['Username'])){
        header("location: home1.php");
        }

        ?>
        <?
        use PHPMailer\PHPMailer\PHPMailer;
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
                <div class="article">
                <!-- <h2><span>ADMINSTRATOR</span></h2> -->
                  <div class="clr"></div>
              <ul class="sb_menu">
                


              <?php
            $user='root';
            $pass='';
            $db="kda";
            $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
            if (isset($_POST['Gmail']) &&(!empty($_POST['Gmail']))) 
              {	
                $Gmail = $_POST['Gmail'];
                      $Gmail=filter_var($Gmail,FILTER_SANITIZE_EMAIL);
                      $Gmail=filter_var($Gmail,FILTER_VALIDATE_EMAIL);

                      if(!$Gmail){
        //$error ="Invailed Gmail Address";
                      }else{
                        $check_users = "select * from adminstrator where Gmail='$Gmail' ";
                      // $check_user = $conn->query($check_users);
                        $run = mysqli_query($conn, $check_user);
                        $result = mysqli_num_rows($run);
                        if($row==""){
                            $error .="User Not Found";
                        }

                    }
                    if(!$error=""){
                        echo $error;
                    }else{
                        $output='';
                        $expFormat=mktime(date("H"),date("i"),date("s"),date("m"),date("d")+1,date("Y"));
                        $expDate=date("Y-m-d H:i:s",$expFormat);
                        $key=md5(time());
                        $addkey=substr(md5(uniqid(rand(), 1)), 3, 10);
                        $key=$key.$addkey;
                        //insert into temp table
                        $mysql_query= "insert into password_rest_temp (Gmail,key,expDate)values('$Gmail','$key','$expDate')";
                        mysqli_query($conn, $mysql_query);
                        $output.='<p>Please Click on the Following Link to Reset Your Password </p>';
                        //replace the site url
                        $output.='<p><a href="http://localhost/Konsodevelopmentassociation/php_forget_adminpassword.php?key='.$key.'$Gmail='.$Gmail.'&action=reset" target="_blanck"http://localhost/Konsodevelopmentassociation/php_forget_adminpassword.php?key='.$key.'&Gmail='.$Gmail.'&action=reset</a> </p>';
                            $body=$output;
                            $subject="KDA Password Recovery";
                            $email_to=$Gmail;
                            

                            //upload the PHPMailer
                            require("vendor/autoload.php");
                            $mail=new PHPMailer();
                            $mail->IsSMTP;
                            $mail->Host="Konso Development Association";
                            $mail->SMTPAuth=true;
                            $mail->Username="Konso Developmet Association Email Address";
                            $mail->Password="";
                            $mail->Port="80";
                            $mail->IsHTML(true);
                            $mail->From="Konso Development Association";
                            $mail->FromName="Konso Deevelopment Association";
                            $mail->$subject=$subject;
                            $mail->$body=$body;
                            $mail->AddAddress($email_to);



                    }
              
                
                  
              }
                ?>
                      <font size="5" color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forget Password</font>
                      <p></p>
              <table style=" border:2px solid black" cellpadding="3px" cellspacing="2px" border="0">
              <form method="POST" action="">
              <tr><td><font size="3" color="Black">Enter Your Gmail Address</font></td><td><input type="email" title="Enter Your Last Name" name="FatherName" id="kl" placeholder="Last Name" required></td></tr>
            <tr><td></td><td><input type="submit" name="Gmail"  value="Reset Password"  class="btn" id="kl"  ></td></tr>
              </form>
              </table>
              <?php
              
                  
            
            ?>
              </ul>
                      </div>
                    </div>
                    <div class="clr"></div>
                  </div>
          </div>
          <?php include("general2.php"); ?>
        </html>
