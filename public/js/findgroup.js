function editAccount(){
	$("#saveAccountInfo").prop("disabled",false);
	$("#aboutMe").prop("disabled",false);
}

function saveAccount(){
	$("#saveAccountInfo").prop("disabled",true);
	$("#aboutMe").prop("disabled",true);
	$('#accountSaveNotify').fadeIn().delay(2000).fadeOut();		
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

function uploadProfilePic(){
	$.post('/uploadprofilepic',
		$("#upladProfilePicForm").serialize(),
		function(data){
			console.log(data);
		});
}