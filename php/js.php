<?php
//build html
	$html = <<<HTML
		<div class="block">
			<div class="label">
				Information
			</div>	
			<div class="words">
				I gained JavaScript experience while working at Baytek International. There I worked on their legacy system for a few months with JavaScript. In the legacy system I created UIs that used a framework called EXTJS. EXTJS is a JavaScript framework for building UIs. I also did all the UI logic in JavaScript. I then went on to lead my own project there in JavaScript, HTML, and PHP. In that project, I created UIs and utilized JavaScript for all the front end logic. At NextGen, I have been using JavaScript. I created UIs in EXTJS. This involved creating various screens and data bound forms. I created a class that utilized table top to query data from google spreadsheets, a method that would recursively scrape a EXTJS page, grab, and add the data to a json variable, the ability for real time updates using node. For NextGen, I have also been creating UIs using a JavaScript framework called AngularJS. This involved creating routes, views, templates, and controllers. I then went to work at Volusion, a ecommerce software solution. I created UI in EXTJS. At the company I worked on their website building solution as well as their inventory management and user management. Below are a few examples on what I can do in JavaScript.
			</div>
		</div>

		<div class="block">
			<div class="label">
				Ping pong Managment System
			</div>	
			<img src="resources/images/pal.png" style="height: 200px;">
			<div class="words">
				This page utilizes Ember JS. Using Ember, I set up a MVC system and deep linking to a specific table. This is running off mock data currently, but could be switched over to load the models from a REST enb point. 
			<a href="http://www.muddywatersoftware.com" target="_blank"><div class='muddyWaterImg'></div></a>
			</div>
		</div>

		<div class="block">
			<div class="label">
				LightTheSunMusic.com
			</div>	
			<img src="resources/images/lts.png" style="height: 200px;">
			<div class="words">
				This a site I build for a local band. The site is integrated with twitter, sound cloud, and reverb nation. Html is served up from PHP pages and jquery assigns the html to the content. 
			</div>
		</div>
		
		<div class="block">
			<div class="label">
				Muddywatersoftware.com
			</div>	
			<img src="resources/images/muddywaterScreen.png" style="height: 200px;">
			<div class="words">
				I built this page to utilize jQuery to change the content HTML. I do this by creating a JavaScript function that calls the content div and replaces the HTML with jQuery. This is done by listening to the css3 animation end. When the animation ends, I can tell the target of the click which allows me to serve up the correct HTML. You can browse to muddywatersoftware.com, right click, and view source. This can also be found on gitHub by clicking the icon on the left.
			<a href="http://www.muddywatersoftware.com" target="_blank"><div class='muddyWaterImg'></div></a>
			</div>
		</div>
		
		<div class="block">
			<div class="label">
				EXTJS 4 Pizza Creator
			</div>	
			<div class="words">
				This is an example EXTJS 4 form. This shows a way of laying out and grouping fields. I have set the input values, so that when a value can be pulled instead of pulling the text of the fields. I have also grouped the radio buttons together, so I can have only one active at a time.
			<iframe width="100%" height="300" src="http://jsfiddle.net/bfriemel/UcLrx/embedded/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
			<a href="http://www.muddywatersoftware.com" target="_blank"><div class='muddyWaterImg'></div>
			</div>
		</div>
	
	
HTML;

	echo($html);
?>
