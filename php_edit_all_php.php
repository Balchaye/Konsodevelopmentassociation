                                       <?php
                                         include('includes/config.php');
                                        if($_POST['submit'])
                                        {
                                        $NameBids=$_POST['NameBids'];
                                        $EndBid=$_POST['EndBid'];
                                       // $coursefn=$_POST['cnf'];
                                        $Bid_id=$_GET['id'];
                                        $query="update bids set NameBids ='$NameBids',EndBid='$EndBid' where Bid_id='$Bid_id'";
                                        $stmt = $mysqli->prepare($query);
                                        $rc=$stmt->bind_param('bid',$NameBids,$EndBid,$Bid_id);
                                        $stmt->execute();
                                        echo"<script>alert('Course has been Updated successfully');</script>";
                                        }

                                        ?>