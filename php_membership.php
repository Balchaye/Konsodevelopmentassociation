
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
      <script type="text/javascript" src="js/cargz.js"></script>
      <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
      <script type="text/javascript" src="js/script1.js" ></script>
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
                <div class="clr"></div>

                <?php
          include("conf.php");
          $user='root';
          $pass='';
          $db="kda";
          $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
        if (isset($_POST['Registesdfvszdr'])){
        $start='KDA2021001';
        $end='KDA9999999';

        $result1i="select MAX(ID_Number) from memeberships ";
        $result1 = $conn->query($result1i);
        $row1=mysqli_fetch_array($result1);
        $ID_Number =$row1[0];
        //echo"The Minmum Income Of The Country = " . $HomeNumber;
        $ID_Number++;
        $Name=$_POST['Name'];         
        $FatherName=$_POST['FatherName'];
        $GFName=$_POST['GFName'];
        
          if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $Name) ) 
      { 
          die("First Name Must Not Be Number!");
      } 

      if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $FatherName) ) 
      { 
          die("Last Name Must Not Be Number");
      }

      if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $GFName) ) 
      { 
          die("Last Name Must Not Be Number");
      } 

      if (preg_match('/[0-9]/', $Name))
      {
          die("First Name Must Not Be Number!");
      }

      if (preg_match('/[0-9]/', $FatherName))
      {
        die("Last Name Must Not Be Number");
      }

      if (preg_match('/[0-9]/', $GFName))
      {
          die("First Name Must Not Be Number!");
      }
      $Woreda=$_POST['Woreda'];
        $Kebele=$_POST['Kebele'];
        $Sex=$_POST['Sex'];
        $Age=$_POST['Age'];
        //amharic name
      $Name1=$_POST['AName'];         
        $FatherName1=$_POST['AFatherName'];
        $GFName1=$_POST['AGFName'];
        
          if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $Name1) ) 
      { 
          die("First Name Must Not Be Number!");
      } 

      if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $FatherName1) ) 
      { 
          die("Last Name Must Not Be Number");
      }

      if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $GFName1) ) 
      { 
          die("Last Name Must Not Be Number");
      } 

      if (preg_match('/[0-9]/', $Name1))
      {
          die("First Name Must Not Be Number!");
      }

      if (preg_match('/[0-9]/', $FatherName1))
      {
        die("Last Name Must Not Be Number");
      }

      if (preg_match('/[0-9]/', $GFName1))
      {
          die("First Name Must Not Be Number!");
      }
        $Woreda1=$_POST['AWoreda'];
        $Kebele1=$_POST['AKebele'];
        
        $Phone=$_POST['Phone'];
        
        if(strlen($Phone) < 13 ) {
        echo '<div class="alert alert-dismissable alert-e">';
          die( '<strong>'."Phone Number Must Be 13 Digits!".'</strong>');
          echo '</div>';
        }
        if(strlen($Phone) > 13 ) {
        echo '<div class="alert alert-dismissable alert-e">';
          die( '<strong>'."Phone Number Must Be 13 Digits!".'</strong>');
          echo '</div>';
        }
        
        
        $sdvsdvds  = substr($Phone,0,4);
        if($sdvsdvds != '+251'){
        echo '<div class="alert alert-dismissable alert-e">';
          die( '<strong>'."Phone  Nomber Format Is Note Correct It Must Start By +251".'</strong>');
          echo '</div>';
        }
        
        $Gmail=$_POST['Gmail']; 
       /* if(strlen($Password) <=8) {
        echo '<div class="alert alert-dismissable alert-e">';
          die( '<strong>'."Password Must Be Grater Than Or Equal To 8 Characters !".'</strong>');
          echo '</div>';
        } 
        $Password=md5($Password);
        */
        $Profession=$_POST['Profession'];
        
          if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $Profession) ) 
      { 
          die("Profession Name Must Not Be Number!");
      } 

      if (preg_match('/[0-9]/', $Profession))
      {
          die("Profession Name Must Not Be Number!");
      }
      $Profession1=$_POST['AProfession'];
        
          if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $Profession1) ) 
      { 
          die("Profession Name Must Not Be Number!");
      } 

      if (preg_match('/[0-9]/', $Profession1))
      {
          die("Profession Name Must Not Be Number!");
      }
      //checking similar input// person 
      $chek_user= "select * from memeberships where Name = '$Name' && FatherName = '$FatherName' && GFName = '$GFName' ";
          $run = mysqli_query($conn, $chek_user);
            if(mysqli_num_rows($run) >0) {
            echo '<div class="alert alert-dismissable alert-success">';
                echo'<font color="Red" size="4">';
              die( " " . "There is some other person with name ".'</font>'.'<font color="blue" size="5">'.$Name." ".$FatherName." ".$GFName. '</font>'.'<font color="red" size="4">'." so return back and add grand grand father name in grand fathers box!<br>");
              echo'</font>';
            echo '</div>';
            }
        //checking similar phone number 
            $chek_phone = "select * from memeberships where Phone = '$Phone'";
          $run = mysqli_query($conn, $chek_phone);
            if(mysqli_num_rows($run) >0) {
            echo '<div class="alert alert-dismissable alert-success">';
                echo'<font color="Red" size="4">';
            die ( " " . "There is some other person with phone Number ".'</font>'.'<font color="blue" size="5">'.$Phone." ".'</font>'.'<font color="red" size="4">'." so Change The Phone Number!<br>");
              echo'</font>';
          echo '</div>'; 
            }
            //checking similar phone number 
            $chek_email = "select * from memeberships where Gmail = '$Gmail'";
            $run = mysqli_query($conn, $chek_email);
              if(mysqli_num_rows($run) >0) {
              echo '<div class="alert alert-dismissable alert-success">';
                  echo'<font color="Red" size="4">';
                die ( " " . "There is some other person with Gmail Address ".'</font>'.'<font color="blue" size="5">'.$Gmail." ".'</font>'.'<font color="red" size="4">'." so Change The Email Address!<br>");
                echo'</font>';
            echo '</div>'; 
              }
        
        $Current_work=$_POST['Current_work'];
        $Current_work1=$_POST['ACurrent_work'];
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
                                      $Photo = "identification_image/" . $_FILES["image1"]["name"];
            
                      
          $sql = "insert into memeberships (ID_Number,Name,FatherName,GFName,Region,Zone,Woreda,Kebele,Age,Sex,Profession,Current_work ,Phone,Gmail,Photo,RegisterDate,Type)
      values('$ID_Number','$Name','$FatherName','$GFName','SNNPR','Konso','$Woreda','$Kebele','$Age','$Sex','$Profession','$Current_work','$Phone','$Gmail','$Photo',Now(),'New')";
        mysqli_query($conn, $sql);

      echo '<div class="alert alert-dismissable alert-success">';
          echo '<strong>'."Successfully Added!".'</strong>';
          echo'<p>';
          //echo '<font color="blue" size="4">'."Your KDA identification Number = ".'<u>'.$ID_Number."</u> ". "And Password is = ".'<u>'.$_POST['Password'].'</u>'." ".'</font>';
          echo'</p>';
          echo '</div>';
      $sql= "insert into memebershipamha (ID_Number,Name,FatherName,GFName,Region,Zone,Woreda,Kebele,Profession,Current_work)
      values('$ID_Number','$Name1','$FatherName1','$GFName1','ደቡብ','ኮንሶ','$Woreda1','$Kebele1','$Profession1','$Current_work1')";
      mysqli_query($conn, $sql);
        }
        }
        ?>
        <font size="4">
      <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
                    align="center" border="0">
        <td><strong><font size="4" color="blue-black"><u>Register for KDA</u> </font></strong></td><td><strong><font size="4" color="blue-black"><u>Membership</u> </font></strong></td>
        <form class="form-horizontal" name="Form1"  method="POST" enctype="multipart/form-data"> 
            <tr></tr>
                      <tr><script>
              tinymce.init({
          selector: '#myTextarea',
          width: 600,
          height: 300,
          plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
          ],
          toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
          menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
          },
          menubar: 'favs file edit view insert format tools table help',
          content_css: 'css/content.css'
        });
              </script>
              <td>FirstName</td><td ><input type="text"  name="Name" placeholder="Enter Name"  required></td>
              </tr>
              <tr>
              <td>ስም</td><td><input type="text" name="AName" placeholder="ስም" onkeyup="transcrire('Form1','AName')" required></td>
              </tr>
          <tr>
              <td>Father Name</td><td><input type="text" name="FatherName" placeholder="Enter Father name" required></td>
              </tr>
          <tr>
              <td>የአባት ስም</td><td><input type="text"  name="AFatherName" placeholder="የአባት ስም" onkeyup="transcrire('Form1','AFatherName')" required></td>
              </tr>
          <tr>
              <td>Grandfather Name</td><td><input type="text" name="GFName" placeholder="Enter GFather " required></td>
              </tr>
          <tr>
              <td>የአያት ስም</td><td><input type="text" name="AGFName" placeholder="የአያት ስም " onkeyup="transcrire('Form1','AGFName')" required></td>
              </tr>
              <tr>
              <td>Woreda</td><td><input type="text" name="Woreda" placeholder="Enter Wereda" required></td>
              </tr>
              <tr>
              <td>ወረዳ</td><td><input type="text" name="AWoreda" placeholder="ወረዳ " onkeyup="transcrire('Form1','AWoreda')" required></td>
              </tr>
          <tr>
              <td>Kebele</td><td><input type="text" name="Kebele" placeholder="Enter Kebele" required></td>
              </tr>
          <tr>
              <td>ቀበሌ</td><td><input type="text" name="AKebele" placeholder="ቀበሌ " onkeyup="transcrire('Form1','AKebele')" required></td>
              </tr>
              <tr>
              <td>Profession</td><td><input type="text" name="Profession" placeholder="Enter Your Work" required></td>
              </tr>
          <tr>
              <td>ሙያ</td><td><input type="text" name="AProfession" placeholder="ሙያ " onkeyup="transcrire('Form1','AProfession')" required></td>
              </tr>
              <tr>
              <td>Current Please of Work</td><td><input type="text" name="Current_work" placeholder="Enter Your Work" required></td>
              </tr>
              <tr>
              <td>አሁን የሚሰሩበት ቦታ</td><td><input type="text" name="ACurrent_work" placeholder="አሁን የሚሰሩበት ቦታ ስም " onkeyup="transcrire('Form1','ACurrent_work')" required></td>
              </tr>
          <tr>
              <td>Age</td><td><select name="Age" title="Select The Occupation" required>
        <option></option>
        <option name="age">18</option>
        <option name="age">19</option>
        <option name="age">20</option>
        <option name="age">21</option>
        <option name="age">22</option>
        <option name="age">23</option>
        <option name="age">24</option>
        <option name="age">25</option>
        <option name="age">26</option>
        <option name="age">27</option>
        <option name="age">28</option>
        <option name="age">29</option>
        <option name="age">30</option>
        <option name="age">31</option>
        <option name="age">32</option>
        <option name="age">33</option>
        <option name="age">34</option>
        <option name="age">35</option>
        <option name="age">36</option>
        <option name="age">37</option>
        <option name="age">38</option>
        <option name="age">39</option>
        <option name="age">40</option>
        <option name="age">41</option>
        <option name="age">42</option>
        <option name="age">43</option>
        <option name="age">44</option>
        <option name="age">45</option>
        <option name="age">46</option>
        <option name="age">47</option>
        <option name="age">48</option>
        <option name="age">49</option>
        <option name="age">50</option>
        <option name="age">51</option>
        <option name="age">52</option>
        <option name="age">53</option>
        <option name="age">54</option>
        <option name="age">55</option>
        <option name="age">56</option>
        <option name="age">57</option>
        <option name="age">58</option>
        <option name="age">59</option>
        <option name="age">60</option>
        <option name="age">61</option>
        <option name="age">62</option>
        <option name="age">63</option>
        <option name="age">64</option>
        <option name="age">65</option>
        <option name="age">66</option>
        <option name="age">67</option>
        <option name="age">68</option>
        <option name="age">69</option>
        <option name="age">70</option>
        <option name="age">71</option>
        <option name="age">72</option>
        <option name="age">73</option>
        <option name="age">74</option>
        <option name="age">75</option>
        <option name="age">76</option>
        <option name="age">77</option>
        <option name="age">78</option>
        <option name="age">79</option>
        <option name="age">80</option>
      </select></td>
              </tr>
          <tr>
        <td>Sex</td><td>Male<input type="radio"  value="male" name="Sex" required>
        Female<input type="radio"  value="female" name="Sex" required></td>
        </tr>
          <tr>
              <td>Phone Number</td><td><input type="text" name="Phone" placeholder="+251" required></td>
              </tr>
              <tr>
              <td>Email Address</td><td><input type="text"  name="Gmail" placeholder="example@site.com" required></td>
              </tr>
              <tr><td>Profile Picture</td>
              <td>          
              <input type="file" name="image1"  class="btn btn" title="Please Choose Phpto To Upload"  required>
              </td>
                </tr>      
                <tr>
              <!-- id="input_width"-->
                    <td colspan="2">
              <input type="submit" name="Registesdfvszdr" value="Register For KDA Membership" class="btn btn-success"   />
              <input type="reset" value="Cancel" class="btn btn-success"  />
                      </td>
                  </tr> 
                  </table></font>
          </form>
          <div class="article">
              <!-- <h2><span>SOCIAL AND POLETICAL DATA ANALYSIS</span></h2> -->
                <div class="clr"></div>
                  </div>
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
       <!-- <div class="footer">
          <div class="footer_resize">
            <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
            <p class="rf">Design by  <img src="images/hella.png" width="45" height="45" alt="" class="gal" /> <a href="https://hellasc.weebly.com//">HELLA SOFTWARE COMPANY</a></p>
            <div style="clear:both;"></div>
          </div>
        </div>
      </div>-->
      </html>
