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
                <!-- Navbar Brand --><a href="test.html" class="navbar-brand">
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
                      <h3 class="h4">RTO Vehicle Registration Form</h3>
                    </div>
          </header>
          		  <div  class="page-header">
		  <div class="card-body">
                      <form class="form-horizontal" method="post" id="rto_vehecle"  action="regRto_Vehicle_Reg.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Registration number</label>	
							<div class="col-sm-9">						  
							<input type="text" id="reg_no" name="reg_no" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Type Of Vehicle</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control" name="veh_type"  id="veh_type">
								<option value='1'>Two wheeler</option>
								<option value='2'>Three Wheeler</option>
								<option value='3'>Four Wheeler</option>
                            </select>
                          </div>
						  </div>
						  <div class="form-group row">
							<label class="col-sm-3 form-control-label">Owner Name</label>
							<div class="col-sm-9">								
							<input type="text" id="O_name" name="O_name" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Owner Address</label>
							<div class="col-sm-9">								
							<input type="text" id="O_address" name="O_address" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Engine number</label>
							<div class="col-sm-9">								
							<input type="text" id="e_no" name="e_no" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Chassis number</label>
							<div class="col-sm-9">								
							<input type="text" id="Chi_no" name="Chi_no" class="form-control">
							</div>
							</div>
                        
						<div class="form-group row">
							<label class="col-sm-3 form-control-label">Date Of Registration</label>
							<div class="col-sm-9">								
							<input type="date" id="d_reg" name="d_reg" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Registration Validity</label>
							<div class="col-sm-9">								
							<input type="date" id="vreg" name="vreg" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Type Of Fule</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control"name="f_type"  id="f_type">
								<option value=0>Select</option>
								<option value="Petrol">Petrol</option>
								<option value="Diesel">Diesel</option>
								<option value="LPG">LPG</option>
								<option value="CNG">CNG</option>
                            </select>
                          </div>
                        
                        </div>
						<div class="form-group row">
							<label class="col-sm-3 form-control-label">Seating Capacity</label>
							<div class="col-sm-9">								
							<input type="number" id="se_cap" name="se_cap" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Wheel Base</label>
							<div class="col-sm-9">								
							<input type="number" id="wh_base" name="wh_base" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Cylinder Number</label>
							<div class="col-sm-9">								
							<input type="text" id="cy_no" name="cy_no" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Manufacturing date</label>
							
							<div class="col-sm-9">								
							<input type="date" id="ma_date" name="ma_date" class="form-control">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Company Name</label>
							<div class="col-sm-9">								
							<input type="text" id="co_name" name="co_name" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Vehicle Color</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control" name="v_color"  id="v_color">
								<option value=0>Select</option>
								<option value="Black">Black</option>
								<option value="Red">Red</option>
								<option value="Blue">Blue</option>
								<option value="grey">grey</option>
								<option value="Silver">Silver</option>
								
                            </select>
                          </div>
                        
                        </div>
						
							 <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           
                            <button type="submit" class="btn btn-primary" id="submit" name="registration" value="registration">Register</button>
                          </div>
</form>
</div>
<script>
$(document).(function(){
	$.("#submit").click(function(){
				var reg_no = $("#reg_no").val();
				var veh_type = $("#veh_type").val();
				var O_name = $("#O_name").val();
				var O_address = $("#O_address").val();
				var e_no = $("#e_no").val();
				var Chi_no = $("#Chi_no").val();
				var d_reg= $("#d_reg").val();
				var v_reg= $("#v_reg").val();
				var f_type = $("#f_type").val();
				var se_cap = $("#se_cap").val();
				var wh_base = $("#wh_base").val();
				var cy_no = $("#cy_no").val();
				var ma_date = $("#ma_date").val();
				var co_name = $("#co_name").val();
				var v_color = $("#v_color").val();
			
				$.ajax({
					type:"POST",
					url:"rto_vehicle_reg.php",
					data:"reg_no="+reg_no+"&veh_type="+veh_type+"&O_name="+O_name+"&O_address="+O_address+"&e_no="+e_no+"&chi_no="+chi_no+"&d_reg="+d_reg+"&vreg="+vreg+"&f_type="+f_type+"&se_cap="+se_cap+"&wh_base="+wh_base+"&cy_no="+cy_no+"&ma_date="+ma_date+"&co_name="+co_name+"&v_color="+v_color",
					success:success:function(data){
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