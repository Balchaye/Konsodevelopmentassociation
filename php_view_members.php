				<?php
				//session_start();
				include('includes/config.php');
				//include('includes/checklogin.php');
				//check_login();
				?>
				<?php

				include("modal_style.php");
				?>
				<?php 
				include("conf.php");
				session_start();
				if(!isset($_SESSION['log']['Username']))
				{

				header("location: php_home_out.php");
				}
				?>
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta charset="utf-8">
					<link rel="stylesheet" href="new/css/font-awesome.min.css">
					<link rel="stylesheet" href="new/css/bootstrap.min.css">
					<link rel="stylesheet" href="new/css/dataTables.bootstrap.min.css">
					<link rel="stylesheet" href="new/css/bootstrap-social.css">
					<link rel="stylesheet" href="new/css/bootstrap-select.css">
					<link rel="stylesheet" href="new/css/fileinput.min.css">
					<link rel="stylesheet" href="new/css/awesome-bootstrap-checkbox.css">
					<link rel="stylesheet" href="new/css/style.css">
				<script type="text/javascript" src='tinymce4/js/tinymce/tinymce.min.js' referrerpolicy="origin"></script>
				<script type="text/javascript">
				tinymce.init({
					selector: "#Project_introduction",
					width: 680,
					height: 300,
					plugins: [
							'advlist autolink link image lists charmap print preview hr anchor pagebreak',
							'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
							'table emoticons template paste help ',
							'responsivefilemanager code'
							],
							toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
							'bullist numlist outdent indent | link image | print preview media fullpage | ' +
							'forecolor backcolor emoticons |help',
							image_advtab: false ,
				
				external_filemanager_path:"filemanager/",
				filemanager_title:"Responsive Filemanager" ,
				external_plugins: { "filemanager" : "filemanager/plugin.min.js"}
				});
				</script> 
				<title>Konso Development Association Home Page</title>
				<link rel="shortcut icon" HREF="images/konsofig.PNG" />
				</head>
				<body>
				<div class="header_resize">
					
					<div class="searchform">
					
					</div>
					<div class="clr"></div>
					<div class="menu_nav">
					</div>
					<?php include('header.php');?>
					<div class="ts-main-content">
					<?php include('sidebar.php');?>
						<div class="content-wrapper">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-24">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<h2 class="page-title" style="margin-top: 7%">All memebership's Details in English</h2>
										<!--<div class="panel panel-default">-->
											<div class="panel-body">
												<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="1%">
													<thead>
														<tr>
														<th>Sno.</th>
															<th>ID_Number</th>
															<th>Name</th>
															<th>Father Name </th>
															<th>GrandFather Name </th>
															<th>Identification Photo</th>
															<th>Region</th>
															<th>Zone</th>
															<th>Woreda</th>
															<th>Kebele</th>
															<th>Profession</th>
															<th>Current Work/Living Place</th>
															<th>Age</th>
															<th>Sex</th>
															<th>Phone Number</th>
															<th>Email Address</th>
															<th>Registeration Date</th>
															<th>Type</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>Sno.</th>
															<th>ID_Number</th>
															<th>Name</th>
															<th>Father Name </th>
															<th>GrandFather Name </th>
															<th>Identification Photo</th>
															<th>Region</th>
															<th>Zone</th>
															<th>Woreda</th>
															<th>Kebele</th>
															<th>Profession</th>
															<th>Current Work/Living Place</th>
															<th>Age</th>
															<th>Sex</th>
															<th>Phone Number</th>
															<th>Email Address</th>
															<th>Registeration Date</th>
															<th>Type</th>
														</tr>
													</tfoot>
													<tbody>
				<?php	
				//$aid=$_SESSION['Username'];
			$user='root';
			$pass='';
			$db="kda";
			$conn =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
				$ret="select * from memeberships";
				$stmt= $conn->prepare($ret) ;
				//$stmt->bind_param('i',$aid);
				$stmt->execute() ;
				$res=$stmt->get_result();
				$cnt=1;
				while($row=$res->fetch_object())
					{
						?>
				<tr><td><?php echo $cnt;;?></td>
				<td><?php echo $row->ID_Number;?></td>
				<td><?php echo $row->Name;?></td>
				<td><?php echo $row->FatherName;?></td>
				<td><?php echo $row->GFName;?></td>
				<td><?php echo "<img style='margin-top:-10px; border-width: 0px; margin-left:4px;'  width=60 height=45 alt='Unable to View' src='" .$row->Photo."' >";?></td>
				<td><?php echo $row->Region;?></td>
				<td><?php echo $row->Zone;?></td>
				<td><?php echo $row->Woreda;?></td>
				<td><?php echo $row->Kebele;?></td>
				<td><?php echo $row->Profession;?></td>
				<td><?php echo $row->Current_work;?></td>
				<td><?php echo $row->Age;?></td>
				<td><?php echo $row->Sex;?></td>
				<td><?php echo $row->Phone;?></td>
				<td><?php echo $row->Gmail;?></td>
				<td><?php echo $row->RegisterDate;?></td>
				<td><?php echo $row->Type;?></td>
														</tr>
													<?php
				$cnt=$cnt+1;
													} ?>
															
														
													</tbody>
												</table>

				<font size="5"><a href="php_view_am_members.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						የሁሉም አባላት ስም ዝርዝር በአማርኛ</font></a>
					
				
												
											</div>
										<!--</div>-->

									
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Loading Scripts -->
					<script src="new/js/jquery.min.js"></script>
					<script src="new/js/bootstrap-select.min.js"></script>
					<script src="new/js/bootstrap.min.js"></script>
					<script src="new/js/jquery.dataTables.min.js"></script>
					<script src="new/js/dataTables.bootstrap.min.js"></script>
					<script src="new/js/Chart.min.js"></script>
					<script src="new/js/fileinput.js"></script>
					<script src="new/js/chartData.js"></script>
					<script src="new/js/main.js"></script>
				</body>
				</html>
