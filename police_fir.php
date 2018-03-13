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
	include('db_connect.php');
	$qry=mysqli_query($conn,"select fir_no from police_fir ORDER BY fir_no desc");
	$get=mysqli_fetch_array($qry);
	$c_id=$get['fir_no'];
	
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
                                    <a href="index.php" class="navbar-brand">
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
                            <li class="active">
                                <a href="police_fir.php"> <i class="icon-padnote"></i>FIR</a>
                            </li>
                            <li>
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
                                <h2 class="no-margin-bottom">New FIR Form</h2>
                            </div>
                        </header>
                        <!-- Dashboard Counts Section-->

                        <br>
                        <div class="col-lg-12">
                            <div class="card">
                                
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">FIR</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal" id="firform">

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">FIR No.</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fir_no" value="<? echo $n_id=$c_id+1; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Police Station Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="<? echo ($_SESSION['org']); ?>" class="form-control" id="p_s_name" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">District</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="district" value="<? echo($_SESSION['district']); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fir_date" value="<? echo (date(" d/m/Y ")); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <br>
                                        <h3><strong>1. Personal Details Of The Complainant / Informant</strong></h3>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Name of Person</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="p_name">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Father's / Husband's Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="f_or_h_name">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="p_address">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="p_phone">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Email ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <br>
                                        <h3><strong>2. Place Of Occurrence</strong></h3>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Location Latitude</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="lat" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Location Longitude</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="lng" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="col-sm-12">
                                        	<div id="latlongmap" style="height:450px; width: 100%" readonly></div>
                                        	<center><small>To add address and distance form police station please select place in map.</small></center>
                                        </div>
                                        
                                        <script type="text/javascript">
                                            function initialize() {
												var p_s_lat_init = <?php echo($p_s_lat); ?>;
												var p_s_lng_init = <?php echo($p_s_lng); ?>;
                                                var e = new google.maps.LatLng(p_s_lat_init,p_s_lng_init),
                                                    t = {
                                                        zoom: 15,
                                                        center: e,
                                                        panControl: !0,
                                                        scrollwheel: !1,
                                                        scaleControl: !0,
                                                        overviewMapControl: !0,
                                                        overviewMapControlOptions: {
                                                            opened: !0
                                                        },
                                                       
                                                    };
                                                map = new google.maps.Map(document.getElementById("latlongmap"), t), geocoder = new google.maps.Geocoder, marker = new google.maps.Marker({
                                                    position: e,
                                                    map: map
                                                }), map.streetViewControl = !1, infowindow = new google.maps.InfoWindow({
                                                    content: "(1.10, 1.10)"
                                                }), google.maps.event.addListener(map, "click", function(e) {
                                                    marker.setPosition(e.latLng);
                                                    var t = e.latLng,
                                                        o = "(" + t.lat().toFixed(6) + ", " + t.lng().toFixed(6) + ")";
                                                    infowindow.setContent(o), document.getElementById("lat").value = t.lat().toFixed(6), document.getElementById("lng").value = t.lng().toFixed(6)
                                                }), google.maps.event.addListener(map, "mousemove", function(e) {
                                                    var t = e.latLng;
                                                })
                                            }

                                            var latlongform = document.getElementById("aD2440");
                                            var map, geocoder, marker, infowindow;

                                            function dec2dms() {
                                                var e = document.getElementById("lat").value,
                                                    t = document.getElementById("lng").value;
                                                document.getElementById("dms-lat").innerHTML = getdms(e, !0), document.getElementById("dms-lng").innerHTML = getdms(t, !1)
                                            }

                                            function getdms(e, t) {
                                                var n = 0,
                                                    m = 0,
                                                    l = 0,
                                                    a = "X";
                                                return a = t && 0 > e ? "S" : !t && 0 > e ? "W" : t ? "N" : "E", d = Math.abs(e), n = Math.floor(d), l = 3600 * (d - n), m = Math.floor(l / 60), l = Math.round(1e4 * (l - 60 * m)) / 1e4, n + "&deg; " + m + "' " + l + "'' " + a
                                            }
                                        </script>
                                        <script src="https://maps.googleapis.com/maps/api/js?callback=initialize&amp;key=AIzaSyDl2rTMQRXoWdblHPCrDJPkOns0SeqlxFM" async defer></script>

                                        

                                        <br>
                                        <strong><div class="form-group row">
										  <label class="col-sm-3 form-control-label">Distance From The Police Station</label>
										  <div class="col-sm-9">
											<input type="text" class="form-control" id="dist_form_p_s" readonly>
										  </div>
										</div>
										<div class="line"></div></strong>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Address Of Occurrence</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="address_occurrence">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Direction From The Police Station</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="direction_from_p_s" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <br>
                                        <h3><strong>3. Date And Time Of Occurrence</strong></h3>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Date Of Occurrence</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="date_occurrence">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Time Of Occurrence</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="time_occurrence">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <br>
                                        <h3><strong>4. Offence</strong></h3>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Nature Of The Offence</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="offence_nature">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Section</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="section">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <br>
                                        <h3><strong>5. Description Of The Accused:</strong></h3>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="description" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <br>
                                        <h3><strong>6. Details Of Witnesses (if any)</strong></h3>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Name Of Witness</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="witness_name">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Address Of Witness</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="witness_address">
                                            </div>
                                        </div>
                                        <div class="line"></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Phone Of Witness</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="witness_phone">
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
			
            <script>
                $(document).ready(function() {
					$("#loader").hide();
					
					$("#latlongmap").click(function(){
						var lat = $("#lat").val();
						var lng = $("#lng").val();
						
						$.ajax({
							type: "POST",
							url: "map_direction.php",
							data: "lat="+lat+"&lng="+lng,
							success: function(data){
								$("#direction_from_p_s").val(data);
							}
						});
						
						$.ajax({
							type: "POST",
							url: "map_distance.php",
							data: "lat="+lat+"&lng="+lng,
							success: function(data){
								$("#dist_form_p_s").val(data);
							}
						});
						
						$.ajax({
							type: "POST",
							url: "map_address.php",
							data: "lat="+lat+"&lng="+lng,
							success: function(data){
								$("#address_occurrence").val(data);
							}
						});
					});
					
                    $("#submit_button").click(function() {
                        var fir_no = $("#fir_no").val();
                        var p_s_name = $("#p_s_name").val();
                        var district = $("#district").val();
                        var fir_date = $("#fir_date").val();
                        var p_name = $("#p_name").val();
                        var f_or_h_name = $("#f_or_h_name").val();
                        var p_address = $("#p_address").val();
                        var p_phone = $("#p_phone").val();
                        var email = $("#email").val();
                        var lat = $("#lat").val();
						var lng = $("#lng").val();
                        var dist_form_p_s = $("#dist_form_p_s").val();
                        var direction_from_p_s = $("#direction_from_p_s").val();
                        var date_occurrence = $("#date_occurrence").val();
                        var time_occurrence = $("#time_occurrence").val();
                        var offence_nature = $("#offence_nature").val();
                        var section = $("#section").val();
                        var description = $("#description").val();
                        var witness_name = $("#witness_name").val();
                        var witness_address = $("#witness_address").val();
                        var witness_phone = $("#witness_phone").val();
                        var address_occurrence = $("#address_occurrence").val();
						
                        $.ajax({
                            type: "POST",
                            url: "insert_police_fir.php",
                            data: "fir_no=" + fir_no + "&p_s_name=" + p_s_name + "&district=" + district + "&fir_date=" + fir_date + "&p_name=" + p_name + "&f_or_h_name=" + f_or_h_name + "&p_address=" + p_address + "&p_phone=" + p_phone + "&email=" + email + "&lat=" + lat + "&lng=" + lng + "&dist_from_p_s=" + dist_form_p_s + "&direction_from_p_s=" + direction_from_p_s + "&address_occurrence=" + address_occurrence + "&date_occurrence=" + date_occurrence + "&time_occurrence=" + time_occurrence + "&offence_nature=" + offence_nature + "&section=" + section + "&description=" + description + "&witness_name=" + witness_name + "&witness_address=" + witness_address + "&witness_phone=" + witness_phone,
                            beforeSend: function(){
								$("#loader").show(1000);
							},
							success: function(data) {
                                if (data == "yes") {
                                    alert("sucessfully");
                                } else {
                                    alert("Sorry");
                                }
								$("#loader").hide();
								$("#firform")[0].reset();
                            }
                        });
                    });
                });
            </script>
        </body>

        </html>