<!DOCTYPE html>
<?php
include("../db_connect.php");
session_start();
$aadhar=$_POST['aadhar'];
//echo($aadhar);
$sql = "SELECT in_no,name,in_type,no_name,no_phone FROM insurance where aadhar_no='$aadhar'";
//echo($sql);
$result = mysqli_query($conn,$sql);

//$row = mysqli_fetch_row($result);
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
            
            <div class="data" style="padding: 50px;">
					<?php 
					while($row=mysqli_fetch_array($result)){
					?>
           		 <form id="login-form" method="post">
					<strong>Policy No : </strong><?php  echo($row["in_no"]);?><br>
				<strong>Name : </strong><?php echo($row["name"]);?><br>
				<strong>Insurance Type : </strong><?php echo($row["in_type"]);?><br>
				<strong>Nominee Name : </strong><?php echo($row["no_name"]);?><br>
				<strong>Nominee Phone : </strong><?php echo($row["no_phone"]);}?>
					
				  </form>
				  <form  id="claim_insert" method="post">
				  <br><br>
					<input type="text" placeholder="Enter FIR Number" id="fir_no">
					<br><br>
				  <input type="submit" name="claim"  value="Claim Insurance" class="btn btn-primary" id="submit_claim"/>
				</form>
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
			
			$("#submit_claim").click(function(){
				var f_no=$("#fir_no").val();
				$.ajax({
					type:"post",
					url:"claim_insert.php",
					data:"f_no="+f_no,
					success:function(data)
					{
						
					}
					
				});
				
			});
		});
	</script>
  </body>
</html>