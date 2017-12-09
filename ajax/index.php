<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>
</head>

<body>

<div class="register_container">
<form class="form-signin" method="post" id="register-form">
<h2 class="form-signin-heading">User Registration Form</h2><hr />
<div id="error">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
<span id="check-e"></span>
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
</div>
<hr />
<div class="form-group">
<button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
<span class="glyphicon glyphicon-log-in"></span>   Create Account
</button>
</div>
</form>
</div>
</body>
</html>