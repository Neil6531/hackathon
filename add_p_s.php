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
                
                
                
                 
                        <!-- Page Header-->
                        <header class="page-header">
                            <div class="container-fluid">
                                <h2 class="no-margin-bottom">New Police Station</h2>
                            </div>
                        </header>
                        <!-- Dashboard Counts Section-->

                        <br>
                        <div class="col-lg-12">
                            <div class="card">
                                
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Add Police Station</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal" id="add_p_s">
                                       
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
												var p_s_lat_init = 23.020033;
												var p_s_lng_init = 72.578430;
                                                var e = new google.maps.LatLng(p_s_lat_init,p_s_lng_init),
                                                    t = {
                                                        zoom: 7,
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
                                        <script src="https://maps.googleapis.com/maps/api/js?callback=initialize&amp;key=AIzaSyCbVQgbehO-LyOm7mpXzYzVFz0LmO71mzg" async defer></script>
										
                                       	<div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Name Of Police Station</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="p_s_name">
                                            </div>
                                        </div>
										<div class="line"></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Police Station Districts</label>
                                            <div class="col-sm-9">
                                                <select name="district" class="form-control" id="district">
													<option value="">Select</option>
													<option value="Ahmedabad">Ahmedabad</option>
													<option value="Amreli">Amreli</option>
													<option value="Anand">Anand</option>
													<option value="Banaskantha">Banaskantha</option>
													<option value="Bharuch">Bharuch</option>
													<option value="Bharuch">Bharuch</option>
													<option value="Dohad">Dohad</option>
													<option value="Gandhinagar">Gandhinagar</option>
													<option value="Jamnagar">Jamnagar</option>
													<option value="Junagadh">Junagadh</option>
													<option value="Kachchh">Kachchh</option>
													<option value="Kheda">Kheda</option>
													<option value="Mahesana">Mahesana</option>
													<option value="Narmada">Narmada</option>
													<option value="Navsari">Navsari</option>
													<option value="Patan">Patan</option>
													<option value="Porbandar">Porbandar</option>
													<option value="Rajkot">Rajkot</option>
													<option value="Sabarkantha">Sabarkantha</option>
													<option value="Surat">Surat</option>
													<option value="Surendranagar">Surendranagar</option>
													<option value="Tapi">Tapi</option>
													<option value="Dang">Dang</option>
													<option value="Vadodara">Vadodara</option>
													<option value="Valsad">Valsad</option>
												</select>
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
					
					$("#district").on('chnage',function(){
						alert(this.val());
					});
					
                    $("#submit_button").click(function() {
                        
						var p_s_name = $("#p_s_name").val();
                        var district = $("#district").val();
                        var lat = $("#lat").val();
						var lng = $("#lng").val();
						
                        $.ajax({
                            type: "POST",
                            url: "insert_p_s.php",
                            data: "p_s_name="+p_s_name+"&district="+district+"&p_s_lat="+lat+"&p_s_lng="+lng,
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
								$("#add_p_s")[0].reset();
                            }
                        });
                    });
                });
            </script>
        </body>

        </html>