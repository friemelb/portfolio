<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
 
//build html
	$html = <<<HTML
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Information</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>I gained PHP experience from working at Baytek International. There I was tasked with building a CRUD application that administrators could use to configure the legacy system. I built a PHP system that was able to switch between MySql, SqlServer, and Oracle. That required having variables that could be set, so the user could switch between the different databases when they wanted too. I expanded the backend by having data authentication. If it failed to authenticate I would return errors to the UI that would be handled. I then trained the rest of the team on how to use the system and program in PHP. I also worked in PHP in college for a startup called Mubo. My teammate and I created a PHP system that would handle user creation in a system. I specifically worked on creating PHP classes that handled more of the administration tasks. For instance, I created a PHP class that would tie into a UI and allow the administrator to manage who was logged into the system. While I do not have many public examples of my PHP work, since all of it so far has be for private companies, I have a few examples below on what I can do in PHP and this site uses PHP for its backend. I also will be using PHP for my own project that is currently in the very early alpha build and planning stage. </p>
	
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Bradleyfriemel.com</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>This is an example of how to use JavaScript, jQuery, and PHP to serve up web content. What is happening is that I have attached a jQuery click event to the tabs. When the click happen it hits a PHP page to request the content that is supposed to be served to the content div. I have separated the pages into different files for easy of maintenance. When the PHP page returns the HTML content, I use jQuery to set the HTML of the content div. This creates a single load web page with a PHP backend. This can be found on gitHub by clicking the icon on the left.</p>

<a><img class='portfolioImg'></img></a>

	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Find a missing number recursively</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>This is an example of a recursive statement that will find a missing entity in the array. This is just an exercise in PHP and recursion. I created this example in a back end language because if there is a recursive statement running in a frontend language like JavaScript there is a possibility that the browser memory would be consumed and it would crash. This would only happen if the array was huge and there were many calls. If this needed to be accomplished in the frontend, it would be better to do it in a loop. This would have a constant memory consumption. </p>
HTML;

	echo($html);
	highlight_file('numberFinder.php'); 
?>
