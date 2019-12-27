
function scroll_to_class(chosen_class) {
	var nav_height = $('nav').outerHeight();
	var scroll_to = $(chosen_class).offset().top - nav_height;

	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}
function add_fields() {


			var  res = document.getElementById('child-stat').value;
			console.log(res);
			if (res =="no") {
				rem_fields();

			}else {
				document.getElementById('wrapper').innerHTML += 'Name of child: <input type="text"><br><br>';

			}

}



jQuery(document).ready(function() {


	$(document).ready(function() {
var max_fields_limit      = 8; //set limit for maximum input fields
var x = 1; //initialize counter for text box
$('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
	 e.preventDefault();
	 if(x < max_fields_limit){ //check conditions
			 x++; //counter increment
			 $('.input_fields_container_part').append('<div><input type="text" name="tags[]" placeholder="Enter name of child"/><a href="#" class="remove_field" style="margin-left:-30px;"><br>Remove</a></div><br>'); //add input field
	 }
});
$('.input_fields_container_part').on("click",".remove_field", function(e){ //user click on remove text links
	 e.preventDefault(); $(this).parent('div').remove(); x--;
})
});









	/*
	    Fullscreen background
	*/
	$.backstretch("assets/img/backgrounds/1.jpg");

	/*
	    Multi Step Form
	*/
	$('.msf-form form fieldset:first-child').fadeIn('slow');

	// next step
	$('.msf-form form .btn-next').on('click', function() {
		$(this).parents('fieldset').fadeOut(400, function() {
	    	$(this).next().fadeIn();
			scroll_to_class('.msf-form');
	    });
	});

	// previous step
	$('.msf-form form .btn-previous').on('click', function() {
		$(this).parents('fieldset').fadeOut(400, function() {
			$(this).prev().fadeIn();
			scroll_to_class('.msf-form');
		});
	});


});
