<!DOCTYPE html>
<?php
include('db_connect.php');
session_start();
$a=0;
$u_type=($_SESSION["type"]);
if($u_type == 'police'){$type=1;$a=1;}
if($u_type == 'rto'){$type=2;$a=1;}
if($u_type == 'insurance'){$type=3;$a=1;}
?>
<script>
		var a = <?php echo($a) ?>;
		var u_type = <?php echo($type)?>;
		if(a == 1)
		{
			if(u_type == 1){window.location = "police_index.php";}
			else if(u_type == 2){window.location = "rto_index.php";}
			else if(u_type == 3){window.location = "insurance_index.php";}
		}
		else{header.location("location:index.php");}
</script>
<?php
$sql = "SELECT p_s_name FROM police_station_location ORDER BY p_s_name";
$result = mysqli_query($conn,$sql)or die(mysqli_error());
?>

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
	<div id="loader">
		<div id="text">&nbsp;</div>
	</div>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1 class="text-uppercase">Integration</h1>
                  </div>
                  <p>Integration between RTO police and insurance company in case of fatal accident case.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white" id="login-form">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" method="post" action="login.php">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div><button class="btn btn-primary">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a role="button" class="signup" id="registration-button" style="cursor: pointer">registration</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-white" id="registration-form">
				<div class="form d-flex align-items-center">
					<div class="content">
						<label class="col-sm-3 form-control-label">Type</label>
						<div class="col-sm-9 select">
							
							
							<select name="user-type" class="form-control" id="user-type">
								<option value="0">Select</option>
								<option value="1">Police</option>
								<option value="2">RTO</option>
								<option value="3">Insurance Company</option>
							</select>
							 
							 
							<form id="police-form" method="post">
								<div class="form-group">
									<input id="p-name" type="text" name="p_name" class="input-material">
									<label for="p-name" class="label-material">Enter Your Name</label>
								</div>
								<div class="form-group">
									<label class="form-control-label">Select Police Station</label>
									<select name="p-s-name" class="form-control col-sm-9" id="p-s-name">
										<option>Select</option>
										<?php
										while($row = mysqli_fetch_array($result))
										{
											$p_s_name = $row['p_s_name'];
											echo "<option value=".$p_s_name." class='text-capitalize'>".$p_s_name."</option>";
										}
										?>
										<option value="" class="text-capitalize"></option>
									</select>
								</div>
								<div class="form-group">
									<input id="district" type="text" name="p_s_pincode_area" class="input-material" placeholder="Police Station District" readonly>
								</div>
								<div class="form-group">
									<input id="p-s-pincode-area" type="text" name="p_s_pincode_area" class="input-material">
									<label for="p-s-pincode-area" class="label-material">Police Station Pincode</label>
								</div>
								<div class="form-group">
									<input id="p-s-emailid" type="text" name="p_s_emailid" class="input-material">
									<label for="p-s-emailid" class="label-material">Police Station Email ID</label>
								</div>
								<div class="form-group">
									<input id="p-s-phone" type="text" name="p_s_phone" class="input-material">
									<label for="p-s-phone" class="label-material">Phone Number</label>
								</div>
								<div class="form-group">
									<input id="p-s-pass" type="password" name="p_s_pass" class="input-material">
									<label for="p-s-pass" class="label-material">Enter Password</label>
								</div>
								<div class="form-group">
									<input id="p-s-pass-confirm" type="password" name="p_s_pass_confirm" class="input-material">
									<label for="p-s-pass-confirm" class="label-material">Enter Password to Confirm</label>
								</div>
								<div class="form-group" id="type-police">
									<input id="police-type" type="text" name="type" class="input-material">
									<label for="police-type" class="label-material">type</label>
								</div>
								<a id="police-reg" class="btn btn-primary" style="color: #fff; cursor: pointer;">registration</a>
							</form>


							<form id="rto-form" method="post" action="registration.php">
								<div class="form-group">
									<input id="rto-name" type="text" name="rto_name" class="input-material">
									<label for="rto-name" class="label-material">RTO Name</label>
								</div>
								<div class="form-group">
									<input id="rto-u-name" type="text" name="rto_u_name" class="input-material">
									<label for="rto-u-name" class="label-material">Enter Your Name</label>
								</div>
								<div class="form-group">
									<input id="rto-emailid" type="text" name="rto_emailid" class="input-material">
									<label for="rto-emailid" class="label-material">RTO Email ID</label>
								</div>
								<div class="form-group">
									<input id="rto-phone" type="text" name="rto_phone" class="input-material">
									<label for="rto-phone" class="label-material">RTO Phone Number</label>
								</div>
								<div class="form-group">
									<input id="rto-pass" type="password" name="rto_pass" class="input-material">
									<label for="rto-pass" class="label-material">Enter Password</label>
								</div>
								<div class="form-group">
									<input id="rto-pass-confirm" type="password" name="rto_pass_confirm" class="input-material">
									<label for="rto-pass-confirm" class="label-material">Enter Password to Confirm</label>
								</div>
								<div class="form-group" id="type-rto">
									<input id="rto-type" type="text" name="type" class="input-material">
									<label for="rto-type" class="label-material">type</label>
								</div>
								<a id="rto-reg" class="btn btn-primary" style="color: #fff; cursor: pointer;">Registration</a>
							</form>
							
							<form id="insurance-form" method="post" action="registration.php">

								<div class="form-group">
									<input id="i-c-name" type="text" name="i_c_name" class="input-material">
									<label for="i-c-name" class="label-material">Company Name</label>
								</div>
								<div class="form-group">
									<input id="i-c-u-name" type="text" name="rto_u_name" class="input-material">
									<label for="i-c-u-name" class="label-material">Enter Your Name</label>
								</div>
								<div class="form-group">
									<input id="i-c-code" type="text" name="i_c_code" class="input-material">
									<label for="i-c-code" class="label-material">CompanCompanyegistration Code</label>
								</div>
								<div class="form-group">
									<input id="i-c-emailid" type="text" name="i_c_emailid" class="input-material">
									<label for="i-c-emailid" class="label-material">Company Email ID</label>
								</div>
								<div class="form-group">
									<input id="i-c-phone" type="text" name="i_c_phone" class="input-material">
									<label for="i-c-phone" class="label-material">Company Phone Number</label>
								</div>
								<div class="form-group">
									<input id="i-c-pass" type="password" name="i_c_pass" class="input-material">
									<label for="i-c-pass" class="label-material">Enter Password</label>
								</div>
								<div class="form-group">
									<input id="i-c-pass-confirm" type="password" name="i_c_pass-confirm" class="input-material">
									<label for="i-c-pass-confirm" class="label-material">Enter Password to Confirm</label>
								</div>
								<div class="form-group" id="type-insurance">
									<input id="insurance-type" type="text" name="type" class="input-material">
									<label for="insurance-type" class="label-material">type</label>
								</div>
								<a id="insurance-reg" class="btn btn-primary" style="color: #fff; cursor: pointer;">registration</a>
							</form>
							<br><small>Do you have an account already? </small><a role="button" class="signup" id="login-button" style="cursor: pointer">Login</a>
						</div>
					</div>
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
    <script src="js/custom.js"></script>
	<script>
		$(document).ready(function(){
			
			$("#loader").hide();
			
			$("#p-s-name").on('change',function(){
				var p_s_name = $("#p-s-name").val();
				$.ajax({
					type: "POST",
					url: "select_district.php",
					data: "p_s_name="+p_s_name,
					success: function(data){
						$("#district").val(data);
					}
				});
			});
			
			$("#police-reg").click(function (){
				var name = $("#p-s-name").val();
				var u_name = $("#p-name").val();
				var district = $("#district").val();
				var pincode = $("#p-s-pincode-area").val();
				var phone = $("#p-s-phone").val();
				var email = $("#p-s-emailid").val();
				var pass = $("#p-s-pass").val();
				var con_pass = $("#p-s-pass-confirm").val();
				var u_type = $("#police-type").val();
//				alert("data get");
				$.ajax({
					type: "POST",
					url: "reg.php",
					data: "name="+u_name+"&org_name="+name+"&district="+district+"&org_reg_no="+pincode+"&email="+email+"&phone="+phone+"&pass="+pass+"&u_type="+u_type,
					beforeSend: function(){
								$("#loader").show(1000);
							},
					success: function(data){
						if(data == "yes"){
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration sucessfully...!");
							$("#loader").hide();
						}
						else{
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration sucessfully..!");
							$("#loader").hide();
						}
					}
				});
			});
			$("#rto-reg").click(function(){
				var name = $("#rto-name").val();
				var u_name = $("#rto-u-name").val();
				var email = $("#rto-emailid").val();
				var phone = $("#rto-phone").val();
				var password = $("#rto-pass").val();
				var con_pass = $("#rto-pass-confirm").val();
				var u_type = $("#rto-type").val();
//				alert("data are"+name+"_"+email+"_"+phone+"_"+password+"_"+ur_name);
				$.ajax({
					type:"POST",
					url: "reg.php",
					data: "name="+u_name+"&org_name="+name+"&email="+email+"&phone="+phone+"&pass="+password+"&u_type="+u_type,
					beforeSend: function(){
								$("#loader").show(1000);
							},
					success: function(data){
						if(data == "yes"){
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration sucessfully...!");	
							$("#loader").hide();
						}
						else{
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration sucessfully..!");
							$("#loader").hide();
						}
					}
				});
			});
			$("#insurance-reg").click(function(){
				var name = $("#i-c-name").val();
				var u_name = $("#i-c-u-name").val();
				var code = $("#i-c-code").val();
				var email = $("#i-c-emailid").val();
				var phone = $("#i-c-phone").val();
				var pass = $("#i-c-pass").val();
				var con_pass = $("#i-c-pass-confirm").val();
				var u_type = $("#insurance-type").val();
//				alert(""+name+" "+code+" "+email+" "+phone+" "+pass+" "+pass)
				$.ajax({
					type: "POST",
					url: "reg.php",
					data: "name="+u_name+"&org_name="+name+"&org_reg_no="+code+"&email="+email+"&phone="+phone+"&pass="+pass+"&u_type="+u_type,
					beforeSend: function(){
								$("#loader").show(1000);
							},
					success: function(data){
						if(data == "1"){
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration sucessfully...!");
							$("#loader").hide();
						}
						else{
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration sucessfully..!");
							$("#loader").hide();
						}
					}
				});
			});
		});
	</script>
  </body>
</html>