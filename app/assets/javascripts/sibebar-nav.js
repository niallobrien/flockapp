// Show/hide the flocks menu on hover
$(document).ready(function(){
	$("#flocks-sidemenu").hide();
	$('#flocks-menu-item').hover(function(){
		$('#flocks-sidemenu').fadeToggle("fast");
	});
});
