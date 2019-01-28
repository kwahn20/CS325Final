
"use strict";
let emailRegex = /^([\w\d\-\.]+)@{1}(([\w\d\-]{1,67})|([\w\d\-]+\.[\w\d\-]{1,67}))\.(([a-zA-Z\d]{2,4})(\.[a-zA-Z\d]{2})?)$/;
$(document).ready(function(){
	// same as above real time validation
	$('.validEmail').addClass('hidden');
	$('#emailValid').keyup(function(){
		if ($(this).val().match(emailRegex)){
			$('.invalid').remove(); // removes old error messages
			$('.validEmail').removeClass('hidden');
			$('.validEmail').show();
		}
	});
    $(".contactValidator").submit(function(e){
		$('.invalid').remove(); // removes old error messages
		e.preventDefault();
        	let email = $('#emailValid').val();
        	if (email.length < 1 ||!email.match(emailRegex)){
          	$('#emailValid').after("<span class='invalid'> Please enter a valid email</span>");
          	$('.validEmail').addClass('hidden'); // hides the valid text line, no need for regex matching here
        	}
		else {
			$.ajax({
				type:'post',
				url:'emailGenerator.php',
				success:function(response){ 
				}
			});
		}
	});
});