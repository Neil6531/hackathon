<!DOCTYPE html>
<?php
session_start();
$a = isset($_SESSION["type"]);
$u_type = ($_SESSION["type"]);
$type = 0;

if ($u_type == 'police')
{
	$type = 1;
}

if ($u_type == 'rto')
{
	$type = 2;
}

if ($u_type == 'insurance')
{
	$type = 3;
}

?>
<script>
		var u_type = <?php
echo ($type) ?>;
		if(u_type != 3)
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
                                <a href="index.php" class="navbar-brand">
                                    <div class="brand-text brand-big"><span>Integration Police</span></div>
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
            <div class="page-content d-flex align-items-stretch">
                <!-- Side Navbar -->
                <nav class="side-navbar">
                    <!-- Sidebar Header-->
                    <div class="sidebar-header d-flex align-items-center">
                        <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title">
                            <h1 class="h4"><?php
echo ($_SESSION['name']); ?></h1>
                            <p>
                                <?php
echo ($_SESSION['org']); ?>
                            </p>
                        </div>
                    </div>
                    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
                    <ul class="list-unstyled">
                        <li> <a href="police_index.php"><i class="icon-home"></i>Home</a></li>
                        <li class="active"><a href="ins_new_policy.php"> <i class="icon-padnote"></i>New Policy</a></li>
                        <li><a href=""> <i class="icon-padnote"></i>Find Policy</a></li>
                        <li><a href=""> <i class="icon-padnote"></i>Claim Requst</a></li>
                        <li><a href=""> <i class="icon-padnote"></i>View Response (FIR)</a></li>
                        <li><a href=""> <i class="icon-padnote"></i>Process for claim</a></li>
                    </ul>
                </nav>
                <div class="content-inner">
                    <!-- Page Header-->
                    <header class="page-header">
                        <div class="container-fluid">
                            <h2 class="no-margin-bottom">Add New Policy</h2>
                        </div>
                    </header>
                    <!-- Dashboard Counts Section-->
                    <section class="dashboard-counts no-padding-bottom">
                        <div class="container-fluid">
                           <div class="col-lg-12">
            			      <div class="card">
								<div class="card-header d-flex align-items-center">
								  <h3 class="h4">Policy Form</h3>
								</div>
								<div class="card-body">
								  <form class="form-horizontal">
										
										
										<div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Insurance Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="in_no">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Aadhar Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="aadhar">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="name">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="in_address">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mail">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="phone">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Date Of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="d_o_b">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
										  <label class="col-sm-3 form-control-label">Gender</label>
										  <div class="col-sm-9 select">
												<input type="text" class="form-control" id="gender">
										  </div>
										</div>
										<div class="line"></div>
                                        
                                        <div class="form-group row">
										  <label class="col-sm-3 form-control-label">Insurance Type</label>
										  <div class="col-sm-9 select">
											<select name="account" class="form-control" id="in_type">
											  <option>Life Insurance</option>
											  <option>Health Insurance</option>
											  <option>Vehicle Insurance</option>
											</select>
										  </div>
										</div>
										<div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Amount</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="amount">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Police Expire Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="exp_date">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        
										
										
								  </form>
								  
								  <center>
                                        <button id="reset_button" class="btn btn-secondary">Cancel</button>
                                        <button id="submit_button" class="btn btn-primary">Save</button>
                                    </center>
								  
								</div>
							  </div>
                		   </div>
                        </div>
                    </section>
                    <br />
                    <br />
               
                    <footer class="main-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                     <p>Integration &copy; 2017-2019</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>Design by Integration</p>
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
        </script>
        <script>
			
                $(document).ready(function() {
                    $("#loader").hide();
					
					$("#aadhar").on('change',function(){
						var aadhar = $("#aadhar").val();
						$.ajax({
							type: "POST",
							url: "ins_get_aadhar_data.php",
							data: "aadhar=" + this.value,
							dataType: "json",
							success:function(data){
								$("#name").val(data[0]);
								$("#in_address").val(data[1]);
								$("#mail").val(data[2]);
								$("#phone").val(data[3]);
								$("#d_o_b").val(data[4]);
								$("#gender").val(data[5]);
							}
						});
					});
					
					$("#submit_button").click(function(){
						var in_no = $("#in_no").val();
						var name = $("#name").val();
						var aadhar = $("#aadhar").val();
						var email= $("#mail").val();
						var phone = $("#phone").val();
						var address= $("#in_address").val();
						var d_o_b= $("#d_o_b").val();
						var gender= $("#gender").val();
						var in_type= $("#in_type").val();
						var amount= $("#amount").val();
						var exp_date= $("#exp_date").val();
						alert(in_no+"  "+name+"  "+aadhar+"  "+email+"  "+phone+"  "+address+"  "+d_o_b+"  "+gender+"  "+in_type+"  "+amount+"  "+exp_date);
						$.ajax({
							type: "POST",
							url: "ins_new_policy_insert.php",
							data: "in_no="+in_no+"&name="+name+"&aadhar="+aadhar+"&email="+email+"&phone="+phone+"&address="+address+"&d_o_b="+d_o_b+"&gender="+gender+"&in_type="+in_type+"&amount="+amount+"&exp_date="+exp_date,
							success:function(data){
								if(data=="yes"){alert("Yes");}
								else{alert("no");}
								
							}
						});
					});
                });
            </script>
			
		</script>
    </body>
</html>
 

