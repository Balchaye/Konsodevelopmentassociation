
              <meta charset="utf-8">
              <?php

              error_reporting(1);

              $user='root';
              $pass='';
              $db="kda";
              $conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

              extract($_POST);
              $target_dir = "uploadvideo/";

              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

              if($upd)
              {
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

              if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg" && $imageFileType!="mp3"){
                echo'<font size="4" color="red">';
                  echo "File Format Not Suppoted";
                  echo'</font>';
                
                      }
              else 
                
              {

              $video_path=$_FILES['fileToUpload']['name'];
              $YourName=$_POST['YourName'];

              $mysql_query = "insert into videoplayi(Namings,location,YourName) values('$video_path','$target_file','$YourName')";
              mysqli_query($conn, $mysql_query);

              move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
              echo'<font size="3" color="green">';
              echo "Your Video is Succeful Uploaded to the system ";
              echo '</font>';

              }

              }
              ?>
              <?php

              //display all uploaded video

              if($disp)

              {
              /*$fetchVideos = mysqli_query("SELECT * FROM videoplayi");
                  while($row = mysqli_fetch_assoc($fetchVideos)){
                    $fileToUpload = $row['location'];
                    // $name = $row['name'];
                    echo "<div style='float: left; margin-right: 5px;'>
                        <video src='".$fileToUpload."' controls width='320px' height='320px' ></video>     
                        <br>
                    </div>";
                  }*/

                //////////////////////////
               
              $queryi = "select * from videoplayi";
               $query = $conn->query($queryi);
                while($all_video=mysqli_fetch_array($query))

                {
              ?>
                <table style=" border:2px solid black" cellpadding="1px" cellspacing="2px" border="10" > <td>
                  <th width="530"><marquee Scrollamount="3"><font size="4"><?php 
              echo"$all_video[YourName]";?></font></marquee></th>
                <video loop poster="images/rut.png"  autometadata="none" style="border: 2px solid red" width="540" height="280" controls="controls" type="video/mp4" title="<?php echo  $all_video[YourName]; ?>">
                <source play="one" src="uploadvideo/<?php echo  $all_video['Namings']; ?>"  >
                </video> </td></table>
                
                <?php } } ?>
                <form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
                    <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
                            border="0">
                      <td><font size="4" color="blue-black" >Upload Video</font></td>
                      <tr>
                
                      <tr><td>Select The Video</td><td><input type="file" name="fileToUpload" required /></td></tr></tr>
                      <tr><td>Name of Video</td><td><input size="40" type="text" name="YourName" required /></td></tr></tr>

              <tr><td>Upload Video The Website</td><td><input type="submit" value="Uplaod Video" name="upd"/></td></tr></form>
              <tr><td>View Video From KDA</td><td><form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                  <input type="submit" value="Display Video" name="disp"/>
                  </form></td></tr></tr>

            
                          </table>
                          <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>


                          <?php
                        //Import PHPMailer classes into the global namespace
                        //These must be at the top of your script, not inside a function
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\SMTP;
                        use PHPMailer\PHPMailer\Exception;

                        //Load Composer's autoloader
                        require 'vendor/autoload.php';

                        //Create an instance; passing `true` enables exceptions
                        $mail = new PHPMailer(true);

                        try {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'user@example.com';                     //SMTP username
                        $mail->Password   = 'secret';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('KDA', 'Mailer');
                        $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
                        $mail->addAddress('ellen@example.com');               //Name is optional
                        $mail->addReplyTo('info@example.com', 'Information');
                        $mail->addCC('cc@example.com');
                        $mail->addBCC('bcc@example.com');

                        //Attachments
                        $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Here is the subject';
                        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        echo 'Message has been sent';
                        } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
