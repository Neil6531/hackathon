<!DOCTYPE html>
<?php
session_start();
$a=isset($_SESSION["type"]);
$u_type=($_SESSION["type"]);
$type=0;
if($u_type == 'police'){$type=1;}
if($u_type == 'rto'){$type=2;}
if($u_type == 'insurance'){$type=3;}
?>
<script>
		var u_type = <?php echo($type)?>;
		if(u_type != 2)
		{
			window.location = "index.php";
		}
</script>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Integration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>Integration RTO</span></div>
                  <div class="brand-text brand-small"><strong>Integration</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo ($_SESSION['name']); ?></h1>
              <p><?php echo ($_SESSION['org']); ?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
         <ul class="list-unstyled">
            <li class="active"> <a href="rto_index.php"><i class="icon-home"></i>Home</a></li>
			<li> <a href="Rto_Driving_Licence.php"> <i class="icon-padnote"></i>RTO Driving Licence </a></li>
            <li> <a href="Rto_Vehicle_reg.php"> <i class="icon-padnote"></i>RTO Vehicle Registration  </a></li>
            <li> <a href="Rto_Vehicle_reg.php"> <i class="icon-padnote"></i>Form 54 </a></li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="card-header d-flex align-items-center">
                      <h3 class="h4">RTO Driving Licence Form</h3>
                    </div>
					
		
          </header>
		  <div  class="page-header">
		  <div class="card-body">
                      <form class="form-horizontal" method="post" id="rto_licence"  action="regRto_Driving_licence.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">User Name</label>	
							<div class="col-sm-9">						  
							<input type="text" id="name" name="name" class="form-control">
							</div>
							</div>
						<div class="form-group row">
							<label class="col-sm-3 form-control-label">Date Of Birth</label>
							<div class="col-sm-9">								
							<input type="date" id="b_o_date" name="d_o_b" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Blood Group</label>
							<div class="col-sm-9">								
							<input type="text" id="blood_group" name="blood_group" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Licence Issue Date</label>
							<div class="col-sm-9">								
							<input type="date" id="issue_date" name="issue_date"  class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Licence Expire Date</label>
							<div class="col-sm-9">								
							<input type="date" id="exp_date" name="exp_date" class="form-control">
							</div>
							</div>
						 <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Type Of Vehicle</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control" name="licence_type"  id="licence_type">
								<option value='1'>Two wheeler</option>
								<option value='2'>Three Wheeler</option>
								<option value='3'>Four Wheeler</option>
                            </select>
                          </div>
                        
                        </div>
						<div class="form-group row">
							<label class="col-sm-3 form-control-label">Adhar No</label>
							<div class="col-sm-9">								
							<input type="number" id="adhar_no" name="aadhar_no" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Phone No</label>
							<div class="col-sm-9">								
							<input type="text" id="phone" name="phone" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Address</label>
							<div class="col-sm-9">								
							<input type="text" id="address" name="address" class="form-control">
							</div>
							</div>
							 <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           
                            <button type="submit" class="btn btn-primary" id="submit" name="registration" value="registration">Register</button>
                          </div>
</form>
</div>
<script>
$(document).ready(function(){
		$("#submit").click(function(){
				var name = $("#name").val();
				var d_o_b = $("#b_o_date").val();
				var blood_group = $("#blood_group").val();
				var issue_date = $("#issue_date").val();
				var exp_date = $("#exp_date").val();
				var licence_type =$("#licence_type").val();
				var aadhar_no = $("#adhar_no").val();
				var phone = $("#phone").val();
				var address = $("#address").val();
				$.ajax({
					type: "POST",
					url: "regRto_Driving_licence.php",
					data: "name="+name+"&d_o_b="+d_o_b+"&blood_group="+blood_group+"&issue_date="+issue_date+"&exp_date="+exp_date+"&licence_type="+licence_type+"&aadhar_no="+aadhar_no+"&phone="+phone+"&address="+address,
					success:function(data){
						if(data == "yes")
						{
								alert("success");
						}
						else{
							alert("not success");
							}

					}
				

				});
		});

});
</script>
          <!-- Dashboard Counts Section-->
          
          <div>
		  
     
          
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>