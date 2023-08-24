<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
              <li class="active"><a href=" "><span><font size="3"> <?php
	$user='root';
  $pass='';
  $db="kda";
  $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
			  $resulti = "select count(*) from memeberships  ";
        $result = $conn->query($resulti);
			  $row=mysqli_fetch_array($result);
        $total =$row[0];
        echo"<table style=' border:8px solid green' cellpadding='15px' cellspacing='10px' border='0' >";
        
        if($total>0)
     
        {
          echo"<tr>";
			  echo"<td>"."<a href='php_view_members.php'  >"." Total Registerd Members = " . $total."</td>";
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
			?></font></span></a></li>
              <li class="active"><a href=" "><span><font size="3"> <?php
		$user='root';
    $pass='';
    $db="kda";
    $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
			  $resulti = "select count(*) from memeberships where Type='Membershiped' ";
        $result = $conn->query($resulti);
			  $row=mysqli_fetch_array($result);
        $total =$row[0];
        echo"<table style=' border:8px solid green' cellpadding='15px' cellspacing='10px' border='0' >";
        
        if($total>0)
     
        {
          echo"<tr>";
			  echo"<td>"."<a href='php_view_members.php'  >"." Total Approved Members = " ."<font size=5>". $total."</font>"."</td>";
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
			?></font></span></a></li>
              <li class="active"><a href=""><span><font size="3"> <?php
			$user='root';
			$pass='';
			$db="kda";
			$conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
			  $resulti = "select count(*) from memeberships where Type='Disapproved' ";
        $result = $conn->query($resulti);
			  $row=mysqli_fetch_array($result);
        $total =$row[0];
        echo"<table style=' border:8px solid green' cellpadding='15px' cellspacing='10px' border='0' >";
        
        if($total>0)
     
        {
          echo"<tr>";
			  echo"<td>"."<a href='php_view_members.php'  >"." Total disapproved Members = " ."<font size=5>". $total."</font>"."</td>";
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
			?></font></span></a></li>
              <li class="active"><a href=""><span><font size="3"> <?php
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
			 echo"<td>"."<a href='php_view_members.php'  >"." New Members = " ."<font size=5>". $total."</font>"."</td>";
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
			?></font></span></a></li>


<li class="active"><a href=""><span><font size="3"> <?php
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
			// echo"<td>"."<a href='php_view_members.php'  >"." New Members = " ."<font size=5>". $total."</font>"."</td>";
        echo"</tr>";
        }
        else
        if($total<=0){
          echo"<tr>";
        //  echo"<td>"." No new registered Member" . "</td>";
          echo"</tr>";
        echo"</table>";
        }
       
			  mysqli_close($conn);
			?></font></span></a></li>
			<li class="active"><a href=""><span><font size="3"> <?php
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
			// echo"<td>"."<a href='php_view_members.php'  >"." New Members = " ."<font size=5>". $total."</font>"."</td>";
        echo"</tr>";
        }
        else
        if($total<=0){
          echo"<tr>";
         // echo"<td>"." No new registered Member" . "</td>";
          echo"</tr>";
        echo"</table>";
        }
       
			  mysqli_close($conn);
			?></font></span></a></li>
			<li class="active">  <?php include("general5.php"); ?></li>

			</ul>
		</nav>