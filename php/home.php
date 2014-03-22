<?php
//build html
	$html = <<<HTML
		<div class="block">
			<div class="label">
				Short Bio
			</div>	
			<div class="words">
				<img src="resources/images/me.jpg" align="left" style="height: 300px;">
				I'm a Senior UI Engineer, currently working for Djed Studios. I've been a software engineer since '09 and I've been really enjoying concentrating on UIs since '12. In my free time I like to try out different JS frameworks. Currently I am making a ping pong league app in Ember JS. Check out my code on github if you are interested. 
			</div>
		</div>

		<div class="block" style="clear: both;">
			<div class="label">
				Contact Me
			</div>	
			<div class="words">
				I can be reached by phone or email. Feel free to call or email me. Also, my current projects that I'm working on at home can be found on my get hub account. Follow the icon below to redirect to github.
				<p>Phone: 979-966-9997</p>
				<p>Email: friemelb at gmail.com</p>
				<div class="socialPanel">	
					<a href="http://www.linkedin.com/pub/bradley-friemel/49/952/ba9" target="_blank"><div class='linkedInImg'></div></a>
					<a href="https://github.com/FreamTheDream" target="_blank"><div class='gitHubImg'></div></a>	
				</div>	
			</div>
		</div>
HTML;

	echo($html);
?>
