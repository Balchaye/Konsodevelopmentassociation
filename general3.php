  <div class="fbg">
      <div class="fbg_resize">
        <div class="col c1">
          <h2><span>Image</span> Gallery</h2>
        <marquee> <a href="#"><img src="images/1.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/2.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/3.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/4.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/5.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/6.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/7.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/8.jpg" width="75" height="75" alt="" class="gal" />
      </a> <a href="#">
      <img src="images/9.jpg" width="75" height="75" alt="" class="gal" /></a> 
      <a href="#"><img src="images/11.jpg" width="75" height="75" alt="" class="gal" /></marquee>
      <marquee></a> <a href="#"><img src="images/12.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <img src="images/13.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/14.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/15.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/16.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/17.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/18.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/19.jpg" width="75" height="75" alt="" class="gal" />
      <img src="images/21.jpg" width="75" height="75" alt="" class="gal" /></a> 
      <a href="#"><img src="images/2.jpg" width="75" height="75" alt="" class="gal" /></a> </marquee></div>
        <div class="col c2">
          <h2><span>Services</span> Overview</h2>
          <p>The system will provide the following things to the user of the system.</p>
          <ul class="fbg_ul">
            <li>1-Calculate All Information Regarding Population</li>
        <li>2-Calculate All Information Regarding Income of Population</li>
        <li>3-Calculate All Information Regarding Domestic Animals</li>
          </ul> 
        </div>
        <div class="col c3">
        <h3><span>Agency</span> Contact Information</h3>
          <span>Phone:</span> <?php
    $user='root';
    $pass='';
    $db="kda";
    $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      $resulti = "select PhoneNumber FROM agency_information";
      $result = $conn->query($resulti);
    $row=mysqli_fetch_array($result);
      //if($row>0)
      
        // {
          

    
    
    echo $row['PhoneNumber'];
    
    ///////////////////////HomeNumber
  // }
    mysqli_close($conn);
      ?>	<br />
    <span>Fax:</span><?php
     $user='root';
		 $pass='';
		 $db="kda";
		 $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      $resulti = "select Fax FROM agency_information";
      $result = $conn->query($resulti);
    $row=mysqli_fetch_array($result);
      //if($row>0)
      
        // {
          

    
    
    echo $row['Fax'];
    
    ///////////////////////HomeNumber
  // }
    mysqli_close($con);
      ?><br />
        <span>B.O Pox:</span><?php
     $user='root';
		 $pass='';
		 $db="kda";
		 $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      $resulti = "select PoBox FROM agency_information";
      $result = $conn->query($resulti);
    $row=mysqli_fetch_array($result);
      //if($row>0)
      
        // {
          

    
    
    echo $row['PoBox'];
    
    ///////////////////////HomeNumber
  // }
    mysqli_close($conn);
      ?><br />
        

        <span>E-mail:</span> <a href="<?php
     $user='root';
		 $pass='';
		 $db="kda";
		 $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      $resulti = "select Email FROM agency_information";
      $result = $conn->query($resulti);
    $row=mysqli_fetch_array($result);
      //if($row>0)
      
        // {
          

    
    
    echo $row['Email'];
    
    ///////////////////////HomeNumber
  // }
    mysqli_close($conn);
      ?>"><?php
      $user='root';
      $pass='';
      $db="kda";
      $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      $resulti = "select Email FROM agency_information";
      $result = $conn->query($resulti);
    $row=mysqli_fetch_array($result);
      //if($row>0)
      
        // {
          

    
    
    echo $row['Email'];
    
    ///////////////////////HomeNumber
  // }
    mysqli_close($conn);
      ?></a></br>
    <span>Website:</span> <a href="<?php
     $user='root';
		 $pass='';
		 $db="kda";
		 $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      $resulti = "select Website FROM agency_information";
      $result = $conn->query($resulti);
    $row=mysqli_fetch_array($result);
      //if($row>0)
      
        // {
          

    
    
    echo $row['Website'];
    
    ///////////////////////HomeNumber
  // }
    mysqli_close($conn);
      ?>"><?php
      $user='root';
      $pass='';
      $db="kda";
      $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
      $resulti = "select Website FROM agency_information";
      $result = $conn->query($resulti);
    $row=mysqli_fetch_array($result);
      //if($row>0)
      
        // {
          

    
    
    echo $row['Website'];
    
    ///////////////////////HomeNumber
  // }
    mysqli_close($conn);
      ?></a></br>
      </p>
        </div>
        <div class="clr"></div>
      </div>
    </div>