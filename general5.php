    
    <?php
    //var_dump(mail('+251938709459', 'KDA', 'You have Membershiped to KDA'));
    ?>

    <?php
        include("conf.php");
        $user='root';
        $pass='';
        $db="kda";
        $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      if (isset($_POST['ID_Number1'])){
        $resulti = "select * from memeberships where ID_Number = '$_POST[ID_Number1]'";
        $result = $conn->query($resulti);
            $row=mysqli_fetch_array($result);
        if($row>0)
        
          {
                    
          $resulti="UPDATE memeberships SET Type='Membershiped' WHERE ID_Number = '$row[ID_Number]'";
          $result = $conn->query($resulti);

        
      if(!$conn->query($result)){
    die('couldnot update ');  
    }
    echo '<div class="alert alert-dismissable alert-success">';
        echo '<strong>'."Become Membership of KDA!".'</strong>';
        echo'<p>';
        echo'</div>';
        
      }
      
    }


      ?> 
    <!--  
    Disallowance 
    -->
    <?php
        include("conf.php");
       $user='root';
			$pass='';
			$db="kda";
			$conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      if (isset($_POST['ID_Number2'])){
        $resulti = "select * from memeberships where ID_Number = '$_POST[ID_Number2]'";
        $result = $conn->query($resulti);
            $row=mysqli_fetch_array($result);
        if($row>0)
        
          {
                    
          $result="UPDATE memeberships SET Type='Disapproved' WHERE ID_Number = '$row[ID_Number]'";

        
      if(!mysqli_query($conn,$result)){
    die('couldnot update .mysqli_error()');  
    }
    echo '<div class="alert alert-dismissable alert-success">';
        echo '<strong>'."Disapproved form Membership of KDA!".'</strong>';
        echo'<p>';
        echo'</div>';
        
      }
      
    }
      ?> 



      <?php
        include("conf.php");
        $user='root';
			$pass='';
			$db="kda";
			$conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      if (isset($_POST['ID_Number'])){
    
            $resulti = "select * from memeberships where ID_Number = '$_POST[ID_Number]'";
            $result = $conn->query($resulti);
            $row=mysqli_fetch_array($result);
        $result1i = "select * from memebershipamha where ID_Number = '$_POST[ID_Number]'";
            $result1 = $conn->query($reslut1i);
            $row1=mysqli_fetch_array($result1);
            echo"<table style=' border:4px solid silver' cellpadding='15px' cellspacing='10px'
                  align='center' border='0' >";
    echo"<tr>";
    echo"<td>"."<strong>"."<font size=4 color='black'>"."KDA memebership ID :-"."<u>" .$row['ID_Number']."</u>"."</font>"."</strong>"."</td>";
    echo "</tr>"; 
    echo"<tr>";
    echo "<td>". "<img style='margin-top:0px; width='80' height='80' border-width: 0px; margin-left:0px;'  alt='Unable to View' src='" .$row['Photo'] ."' >"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black' >"."<strong>"."Name :-"."</strong>" .$row['Name']." ".$row['FatherName']." ".$row['GFName']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black'>"."<strong>"."ስም :-"."</strong>" .$row1['Name']." ".$row1['FatherName']." ".$row1['GFName']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black'>"."<strong>"."Address :-"."</strong>" .$row['Zone']." ".$row['Woreda']." ".$row['Kebele']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black'>"."<strong>"."ቀበለ :-"."</strong>" .$row1['Zone']." ".$row1['Woreda']." ".$row1['Kebele']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black'>"."<strong>"."Current Place of Work:-"."</strong>".$row['Current_work']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black' >"."<strong>"."አሁን የምሰሩበት :-"."</strong>".$row1['Current_work']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black' >"."<strong>"."Profession/ሙያ :-"."</strong>".$row['Profession']."/".$row1['Profession']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=3 color='black'>"."<strong>"."Age/ዕድሜ:-"."</strong>".$row['Age']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black'>"."<strong>"."Phone Number/ስልክ ቁጥር:-"."</strong>".$row['Phone']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=5 color='black'>"."<strong>"."Date Registered/የተመዘገቡበት ቀን:-"."</strong>".$row['RegisterDate']."</font>"."</td>";
    echo"</tr>";
    echo"<td>"."<form class='form-horizontal' method='POST' enctype='multipart/form-data'>"."<font size=5 color='black'>"."Approve as Membership:-"." "."</font>"."<input type='submit' name='ID_Number1' value='$row[ID_Number]''/>"."<font size=3.5>"."<strong>"."</strong>" ."</font>"."</form>"."</td>";
    echo"</tr>";
    echo"</tr>";
    echo"<td>"."<form class='form-horizontal' method='POST' enctype='multipart/form-data'>"."<font size=5 color='black'>"."Disapprove from Membership:-"." "."</font>"."<input type='submit' name='ID_Number2' value='$row[ID_Number]''/>"."<font size=3.5>"."<strong>"."</strong>" ."</font>"."</form>"."</td>";
    echo"</tr>";
    echo"</table>";
    echo"<p>";
      echo"</p>";
            mysqli_close($conn);
    }
      ?> 
    <?php
   $user='root';
   $pass='';
   $db="kda";
   $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
    $resulti = "select *FROM  memeberships  where Type='New' ORDER BY RegisterDate DESC ";
    $result1i = "select *FROM  memebershipamha ";
    $result1 = $conn->query($result1i);
    while($row=mysqli_fetch_array($result))
      
    {
      
    echo"<table style=' border:4px solid silver' cellpadding='15px' cellspacing='10px'
                  align='center' border='0' >";

    echo"<tr>";
    echo"<td>"."<strong>"."<font size=4 color='black'>"."KDA ID:-"."<u>" .$row['ID_Number']."</u>"."</font>"."</strong>"."</td>";
    echo "</tr>"; 
    echo"<tr>";
    echo "<td>". "<img style='margin-top:0px; width='80' height='80' margin-left:0px;'  alt='Unable to View' src='" .$row['Photo'] ."' >"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=4 color='black'>"."<strong>"."Name :-"."</strong>" .$row['Name']." ".$row['FatherName']." ".$row['GFName']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=4 color='black'>"."<strong>"."Profession :-"."</strong>" .$row['Profession']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<font size=4 color='black'>"."<strong>"."Registered on :-"."</strong>" .$row['RegisterDate']."</font>"."</td>";
    echo"</tr>";
    echo "<tr>"; 
    echo"<td>"."<form class='form-horizontal' method='POST' enctype='multipart/form-data'>"."<font size=4 color='black'>"."KDA ID:-"."</font>"." "."<input type='submit' name='ID_Number' value='$row[ID_Number]''/>"."<strong>"."</strong>" ."</font>"."</form>"."</td>";
    echo"</tr>";
    echo"</table>";
    echo"<p>";
      echo"</p>";
    }
    mysqli_close($conn);
    ?>