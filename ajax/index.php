<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GIT HUB AND SLACK</title>
</head>

<body>
	<form id="test_form" method="post">
		<input type="text" id="tb1" name="tb1">
		<input type="text" id="tb2" name="tb2"><br>
	</form>
	<button id="submit_form">Submit</button>
	<script src="jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#submit_form").click(function(){
				var textbox1 = $("#tb1").val();
				var textbox2 = $("#tb2").val();

				$.ajax({
					type: "POST",
					url: "insert.php",
					data: "tb1="+textbox1+"&tb2="+textbox2,
					success: function(data){
						alert("Success");
					}
				});
			});
		});
	</script>
</body>
</html>
