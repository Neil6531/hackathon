<!DOCTYPE html>
<?php
include('db_connect.php');
session_start();
$a=isset($_SESSION["type"]);
$u_type=($_SESSION["type"]);
$type=0;

if($u_type == 'police'){$type=1;}
if($u_type == 'rto'){$type=2;}
if($u_type == 'insurance'){$type=3;}
$fir=$_GET['fir_no'];
$sql = "SELECT fir_no,police_station_name,vehical_no,date_of_occ,time_of_occ,address_occ,rto_name FROM police_fir WHERE fir_no='$fir'";
//echo($sql);
$result = mysqli_query($conn,$sql)or die(mysqli_error());
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
            <li> <a href="form223.php"> <i class="icon-padnote"></i>Form 223 </a></li>
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
                      <form class="form-horizontal" method="post" id="rto_report">
                        <div class="form-group row">
							<?php 
							while($row = mysqli_fetch_array($result)){
								?>
                          <label class="col-sm-3 form-control-label">Fir Number</label>	
							<div class="col-sm-9">						  
							<input type="text" id="fir" name="fir" class="form-control" value="<?php echo($row['fir_no']); ?>">
							</div>
							</div>
							 <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Police Station Name</label>	
							<div class="col-sm-9">						  
							<input type="text" id="p_station" name="p_station" class="form-control" value="<?php echo($row['police_station_name']); ?>">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Vehicle Number</label>	
							<div class="col-sm-9">						  
							<input type="text" id="v_no" name="v_no" class="form-control" value="<?php echo($row['vehical_no']); ?>">
							</div>
							
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Description of Vehicle</label>	
							<div class="col-sm-9">						  
							<input type="text" id="d_vehi" name="d_vehi" class="form-control">
							</div>
							</div>
								<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Condition of brakes and brake connections.</label>	
							<div class="col-sm-9">						  
							<input type="text" id="c_break" name="c_break" class="form-control">
							</div>
							</div>
								<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Condition of steering, steering arms and
connections & engine & engine control</label>	
							<div class="col-sm-9">						  
							<input type="text" id="c_steering" name="c_steering" class="form-control">
							</div>
							</div>
								<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Condition of gear-box and differential</label>	
							<div class="col-sm-9">						  
							<input type="text" id="c_gear" name="c_gear" class="form-control">
							</div>
							</div>
								<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Frame (side, front and rear members)</label>	
							<div class="col-sm-9">						  
							<input type="text" id="frame" name="frame" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Wheel, axles and springs (front and rear)</label>	
							<div class="col-sm-9">						  
							<input type="text" id="wheel" name="wheel" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Any other defects worthy of special mention</label>	
							<div class="col-sm-9">						  
							<input type="text" id="other" name="other" class="form-control">
							</div>
							</div>
							 <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Was accident, in the opinion of the inspecting
Officer, due to any mechanical defects in the
vehicle? (This opinion to be expressed in fatal
case only)</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control" name="opinion"  id="opinion">
								<option value='1'>Yes</option>
								<option value='2'>No</option>
							
                            </select>
                          </div>
                        
                        </div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Are registration and tax in order?</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control" name="registration"  id="reg">
								<option value='1'>Yes</option>
								<option value='2'>No</option>
							
                            </select>
                          </div>
                        
                        </div>
						<div class="form-group row">
							<label class="col-sm-3 form-control-label">is insurance in order?</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control" name="insurance"  id="insurance">
								<option value='1'>Yes</option>
								<option value='2'>No</option>
							
                            </select>
                          </div>
                        
                        </div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">If a transport vehicle, are the certificate of
fitness and permit in order?</label>
                          <div class="col-sm-9 select">
                            <select  class="form-control" name="certificate"  id="certificate">
								<option value='1'>Yes</option>
								<option value='2'>No</option>
							
                            </select>
                          </div>
                        
                        </div>
						<div class="form-group row">
							<label class="col-sm-3 form-control-label">Date Of Accident</label>
							<div class="col-sm-9">								
							<input type="text"  id="d_accident" name="d_accident" class="form-control" value="<?php echo($row['date_of_occ']); ?>">
							</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Time Of Accident</label>
							<div class="col-sm-9">								
							<input type="text" id="t_accident" name="t_accident" class="form-control" value="<?php echo($row['time_of_occ']); ?>">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">place of accident</label>	
							<div class="col-sm-9">						  
							<input type="text" id="p_accident" name="p_accident" class="form-control" value="<?php echo($row['address_occ']); ?>">
							</div>
							</div>
							
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Date,time  Of inspection</label>
							<div class="col-sm-9">								
							<input type="date" id="d_inspection" name="d_inspection" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">place of inspection</label>	
							<div class="col-sm-9">						  
							<input type="text" id="p_inspection" name="p_inspection" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Inspection Officer name</label>	
							<div class="col-sm-9">						  
							<input type="text" id="i_name" name="i_name" class="form-control">
							</div>
							</div>
								<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Inspection Officer Designation </label>	
							<div class="col-sm-9">						  
							<input type="text" id="i_desig" name="i_desig" class="form-control">
							</div>
							</div>
							<div class="form-group row">
                          <label class="col-sm-3 form-control-label">RTO name </label>	
							<div class="col-sm-9">						  
							<input type="text" id="rto1" name="rto1" class="form-control" value="<?php echo($row['rto_name']); ?>" >
							</div>
							</div>
							<?php  } ?>
							<div class="form-group row">
							<label class="col-sm-3 form-control-label">Current Date</label>
							<div class="col-sm-9">								
							<input type="text" id="d_current" name="d_current" class="form-control" value="<?php echo (date("m/d/y")); ?>">
							</div>
							</div>
							
						
						
							
							 <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           
                            
                          </div>
						  </div>
