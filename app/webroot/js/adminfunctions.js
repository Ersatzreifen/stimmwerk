$(document).ready(function() {
	$('.ajax').click(function(e) {
		e.preventDefault();
		$(this).html('<img src=\"/img/admin/icons/loading.gif\" />');

		$(this).load($(this).attr('href'));
	})
})
 