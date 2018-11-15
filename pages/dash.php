<!DOCTYPE html>
<?php 
session_start(); 
ob_start();
  include_once '../config/authModule/real-config.php';
  include_once '../config/loginModule/login-func.php';
  //include_once '../config/loginModule/config-func.php';
  
       
     //checking if the student is logged in  
      if(login_check($mysqli) == true){
      $id = getfield('institute_instituteID',$mysqli);

      $inst_name = getfield_inst('institute_name',$id,$mysqli);
	  
      }else{
        header('Location:/studentportal');
      }     
  
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
	<?php echo $inst_name; ?> | Students Portal
  </title>
  
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <!-- Bootstrap 3.3.7 -->
	  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
	  <!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
	  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
	  <!-- Morris chart -->
	  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
	  <!-- jvectormap -->
	  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
	  <!-- Date Picker -->
	  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	  <!-- Daterange picker -->
	  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
	  <!-- bootstrap wysihtml5 - text editor -->
	  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	  <link rel="stylesheet" href="../css/styles.css">
		<!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="../plugins/iCheck/all.css">

	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->

	  <!-- Google Font -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>





<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
			  
			  <header class="main-header">
				<nav class="navbar navbar-static-top">
				  <div class="container">
					<div class="navbar-header">
					
					  <a href="<?php echo '?token='.base64_encode('dashboard') ?>" class="navbar-brand"><b><?php echo $inst_name; ?></a>
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<i class="fa fa-bars"></i>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo '?token='.base64_encode('dashboard') ?>">Dashboard<span class="sr-only">(current)</span></a></li>
						<li><a href="<?php echo '?token='.base64_encode('biodata') ?>">Bio Data</a></li>
						<li><a href="<?php echo '?token='.base64_encode('finance') ?>">Finances</a></li>
						<li><a href="<?php echo '?token='.base64_encode('singleResult') ?>">My Results</a></li>
						<li><a href="<?php echo '?token='.base64_encode('registration') ?>">Registration</a></li>
						<li><a href="<?php echo '?token='.base64_encode('retake') ?>">Reakes & Carry overs</a></li>
						
					  </ul>
					</div>
					<!-- /.navbar-collapse -->
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
					  <ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
						  <!-- Menu toggle button -->
							<div class="pull-right">
								<a href="../config/loginModule/logout.php" class="btn btn-default btn-flat"><b>
								<?php 
								$registration_number = getfield('regNo',$mysqli); 
								echo $registration_number;
								?>
								
								 - Sign out</b></a> 
							</div>
						</li>
					  </ul>
					</div>
					<!-- /.navbar-custom-menu -->
				  </div>
				  <!-- /.container-fluid -->
				</nav>
			  </header>
				<div class="content-wrapper">
			<div class="container">
			<?php
			//calling route page that contains the main records view
			include "../config/recordsModule/route.php";
			?>
			</div>
			</div>
		  
		  
		  
		  <footer class="main-footer">
			<div class="container">
			  <div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			  </div>
			  <strong>Copyright &copy; 2019 <a href="#"> <?php echo $inst_name; ?> </a> </strong> All rights reserved.
			</div>
			<!-- /.container -->
		  </footer>
	</div>
	<!-- ./wrapper -->






<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="../js/ajax.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- SlimScroll -->
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
        //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
  })

</script>
</body>
</html>