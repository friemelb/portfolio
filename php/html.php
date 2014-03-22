<?php
//build html
	$html = <<<HTML
		<div class="block">
			<div class="label">
				Information
			</div>	
			<div class="words">
					I gained experience in HTML and CSS when I was in college creating a user management system for a company called Mubo. The UI was built primarily out of HTML. Later, at Baytek International, HTML and EXTJS were the base languages I used for creating UIs. At NextGen, I create prototype application pages in HTML and interlace them with Angular JS. I also create HTML templates that are utilized in EXTJS and Angular JS. I have been heavily working in CSS at NextGen. I have styled EXTJS components to look like design documents that I have received from designers and have also applied animations to EXTJS components. I program my CSS in SCSS, which compiles out to CSS. This allows me to create logical statements that generate the intended CSS. This also allows me to use Compass. I created the standard at NextGen on how to utilize Compass to generate sprite sheets and how to utilize them in SCSS. At Volusion I did similar things that I did at NextGen. I did however lead the way the SCSS was structured and was developed. Below I have a few examples on what I can do in HTML and CSS.
			</div>
		</div>

		<div class="block">
			<div class="label">
				Bradleyfriemel.com
			</div>	
			<img src="resources/images/ps.png" style="height: 200px;">
			<div class="words">
This is a mobile first design that is reactive. I’m using media css queries to do various things upon resizing. 
			</div>
		</div>

		<div class="block">
			<div class="label">
				Ping pong Managment System
			</div>	
			<img src="resources/images/pal.png" style="height: 200px;">
			<div class="words">
				This page uses handlebars to generate all the html templates. I created a handlebars helper method through Ember JS. Also, I used twitter bootstrap for the css. 
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
			<div class="words" style="height: 100px">
This page has more of a floating content div. That I changed out based on which nav item is clicked. I do with with jQuery and CSS3 animations. The way I accomplish this is by listening to the end of the CSS3 animation and changing the content html with jQuery. You can check the code by right clicking and viewing the source. I have not obfuscated the code. This can also be found on gitHub by clicking the icon on the left.
			</div>
		</div>

	
HTML;

	echo($html);
?>
