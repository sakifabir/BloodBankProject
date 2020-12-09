$(document).ready(function(){


	// about
	var x = 0;

	$('#about_us').on( "click", function(){
		if (x == 0) {
			$('#app_view_normal').hide("slow");
			$('#app_view_contact').hide("slow");
			$('#app_view_about').show("slow");
			x = 1;
		}
		else if(x == 1) {
			$('#app_view_normal').show("slow");
			$('#app_view_about').hide("slow");
			$('#app_view_contact').hide("slow");
			x = 0;
		}
	});

	// contact

	$('#contact_us').on( "click", function(){
		if (x == 0) {
			$('#app_view_normal').hide("slow");
			$('#app_view_about').hide("slow");
			$('#app_view_contact').show("slow");
			x = 1;
		}
		else if(x == 1) {
			$('#app_view_normal').show("slow");
			$('#app_view_contact').hide("slow");
			$('#app_view_about').hide("slow");
			x = 0;
		}
	});

});