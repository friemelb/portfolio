<?php
//build html
	$html = <<<HTML
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Information</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>I gained experience in HTML and CSS when I was in college creating a user management system for a company called Mubo. The UI was built primarily out of HTML. Later, at Baytek International, HTML and EXTJS were the base languages I used for creating UIs. At NextGen, I create prototype application pages in HTML and interlace them with Angular JS. I also create HTML templates that are utilized in EXTJS and Angular JS. I have been heavily working in CSS at NextGen. I have styled EXTJS components to look like design documents that I have received from designers and have also applied animations to EXTJS components. I program my CSS in SCSS, which compiles out to CSS. This allows me to create logical statements that generate the intended CSS. This also allows me to use Compass. I created the standard at NextGen on how to utilize Compass to generate sprite sheets and how to utilize them in SCSS. I do not have many public examples of my html work, since all of it so far has be for private companies. However, below I have a few examples on what I can do in HTML and CSS. </p>
	
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Bradleyfriemel.com</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>This page has a tab-like configuration, which has a persistent information panel with a set height scrolling content div. You can check the code by right clicking and viewing the source. I have not obfuscated the code. This can also be found on gitHub by clicking the icon on the left.</p>
	
	<a><div class='portfolioImg'></div></a>

	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Muddywatersoftware.com</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>	
	<p>This page has more of a floating content div. That I changed out based on which nav item is clicked. I do with with jQuery and CSS3 animations. The way I accomplish this is by listening to the end of the CSS3 animation and changing the content html with jQuery. You can check the code by right clicking and viewing the source. I have not obfuscated the code. This can also be found on gitHub by clicking the icon on the left.</p>
	
	<a href="http://www.muddywatersoftware.com" target="_blank"><div class='muddyWaterImg'></div></a>
	
HTML;

	echo($html);
?>
