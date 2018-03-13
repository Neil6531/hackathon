
<html>
<body>
<form method="post" id="rto_licence"  action="regRto_Driving_licence.php" >
<input type="text" id="name" name="name">
<br>
<input type="date" id="b_o_date" name="d_o_b">
<br>
<input type="text" id="blood_group" name="blood_group">
<br>
<input type="date" id="issue_date" name="issue_date">
<br>
<input type="date" id="exp_date" name="exp_date">
<br>
<select name="licence_type"  id="licence_type">
<option>Select</option>
<option value="1">Two wheeler</option>
<option value="2">Three Wheeler</option>
<option value="3">Four Wheeler</option>
</select>
<br>
<input type="number" id="adhar_no" name="aadhar_no">
<br>
<input type="text" id="phone" name="phone">
<br>
<input type="text" id="address" name="address">
<br>
<input type="submit" id="submit" name="registration" value="registration">
</form>
<script>
/*$(document).ready(function(){
		$("#submit").click(function(){
				var name = $("#name").val();
				var d_o_b = $("#b_o_date").val();
				var blood_group = $("#blood_group").val();
				var issue_date = $("#issue_date").val();
				var exp_date = $("#exp_date").val();
				var licence_type = $("#licence_type").val();
				var aadhar_no = $("#adhar_no").val();
				var phone = $("#phone").val();
				var address = $("#address").val();
				$.ajax({
					type: "POST",
					url: "regRto_Driving_licence.php",
					data: "name="+name+"&d_o_b="+d_o_b+"&blood_group="+blood_group+"&issue_date="+issue_date+"&exp_date="+exp_date+"&licence_type="+licence_type+"&aadhar_no="+aadhar_no+"&phone="+phone+"&address="+address,
					success:function(data){
						if(data == "yes")
						{
								alert("success");
						}
						else{
							alert("not success");
							}

					}
				

				});
		});

});*/
</script>
</body>
</html>