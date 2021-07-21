$(function() {
			new WOW().init();

			/*Ajax don't go away!*/
			$('form').submit(function(event) {
				event.preventDefault();
				$.ajax({
					type: "POST",
					url: "php/smart.php",
					data: $(this).serialize()
				}).done(function() {
					$(this).find("input").val("");
					alert("Сообщение успешно отправлено. Благодарю!");
					$("form").trigger("reset");
				});
				return false;
			});
			
			$('form').submit(function(event) {
				event.preventDefault;
				$('.popup').fadeOut('slow/400/fast', function() {
					
				});
			});

			// Popup
			$('#popup-btn').click(function(event) {
			    	event.preventDefault();
			    	$('.popup').fadeIn('slow/400/fast', function() {
			    		
			    	});
			    });
			    $('.popup-close').click(function(event) {
			    	event.preventDefault();
			    	$('.popup').fadeOut('slow/400/fast', function() {
			    		
			    	});
			    	/* Act on the event */
			    });



	$('input[type="tel"]').numeric();
});
