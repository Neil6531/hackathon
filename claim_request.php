<!DOCTYPE html>
<?php
include 'db_connect.php';
session_start();
$a = isset($_SESSION["type"]);
$u_type = ($_SESSION["type"]);
$type = 0;

if ($u_type == 'police') {
    $type = 1;
}

if ($u_type == 'rto') {
    $type = 2;
}

if ($u_type == 'insurance') {
    $type = 3;
}

$sql = "SELECT * FROM claim where status='0'";
$result = mysqli_query($conn, $sql);

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
                                    <div class="brand-text brand-big"><span>Integration Insurance</span></div>
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
                        <li><a href="ins_new_policy.php"> <i class="icon-padnote"></i>New Policy</a></li>
                        <li><a href="#"> <i class="icon-padnote"></i>Find Policy</a></li>
                        <li class="active"><a href="claim_request.php"> <i class="icon-padnote"></i>Claim Requst</a></li>
                        <li><a href="#"> <i class="icon-padnote"></i>View Response (FIR)</a></li>
                        <li><a href="#"> <i class="icon-padnote"></i>Process for claim</a></li>
                    </ul>
                </nav>
                <div class="content-inner">
                    <!-- Page Header-->
                    <header class="page-header">
                        <div class="container-fluid">
                            <h2 class="no-margin-bottom">New Claim Policy</h2>
                        </div>
                    </header>

                    <br>

                    <section class="projects no-padding-top">
						<div class="container-fluid">
						  <!-- Project-->
						  <div class="project">
							<?php
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $i++;
    ?>
						  <div class="row bg-white has-shadow">

							  <div class="left-col col-lg-1 d-flex align-items-center justify-content-between">
								<div class="project-title d-flex align-items-center">
								  <div class="text">
									<h3 class="h4"><center><?php echo ($i . "."); ?></center></h3>
								  </div>
								</div>
							  </div>
							  <div class="left-col col-lg-4 d-flex align-items-center justify-content-between">
								<div class="project-title d-flex align-items-center">
								  <div class="text">
									<h3 class="h4"><?php echo ($row['name']) ?></h3><small>Policy No : <?php echo ($row['policy_no']) ?></small>
								  </div>
								</div>
								<div class="project-date"><span class="hidden-sm-down"><?php echo ($row['no_name']) ?></span></div>
							  </div>
							  <div class="right-col col-lg-4 d-flex align-items-center">
								<div class="comments"><i class="fa fa-map-pin"></i><?php echo ("Mo : " . $row['no_phone'] . " / Email :" . $row['no_mail']) ?></div>
							  </div>
							  <div class="right-col col-lg-2 d-flex align-items-center">
							  	<a href="approve_mail.php?p_no=<?php echo ($row['policy_no'] . "&c_id=" . $row['c_id']) ?>" class="btn btn-sm btn-success">Approve</a><pre>  </pre>
							  	<a href="reject_mail.php?p_no=<?php echo ($row['policy_no'] . "&c_id=" . $row['c_id']) ?>" class="btn btn-sm btn-danger">Reject</a>
							  </div>
							  <div class="right-col col-lg-1 d-flex align-items-center">
								<div class="right-col col-lg-5 d-flex align-items-center">
									<div class="dropdown">
										<button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
										<div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow">
										<a href="police_report.php?fir_no=<?php echo ($row['fir_no']) ?>" class="dropdown-item">Police Report</a>
										<a href="rto_report.php?fir_no=<?php echo ($row['fir_no']) ?>" class="dropdown-item edit">RTO Report</a></div>
									  </div>
							  	</div>
							  </div>
							</div>
							<?php }?>

						  </div>
						</div>
					  </section>

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


					$("#no_aadhar").on('change',function(){
						var aadhar = $("#no_aadhar").val();
						$.ajax({
							type: "POST",
							url: "ins_get_aadhar_data1.php",
							data: "no_aadhar=" + this.value,
							dataType: "json",
							success:function(data){
								$("#no_name").val(data[0]);
								$("#no_phone").val(data[1]);


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
						var no_type= $("#no_type").val();
						var no_aadhar= $("#no_aadhar").val();
						var no_name= $("#no_name").val();
						var no_phone= $("#no_phone").val();
						var amount= $("#amount").val();
						var exp_date= $("#exp_date").val();
						alert(in_no+"  "+name+"  "+aadhar+"  "+email+"  "+phone+"  "+address+"  "+d_o_b+"  "+gender+"  "+in_type+"  "+amount+"  "+exp_date);
						$.ajax({
							type: "POST",
							url: "ins_new_policy_insert.php",
							data: "in_no="+in_no+"&name="+name+"&aadhar="+aadhar+"&email="+email+"&phone="+phone+"&address="+address+"&d_o_b="+d_o_b+"&gender="+gender+"&in_type="+in_type+"&no_type="+no_type+"&no_aadhar="+no_aadhar+"&no_name="+no_name+"&no_phone="+no_phone+"&amount="+amount+"&exp_date="+exp_date,
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


