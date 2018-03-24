<!DOCTYPE html>
<?php
include("../db_connect.php");
session_start();
$aadhar=$_POST['aadhar'];
//echo($aadhar);
$sql = "SELECT in_no,name,in_type,no_name,no_phone,email,exp_date,ammount FROM insurance where aadhar_no='$aadhar'";
//echo($sql);
$result = mysqli_query($conn,$sql)or die(mysqli_error());

												
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
            <!-- Form Panel    -->
            <div class="col-lg-12 bg-white" id="login-form">
            
            <div class="data" style="padding: 50px;">
				<section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">List Of Policys</h3>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Policy Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Nominee Name</th>
                            <th>Nominee Phone</th>
                            <th>Policy EXP Date</th>
                            <th>Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                         	<?php 
							while($row = mysqli_fetch_array($result)){
							echo("<tr>");
								echo("<td>".$row['in_no']."</td>");
								echo("<td>".$row['name']."</td>");
								echo("<td>".$row['email']."</td>");
								echo("<td>".$row['no_name']."</td>");
								echo("<td>".$row['no_phone']."</td>");
								echo("<td>".$row['exp_date']."</td>");
								echo("<td>".$row['ammount']."</td>");
								?><td><a role="button" class="btn btn-sm btn-primary" href="claim_insert_form.php?policy_no=<?php echo($row['in_no']) ?>" style="color: #FFFFFF;
">Claim</a></td><?php
							echo("</tr>");
								
								}
							?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </section>
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
		
		});
	</script>
  </body>
</html>