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
			<li> <a href="request_223.php"> <i class="icon-padnote"></i>Request For Form 223 </a></li>
         
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
		<section class="dashboard-counts no-padding-bottom">
                        <div class="container-fluid">
                            <div class="row bg-white has-shadow">
                                <!-- Item -->
                                <div class="col-lg-4 col-sm-12">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-green"><i class="icon-user"></i></div>
                                        <div class="title"><span>Total<br>RTO Licence </span>
                                            <div class="progress">
                                                <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                                            </div>
                                        </div>
                                        <div class="number"><strong><?php
										include('db_connect.php');
										$count_data="select * from rto_driving_licence ";
										$ans=mysqli_query($conn,$count_data);
										$count=mysqli_num_rows($ans);
					
										echo($count);
									
										
										
										
										?>
										</strong></div>
                                    </div>
                                </div>
								<div class="col-lg-4 col-sm-12">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-orange"><i class="icon-padnote"></i></div>
                                        <div class="title"><span>Form 54<br>Vehicle Register</span>
                                            <div class="progress">
                                                <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                                            </div>
                                        </div>
                                        <div class="number"><strong><?php
										include('db_connect.php');
										$count_data="select * from rto_vehicle_reg ";
										$ans=mysqli_query($conn,$count_data);
										$count=mysqli_num_rows($ans);
					
										echo($count);
									
										
										
										
										?></strong></div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-lg-4 col-sm-12">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-red"><i class="icon-bill"></i></div>
                                        <div class="title"><span>New<br>Accident Case</span>
                                            <div class="progress">
                                                <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                                            </div>
                                        </div>
                                        <div class="number">
										<?php
										include('db_connect.php');
										$count_data="select * from police_form_54";
										$ans=mysqli_query($conn,$count_data);
										$count=mysqli_num_rows($ans);
					
										echo($count);
									
										
										
										
										?><strong>
									</strong></div>
                                    </div>
                                </div>
                                <!-- Item -->
                            </div>
                        </div>
                    </section>
					 <br>
                    <br>
					  <div class="col-lg-12">
                        <div class="line-chart-example card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow">
                                        <a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                                        <a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">Accident Occured</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="accident" style="width: 100%; height: 350px;"></canvas>
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
            var LINECHARTEXMPLE = $('#accident ');
            var lineChartExample = new Chart(LINECHARTEXMPLE, {
                type: 'line',
                options: {
                    legend: {
                        labels: {
                            fontColor: "#777",
                            fontSize: 16
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                                color: '#eee'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                color: '#eee'
                            }
                        }]
                    },
                },
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: "Number of Accident",
                        fill: true,
                        lineTension: 0.3,
                        backgroundColor: "rgba(0,175,217, 0.1)",
                        borderColor: "rgba(133, 180, 242, 1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        borderWidth: 2,
                        pointBorderColor: "rgba(133, 180, 242, 0.91)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 5,
                        pointHoverRadius: 10,
                        pointHoverBackgroundColor: "rgba(133, 180, 242, 0.91)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: [30, 50, 40, 61, 42, 35, 40],
                        spanGaps: false
                    }]
                }
            });
        </script>
  </body>
</html>