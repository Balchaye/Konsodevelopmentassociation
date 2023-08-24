<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Access Log</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-24">
						<h2 class="page-title" style="margin-top: 7%">All Merchants Details</h2>
						<!--<div class="panel panel-default">-->
							<div class="panel-heading">All Merchants Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="1%">
									<thead>
										<tr>
											<th>Sno.</th>
											<th>TIN</th>
											<th>Name</th>
											<th>Father </th>
											<th>GrandFather </th>
											<th>Sex</th>
											<th>Region</th>
											<th>Zone</th>
											<th>Woreda</th>
											<th>Kebele</th>
											<th>Trade Sector</th>
											<th>Trade TYpe</th>
											<th>Licence Number</th>
											<th>Date Licence Given</th>
											<th>Date Licence Given</th>
											<th>Date Licence Given</th>
											<th>Date Licence Given</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno.</th>
											<th>TIN</th>
											<th>Name</th>
											<th>Father </th>
											<th>GrandFather </th>
											<th>Sex</th>
											<th>Region</th>
											<th>Zone</th>
											<th>Woreda</th>
											<th>Kebele</th>
											<th>Trade Sector</th>
											<th>Trade TYpe</th>
											<th>Licence Number</th>
											<th>Date Licence Given</th>
											<th>Date Licence Given</th>
											<th>Date Licence Given</th>
											<th>Date Licence Given</th>
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from userlog1 where TIN";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->TIN;?></td>
<td><?php echo $row->Name;?></td>
<td><?php echo $row->FatherName;?></td>
<td><?php echo $row->GradFather;?></td>
<td><?php echo $row->Sex;?></td>
<td><?php echo $row->Region;?></td>
<td><?php echo $row->Zone;?></td>
<td><?php echo $row->Woreda;?></td>
<td><?php echo $row->Kebele;?></td>
<td><?php echo $row->Trade_Sector;?></td>
<td><?php echo $row->Trade_Type;?></td>
<td><?php echo $row->LisenseNo;?></td>
<td><?php echo $row->Given_time;?></td>
<td><?php echo $row->Given_time;?></td>
<td><?php echo $row->Given_time;?></td>
<td><?php echo $row->Given_time;?></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>
						<!--</div>-->

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
