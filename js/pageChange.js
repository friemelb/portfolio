$('.flex-container li').click(function (event) {	
	//change selected tab
    var selected = $('.flex-container').find('.active-nav').get(0);
    $(selected).removeClass('active-nav');
    $(this).addClass('active-nav');
	
	switch($(this).text().toLowerCase()){
		case 'bradley friemel':
		$.ajax({
		  type: "POST",
		  url: "php/home.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		case 'resume':
		$.ajax({
		  type: "POST",
		  url: "php/resume.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		case 'js':
		$.ajax({
		  type: "POST",
		  url: "php/js.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		case 'html/css':
		$.ajax({
		  type: "POST",
		  url: "php/html.php"
		}).done(function( msg ) {
		  $('.content').html(msg);
		});
		break;
		default:
		//Doesn't redirect if its a drop down
		if($(this).children('ul').length < 0){
			$.ajax({
			  type: "POST",
			  url: "php/broken.php"
			}).done(function( msg ) {
			  $('.content').html(msg);
			});	
		}
	}
});