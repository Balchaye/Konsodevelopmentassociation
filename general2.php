
  <div class="menu_nav">
<?php

include("modal_style.php");
?>
<?php 
include("conf.php");
?>
<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
      <marquee> <a href="#">
	   <?php  
				//$id = $_SESSION['log']['Username'];
				$user='root';
				$pass='';
				$db="kda";
				$conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
				$queryi = "SELECT * FROM headerimage ";
				// ) or die (mysql_error()); 
				$query = $conn->query($queryi);
				$row = mysqli_fetch_array($query);
				echo '<table>';
				$resulti = "SELECT heade_image FROM headerimage";
                 $result = $conn->query($resulti);
					  while($row=mysqli_fetch_array($result))
   {
		  echo'<font charset=utf8>';
          echo"<img style='margin-top:3px; border-width: 10px; margin-left:3px;'  width=75 height=75 alt='Unable to View' src='" .$row['heade_image'] ."' >";
           echo'</font>';
		  
   }
				echo '</table>';
	?>
	</marquee></a> 
	  <marquee></a> <a href="#">
	  <?php  
				//$id = $_SESSION['log']['Username'];
				$user='root';
				$pass='';
				$db="kda";
				$conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
				$queryi = "SELECT * FROM footerimage "; 
				$query = $conn->query($queryi);
				$row = mysqli_fetch_array($query);
				echo '<table>';
				$resulti = "SELECT heade_image FROM footerimage";
                    $result = $conn->query($resulti);
					  while($row=mysqli_fetch_array($result))
   {
		  echo'<font charset=utf8>';
          echo"<img style='margin-top:3px; border-width: 0px; margin-left:3px;'  width=75 height=75 alt='Unable to View' src='" .$row['heade_image'] ."' >";
           echo'</font>';
		  
   }
				echo '</table>';
	?>
	  </a> 
	   <a href="#"></a> </marquee></div>
      <div class="col c2">
        <h2>Links</h2>
        <ul class="fbg_ul">
		<font size='4.5' color="white"><u>
          <li class="active"><a href="home.php"><span><font color="white">KDA HOME</font></span></a></li>
		  <li class="active"><a href="php_project.php"><span><font color="white">Projects</font></span></a></li>
		  <li class="active"><a href="php_achieve_before.php"><span><font color="white">Pervious Achievments</font></span></a></li>
		  <li class="active"><a href="php_login_admin.php"><span><font color="white">Login</font></span></a></li>
		  <!--

                     -->
		  <li class="active"><a href="home.php"><span><font color="white">Message from Manager</font></span></a></li>
		  <li class="active"><a href="php_project.php"><span><font color="white">Projects</font></span></a></li>
		  <li class="active"><a href="php_achieve_before.php"><span><font color="white">Pervious Achievments</font></span></a></li>
		  <li class="active"><a href="php_login_admin.php"><span><font color="white">Login</font></span></a></li>

		 <!-- 

		          -->
        </u></font>
		</ul>
      </div>
      <div class="col c3">
      <h2><span>OUR</span> Contact</h2>
        <p class="contact_info"> <font size="3" color="black">
		   <span>Address:</span> Xonso Zone, Karat<br />
	       <span>Gmail:</span>BalchaNamakoW'cBombe<br />
		   <span>Fax:</span>Balcha Bekele Lawca<br />
		   <span>Phone:</span>+2514-6773-0039<br />
		   <span>Fax Number:</span>+2514-6773-0039<br />
		   <span>PO.Box:</span> +2519-2611-2098<br /></font>
		</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div class="menu_nav">
    <div class="footer">
          <div class="footer_resize">
                <p class="lf">&copy; Copyright <a href="#">BalchaNamakoW'cBombe</a>.</p>
                <p class="rf">Design by  <img src="images/hella.png" width="45" height="45" alt="" class="gal" /> <a href="https://hellasc.weebly.com//">HELLA SOFTWARE COMPANY</a></p>
               <!-- <div style="clear:both;"></div>
              </div>-->
         </div>
    </div>
</div>