</form>
<button type="submit" class="btn btn-primary" id="submit_form" name="registration" value="registration">Register</button>
</div>

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
    
    <script>
	
		

	
$(document).ready(function(){
				
	$("#submit_form").click(function(){
			
				var fir = $("#fir").val();
				var p_station = $("#p_station").val();
				var v_no = $("#v_no").val();
				var d_vehi = $("#d_vehi").val();
				var c_break = $("#c_break").val();
				var c_steering =$("#c_steering").val();
				var c_gear = $("#c_gear").val();
				var frame = $("#frame").val();
				var wheel = $("#wheel").val();
				var other = $("#other").val();
				var opinion = $("#opinion").val();
				var reg = $("#reg").val();
				var insurance = $("#insurance").val();
				var certificate = $("#certificate").val();
				var d_accident = $("#d_accident").val();
				var t_accident = $("#t_accident").val();
				var p_accident = $("#p_accident").val();
				var d_inspection = $("#d_inspection").val();
				var p_inspection = $("#p_inspection").val();
				var i_name = $("#i_name").val();
				var i_desig = $("#i_desig").val();
				var rto1 = $("#rto1").val();
				var d_current = $("#d_current").val();
				$.ajax({
					type: "POST",
					url: "insert_form223.php",
					data: "fir="+fir+"&p_station="+p_station+"&v_no="+v_no+"&d_vehi="+d_vehi+"&c_break="+c_break+"&c_steering="+c_steering+"&c_gear="+c_gear+"&frame="+frame+"&wheel="+wheel+"&other="+other+"&opinon="+opinion+"&reg="+reg+"&insurance="+insurance+"&certificate="+certificate+"&d_accident="+d_accident+"&t_accident="+t_accident+"&p_accident="+p_accident+"&d_inspection="+d_inspection+"&p_inspection="+p_inspection+"&i_name="+i_name+"&i_desig="+i_desig+"&rto1="+rto1+"&d_current="+d_current,
					
					success:function(data){
						if(data == "yes")
						{
								alert("Successful Form Filled");
						}
						else{
							alert("Record has been already filled");
							}

					}
				

				});
		});

});
</script>
    
  </body>
</html>