function validateEmail(email) { 
	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return reg.test(email);
}

$(document).ready(function() {
	$(".modalbox").fancybox();
	$("#contactForm").submit(function() {
		return false;
	});
	
	$("#send").on("click", function(){
		var emailval = $("#email").val();
		var msgval = $("#msg").val();
		var msglen = msgval.length;
		var mailvalid = validateEmail(emailval);
		
		if (mailvalid == false) {
			$("#email").addClass("error");
		}
        $("#email").change(function() {
            $("#email").removeClass("error");
        });
		
		if (msglen < 4) {
			$("#msg").addClass("error");
		}
        $("#msg").change(function() {
            $("#msg").removeClass("error");
        });
		
		if (mailvalid == true && msglen >= 4) {
			$("#send").replaceWith("<em>sending...</em>");
			
			$.ajax({
				type: 'POST',
				url: 'sendmessage.php',
				data: $("#contactForm").serialize(),
				success: function(data) {
					if(data == "true") {
						$("#contactForm").fadeOut("fast", function(){
							$(this).before("<p><strong>Success! Your message has been sent, thanks!</strong></p>");
							setTimeout("$.fancybox.close()", 2000);
						});
					}
				}
			});
			
		}
	});
});