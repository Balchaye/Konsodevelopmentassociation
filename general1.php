  
<?php

include("modal_style.php");
?>
<?php 
include("conf.php");
?>
 <div align="center" > <a href="#">
	<img src="images/rut.png"  width="120" height="120" alt="" />
	<marquee width="780" direction="up" height="115px">
		<?php  
		 $user='root';
		 $pass='';
		 $db="kda";
		 $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
				//$id = $_SESSION['log']['Username'];
				$query1 = "SELECT * FROM headerimage ";
				// ) or die (mysql_error()); 
				$query = $conn->query($query1);
				$row = mysqli_fetch_array($query);
				echo '<table>';
				echo '<tr>';
				echo '<td>';
				echo '</td>';
				echo '<td>';
				$resulti = "SELECT heade_image FROM headerimage";
                 $result = $conn->query($resulti);
					  while($row=mysqli_fetch_array($result))
   {
          echo"<tr>";
		  echo'<font charset=utf8>';
          echo"<td>" ."<img style='margin-top:-80px; border-width: 0px; margin-left:-80px;'  width=880 height=480 alt='Unable to View' src='" .$row['heade_image'] ."' >"."</td>";
           echo'</font>';
		  
   }
			echo '</td>';
				echo '</tr>';
				echo '</table>';
	?>
	</marquee>
	<img src="images/rut.png" width="120" height="120" alt="" /> 
	</a> <a href="#"> <strong><marquee direction="left" height="40px"><font size="5" color="Black">Konso Development Association(KDA)- <font color="blue">For the Better Life of Konso People!!</font> የኮንሶ ልማት ማህበር(ኮልማ)-<font color="blue">ለኮንሶ ሕዝብ የተሻለ ሕይወት!!</font></marquee></font></strong></a>
      </div>