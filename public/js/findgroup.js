function editAccount(){
	$("#saveAccountInfo").prop("disabled",false);
	$("#aboutMe").prop("disabled",false);
}

function saveAccount(){
	$("#saveAccountInfo").prop("disabled",true);
	$("#aboutMe").prop("disabled",true);	
}

function saveAccountInfo(){
	$.post('/edituser',
	{
		about: $("#aboutMe").val()
	},
	function(data){
		console.log(data);
		saveAccount();
	});
}