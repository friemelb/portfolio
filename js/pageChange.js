$('.navMenu ul li').click(function (event) {	
	//change selected tab
    var selected = $(".navMenu ul").find('.activeTab').get(0);
    $(selected).removeClass('activeTab');
    $(this).addClass('activeTab');
	
	switch($(this).text().toLowerCase()){
		case 'resume':
		$.ajax({
		  type: "POST",
		  url: "php/resume.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		case 'js examples':
		$.ajax({
		  type: "POST",
		  url: "php/js.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		case 'php examples':
		$.ajax({
		  type: "POST",
		  url: "php/php.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		case 'html/css examples':
		$.ajax({
		  type: "POST",
		  url: "php/html.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		default:
		$.ajax({
		  type: "POST",
		  url: "php/broken.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});	
	}
	
});