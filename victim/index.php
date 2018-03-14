<!DOCTYPE html>
<?php
include('db_connect.php');
session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Integration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontastic.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="shortcut icon" href="../img/logo.png">
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
                <div class="content"><center><h2>Find insurance policy</h2></center><br><br>
                  <form id="login-form" method="post">
                    <div class="form-group">
                      <input id="claim_id" type="text" name="claim_id" class="input-material">
                      <label for="login-username" class="label-material">Aadhar Number</label>
                    </div>
                    <button class="btn btn-primary">Find</button>
                  </form>
                  <small>Do you have PRN to track </small><a role="button" class="signup" id="registration-button" style="cursor: pointer">Click Here</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-white" id="registration-form">
				<div class="form d-flex align-items-center">
					<div class="content">
							<small>To find insurance policy </small><a role="button" class="signup" id="login-button" style="cursor: pointer"> Click Here</a>
					</div>
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../js/front.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
						if(data == "1"){
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration sucessfully...!");
							$("#loader").hide();
						}
						else{
							$("#registration-form").hide();
							$("#login-form").fadeIn(500);
							alert("Registration unsucessfully..!");
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