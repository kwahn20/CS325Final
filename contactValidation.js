
"use strict";
let emailRegex = /^([\w\d\-\.]+)@{1}(([\w\d\-]{1,67})|([\w\d\-]+\.[\w\d\-]{1,67}))\.(([a-zA-Z\d]{2,4})(\.[a-zA-Z\d]{2})?)$/;
$(document).ready(function(){
	// same as above real time validation
	$('.validEmail').addClass('hidden');
	$('#email').keyup(function(){
		if ($(this).val().match(emailRegex)){
			$('.invalid').remove(); // removes old error messages
			$('.validEmail').removeClass('hidden');
			$('.validEmail').show();
		}
		else {
            $('.validEmail').addClass('hidden');
        }
	});
    $(".contactValidator").submit(function(e){
		$('.invalid').remove(); // removes old error messages
        let email = $('#email').val();
        let name = $('#name').val();
        let comment = $('#msgContent').val();
        if (email.length < 1 ||!email.match(emailRegex)|| name.length < 1 || comment.length < 1){
                e.preventDefault();
            	$('#email').after("<span class='invalid'>Please Fill out all Fields</span>");
             	$('.validEmail').addClass('hidden'); // hides the valid text line, no need for regex matching here

        }
		else {
			$.ajax({
				type:'post',
				url:'http://emailGenerator.php',
				success:function(){
					$('.invalid').innerHTML("Message has been sent");
					$('.invalid').show();
				}
			});
		}
	});
});