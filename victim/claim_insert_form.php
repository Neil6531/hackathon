<!DOCTYPE html>
<?php
include('../db_connect.php');
session_start();
$policy_no = $_GET['policy_no'];
$sql = "SELECT p_s_name FROM police_station_location ORDER BY p_s_name";
$result = mysqli_query($conn,$sql)or die(mysqli_error());

$sql1 = "SELECT * FROM insurance where in_no = '$policy_no'";
$result1 = mysqli_query($conn,$sql1)or die(mysqli_error());
$row1 = mysqli_fetch_array($result1);

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
                <div class="content"><center><h2>Claim Your Policy</h2></center><br><br>
                  <form id="login-form" method="post" action="select_policy.php">
                    
                    <div class="form-group">
                      <input id="policy_no" type="text" name="policy_no" class="input-material" value="<?php echo($row1['in_no']); ?>">
                      <label for="policy_no" class="label-material">Policy Number</label>
                    </div>
                    
                    <div class="form-group">
                      <input id="fir_no" type="text" name="fir_no" class="input-material" >
                      <label for="fir_no" class="label-material">FIR Number</label>
                    </div>
                    
                    <div class="form-group">
						<label class="form-control-label">Select Police Station</label>
						<select name="p-s-name" class="form-control col-sm-9" id="p_s_name">
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
                      <input id="name" type="text" name="name" class="input-material" value="<?php echo($row1['name']); ?>">
                      <label for="name" class="label-material">Victim Name</label>
                    </div>
                    
                    <div class="form-group">
                      <input id="no_name" type="text" name="no_name" class="input-material" value="<?php echo($row1['no_name']); ?>">
                      <label for="no_name" class="label-material">Nominee Name</label>
                    </div>
                    
                    <div class="form-group">
                      <input id="no_phone" type="text" name="no_phone" class="input-material" value="<?php echo($row1['no_phone']); ?>">
                      <label for="no_phone" class="label-material">Nominee Phone</label>
                    </div>
                    
                    <div class="form-group">
                      <input id="no_email" type="text" name="no_email" class="input-material" value="<?php echo($row1['email']); ?>">
                      <label for="no_email" class="label-material">Nomine Email</label>
                    </div>
                    
                    <div class="form-group">
                      <input id="com_name" type="text" name="com_name" class="input-material" value="<?php echo($row1['com_name']); ?>">
                      <label for="com_name" class="label-material">Insurance Company Name</label>
                    </div>
                    
                  </form>
                  <input type="submit" value="Submit Claim" class="btn btn-primary" id="submit_claim">
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
			$("#submit_claim").click(function(){
				var policy_no = $("#policy_no").val();
				var fir_no = $("#fir_no").val();
				var p_s_name = $("#p_s_name").val();
				var name = $("#name").val();
				var no_name = $("#no_name").val();
				var no_phone = $("#no_phone").val();
				var no_email = $("#no_email").val();
				var com_name = $("#com_name").val();
				
//				alert(policy_no+"  "+fir_no+"  "+p_s_name+"  "+name+"  "+no_name+"  "+no_phone+"  "+no_email+"  "+com_name);
				
				$.ajax({
					type : "POST",
					url : "insert_new_claim.php",
					data : "policy_no="+policy_no+"&fir_no="+fir_no+"&p_s_name="+p_s_name+"&name="+name+"&no_name="+no_name+"&no_phone="+no_phone+"&no_email="+no_email+"&com_name="+com_name,
					beforeSend :function(){
						swal("Please Wait..!");	
					},
					success : function(data){
						swal(data);
					}
				});
			});
		});
	</script>
  </body>
</html>