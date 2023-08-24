<?php
include("conf.php");
include("modal_style.php");
?>

	<?php  
	             $user='root';
				 $pass='';
				 $db="kda";
				 $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
				$ids = $_SESSION['log']['Username'];
				$result = "SELECT * FROM adminstrator WHERE Username = '$ids' " ;
				$query = $conn->query($result); 
				$row = mysqli_fetch_array($query);
			//	$query1 = mysql_query("SELECT * FROM coadmin WHERE Username = '$ids' ") or die (mysql_error()); 
			//	$row1 = mysql_fetch_array($query1);
				if($result=$row)
				{
				echo '<table>';
				echo '<tr>';
				echo '<td>';
				echo '</td>';
				echo '<td>';
				echo '<a href="php_view_profile_of_admin.php" >';
				echo'<font color="blue" style="italic" size="4">';
	    	 echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=45 height=32 alt='Unable to View' src='" .$row['profileimage'] ."' >";
		     echo $row['FirstName'] . " " . $row['FatherName'];
		     echo'</font>';
			 echo '</td>';
				echo '</tr>';
				echo '</table>';
				}	
	?>