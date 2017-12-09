<!DOCTYPE html>
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
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
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
                  <form id="login-form" method="post">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div><a id="login" href="index.html" class="btn btn-primary">Login</a>
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

                <form id="police-form" method="post" action="registration.php">
                    <div class="form-group">
                        <input id="p-s-name" type="text" name="p_s_name" class="input-material">
                        <label for="p-s-name" class="label-material">Police Station Name</label>
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
                        <label for="p-s-phone" class="label-material">Police Station Phone Number</label>
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
                    <button type="submit" id="police-reg" href="index.html" class="btn btn-primary">registration</button>
                </form>

                <form id="rto-form" method="post" action="registration.php">
                    <div class="form-group">
                        <input id="rto-name" type="text" name="rto_name" class="input-material">
                        <label for="rto-name" class="label-material">RTO Name</label>
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
                        <label for="tro-pass" class="label-material">Enter Password</label>
                    </div>
                    <div class="form-group">
                        <input id="rto-pass-confirm" type="password" name="rto_pass_confirm" class="input-material">
                        <label for="rto-pass-confirm" class="label-material">Enter Password to Confirm</label>
                    </div>
                    <div class="form-group" id="type-rto">
                        <input id="rto-type" type="text" name="type" class="input-material">
                        <label for="rto-type" class="label-material">type</label>
                    </div>
                    <button type="submit" id="rto-reg" href="index.html" class="btn btn-primary">registration</button>
                </form>
                <form id="insurance-form" method="post" action="registration.php">

                    <div class="form-group">
                        <input id="i-c-name" type="text" name="i_c_name" class="input-material">
                        <label for="i-c-name" class="label-material">Company Name</label>
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
                    <button type="submit" id="insurance-reg" href="index.html" class="btn btn-primary">registration</button>
                </form>
                <br><small>Do you have an account already? </small><a role="button" class="signup" id="login-button" style="cursor: pointer">Login</a>
            </div>
        </div>
    </div>
</div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
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
			$('#police-reg').click(function(){
				onclick('#rto-reg');
			});
		});
			
	</script>
  </body>
</html>