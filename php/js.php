<?php
//build html
	$html = <<<HTML
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Information</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>I gained JavaScript experience while working at Baytek International. There I worked on their legacy system for a few months with JavaScript. In the legacy system I created UIs that used a framework called EXTJS. EXTJS is a JavaScript framework for building UIs. I also did all the UI logic in JavaScript. I then went on to lead my own project there in JavaScript, HTML, and PHP. In that project, I created UIs and utilized JavaScript for all the front end logic. At NextGen, I have been using JavaScript. I created UIs in EXTJS. This involved creating various screens and data bound forms. I created a class that utilized table top to query data from google spreadsheets, a method that would recursively scrape a EXTJS page, grab, and add the data to a json variable, the ability for real time updates using node. For NextGen, I have also been creating UIs using a JavaScript framework called AngularJS. This involved creating routes, views, templates, and controllers. As with HTML and CSS, I do not have many public examples of my JavaScript work, since all of it so far has be for private companies. Below are a few examples on what I can do in JavaScript.</p>
	
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Muddywatersoftware.com</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>I built this page to utilize jQuery to change the content HTML. I do this by creating a JavaScript function that calls the content div and replaces the HTML with jQuery. This is done by listening to the css3 animation end. When the animation ends, I can tell the target of the click which allows me to serve up the correct HTML. You can browse to muddywatersoftware.com, right click, and view source. This can also be found on gitHub by clicking the icon on the left.</p>

<a href="http://www.muddywatersoftware.com" target="_blank"><div class='muddyWaterImg'></div></a>

	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">EXTJS 4 Pizza Creator</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>	
	<p>This is an example EXTJS 4 form. This shows a way of laying out and grouping fields. I have set the input values, so that when a value can be pulled instead of pulling the text of the fields. I have also grouped the radio buttons together, so I can have only one active at a time.</p>
	<iframe width="100%" height="300" src="http://jsfiddle.net/bfriemel/UcLrx/embedded/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
	
	
HTML;

	echo($html);
?>
