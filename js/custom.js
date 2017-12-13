// JavaScript Document

$(document).ready(function(){
			$("#login-form").show();
			$("#registration-form").hide();
			$("#registration-button").click(function(){
				$("#login-form").hide();
				$("#registration-form").fadeIn(1000);
			});
			$("#login-button").click(function(){
				$("#registration-form").hide();
				$("#login-form").fadeIn(1000);
			});
			
			$("#rto-form").hide();
			$("#insurance-form").hide();
			$("#police-form").hide();
			$("#type-rto").hide();
			$("#type-insurance").hide();
			$("#type-police").hide();
	
			
			$("#user-type").on('change',function(){
				if(this.value == '1'){
					var type1 = "police";
					$("#rto-form").hide(400);
					$("#insurance-form").hide(400);
					$("#police-form").show(400);
					$('#police-type').val(type1);
				}
				
				else if(this.value == '2'){
					var type2 = "RTO";
					$("#insurance-form").hide(400);
					$("#police-form").hide(400);	
					$("#rto-form").show(400);
					$('#rto-type').val(type2);
				}
				
				else if(this.value == '3'){
					var type3 = "Insurance";
					$("#police-form").hide(400);	
					$("#rto-form").hide(400);
					$("#insurance-form").show(400);
					$('#insurance-type').val(type3);
				}
				
				else if(this.value == '0'){
					$("#police-form").hide(400);	
					$("#rto-form").hide(400);
					$("#insurance-form").hide(400);
				}
			});
		}); 