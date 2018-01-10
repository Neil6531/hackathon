<!DOCTYPE html>
<?php
session_start();
$a = isset($_SESSION["type"]);
$u_type=($_SESSION["type"]);
$type=0;
if($u_type == 'police'){$type=1;}
if($u_type == 'rto'){$type=2;}
if($u_type == 'insurance'){$type=3;}
?>
    <script>
        var u_type = <?php echo($type)?>;
        if (u_type != 1) {
            window.location = "index.php";
        }
    </script>
    <?php
	$org = ($_SESSION['org']);
	include('db_connect.php');
	$qry=mysqli_query($conn,"select fir_no from police_fir WHERE police_station_name = '$org'");

	$p_s_lat= $_SESSION['p_s_lat'];
	$p_s_lng= $_SESSION['p_s_lng'];
?>
        <script>
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
            <!-- Tweaks for older IEs-->
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>

        <body>
            <div id="preloader">
                <div id="status">&nbsp;</div>
            </div>
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
                                    <!-- Navbar Brand -->
                                    <a href="index.html" class="navbar-brand">
                                        <div class="brand-text brand-big"><span>Integration</span></div>
                                        <div class="brand-text brand-small">Integration</div>
                                    </a>
                                    <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                                </div>
                                <!-- Navbar Menu -->
                                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                                    <!-- Search-->
                                    <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                                    <!-- Notifications-->
                                    <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
                                        <ul aria-labelledby="notifications" class="dropdown-menu">
                                            <li>
                                                <a rel="nofollow" href="#" class="dropdown-item">
                                                    <div class="notification">
                                                        <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" href="#" class="dropdown-item">
                                                    <div class="notification">
                                                        <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" href="#" class="dropdown-item">
                                                    <div class="notification">
                                                        <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" href="#" class="dropdown-item">
                                                    <div class="notification">
                                                        <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                                        <div class="notification-time"><small>10 minutes ago</small></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Logout    -->
                                    <li class="nav-item"><a href="logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>

                <div id="loader">
                    <div id="text">&nbsp;</div>
                </div>

                <div class="page-content d-flex align-items-stretch">
                    <!-- Side Navbar -->
                    <nav class="side-navbar">
                        <!-- Sidebar Header-->
                        <div class="sidebar-header d-flex align-items-center">
                            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                            <div class="title">
                                <h1 class="h4"><?php echo ($_SESSION['name']); ?></h1>
                                <p>
                                    <?php echo ($_SESSION['org']); ?> Police Station
                                </p>
                            </div>
                        </div>
                        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
                        <ul class="list-unstyled">
                            <li> <a href="police_index.php"><i class="icon-home"></i>Home</a></li>
                            <li>
                                <a href="police_fir.php"> <i class="icon-padnote"></i>FIR</a>
                            </li>
                            <li class="active">
                                <a href="police_form_54.php"> <i class="icon-interface-windows"></i>Form 54</a>
                            </li>
                            <li>
                                <a href="charts.html"> <i class="fa fa-bar-chart"></i>View all accident case </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="content-inner">
                        <!-- Page Header-->
                        <header class="page-header">
                            <div class="container-fluid">
                                <h2 class="no-margin-bottom">Form 54</h2>
                            </div>
                        </header>
                        <!-- Dashboard Counts Section-->

                        <br>

                        <div id="find_fir">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Find FIR For form 54</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" id="find">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">FIR No</label>
                                                <select name="p-s-name" class="form-control col-sm-9" id="p_s_name">
                                                    <option>Select</option>
                                                    <?php
													while($row = mysqli_fetch_array($qry))
													{
														$fir_no = $row['fir_no'];
														echo "<option value=".$fir_no.">".$fir_no."</option>";
													}
													?>
                                                        <option value="" class="text-capitalize"></option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>

                        <div id="form_54">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">New Form 54</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" id="firform">

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Name Of Police Station</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="p_s_name" value="<? echo($_SESSION['org']) ?> Police Station" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">FIR Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="fir_no" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">CR No. / Traffic Accident Report</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="cr_no">
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="date" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Time</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="time" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Place</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="place" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Name Of Injured</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="injured_n" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Address Of Injured</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="injured_a" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Name Of Hospital To Which He/She Was Removed</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="injured_a">
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Vehicle Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="veh_no">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                            
                                            <div class="col-sm-10 offset-3">

                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Vehicle Type</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="veh_type" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Vehicle Owner Name</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="veh_type" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Vehicle Owner Address</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="veh_type" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Vehicle Engine Number</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="veh_type" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Vehicle Chassis Number</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="veh_type" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Driving Licence Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="d_l_no">
                                                </div>
                                            </div>
                                            <div class="line"></div>

                                            <div class="col-sm-10 offset-3">

                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Name Of Driver</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="d_l_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Address Of Driver</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="d_l_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Licence Expity Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="d_l_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Address Of The Issuing Authorith</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="d_l_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="line"></div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label">Badge Number In Case Of Public Service Vehicle</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="d_l_no">
                                                    </div>
                                                </div>
                                                <div class="line"></div>

                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Name Of Insurance Company</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="ins_comp_name">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Address Of Insurance Company</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="ins_comp_address">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Policy Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="policy_no">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Insurance Validity Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inc_exp_date">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Policy Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="policy_no">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Route Permit Particulars</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="route_permit">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Action Taken, If any, Result Of There</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="action_taken">
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            
                                        </form>
                                        <br>
                                        <center>
                                            <button id="reset_button" class="btn btn-secondary">Cancel</button>
                                            <button id="submit_button" class="btn btn-primary">Save</button>
                                        </center>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <footer class="main-footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Your company &copy; 2017-2019</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <p>Design by Integration Police</p>
                                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <!-- Javascript files-->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="vendor/popper.js/umd/popper.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
            <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
            <script src="js/Chart.min.js"></script>
            <script src="js/front.js"></script>

            <script>
                $(document).ready(function() {
                    $("#loader").hide();
					$("#form_54").hide();
					$("#p_s_name").on('change',function(){
						$.ajax({
							type : "POST",
							url : "select_fir_number.php",
							data : "fir_number=" + this.value,
							dataType: 'json',
							beforeSend: function(){
								$("#loader").show(500);
							},
							success:function(data){
								$("#form_54").show(500);
								$("#find_fir").hide(500);
								var fir_n = data[0];
								var date = data[1];
								var address = data[2];
								var time = data[3];
								var p_address = data[4];
								var p_name = data[5];
								$("#fir_no").val(fir_n);
								$("#date").val(date);
								$("#place").val(address);
								$("#time").val(time);
								$("#injured_a").val(p_address);
								$("#injured_n").val(p_name);
								$("#loader").hide(500);
							}
						});
					});

                });
            </script>
        </body>

        </html>