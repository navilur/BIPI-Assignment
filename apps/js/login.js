

$(document).ready(function(){
//$("#studnet_reg").hide();
$("#Teacher_reg").hide();
$("#Employee_reg").hide();


$('#teacher').click(function(){
	$("#Employee_reg").hide();
	$("#studnet_reg").hide();
	$("#Teacher_reg").show();
});


$('#student').click(function(){
	$("#Employee_reg").hide();
	$("#studnet_reg").show();
	$("#Teacher_reg").hide();
	});	



$('#Employee').click(function(){
	$("#Employee_reg").show();
	$("#studnet_reg").hide();
	$("#Teacher_reg").hide();
	});	


$("#SSC").hide();
$('#btn_SSC').click(function(){
	$("#SSC").show();
	});

});




	


	











