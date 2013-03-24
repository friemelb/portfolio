<?php
//accept post param
$pData = $_POST['type'];
//build html
$html = <<<HTML
	<img src='css/images/underCon.png'></img>
HTML;
	
switch($pData){
	case 'Resume':
	$html = <<<HTML
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Education</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>Texas A&M University, Corpus Christi, Texas</p>
	<p>Bachelor of Science in Computer Science, December 2010</p>
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Experiance</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
				
	<p><b>Software Engineer - Next Gen Healthcare </b> (May 2012 – Current)</p>
	<p>NextGen builds medical management software for small to medium sized hospitals.</p>
	<p>They provide a SaaS or hosted solution that acts as a CMS for the industry.</p>
	<ul>
		<li>Lead UI engineer on NG7 project - a software system to manage all aspects of running a hospital. Current UI lead on patient financials project.</li>
		<li>Created UI for online application using Javascript, Jquery, HTML, CSS.</li>
		<li>Collaborate with data team to implement REST calls.</li>
		<li>Created internal standards around UI implementation.</li>
	</ul>
	<i>Technologies Used: JavaScript, Jquery, EXTJS, HTML, SCSS, CSS, REST, Gimp</i>
				
	<hr>
				
	<p><b>Software Engineer - Baytek International </b> (January 2011 – March 2012)</p>
	<p>Baytek International builds chemical management software for refineries.</p>
	<ul>
		<li>Led project in PHP with JavaScript front end.</li>
		<li>Created custom PHP framework.</li>
		<li>Developed queries to access / modify data in Sql Server, Oracle, and MySql</li>
		<li>Trained others how to code / use the PHP framework I created.</li>
	</ul>
	<i>Technologies Used: PHP, JavaScript, EXTJS, Sql, CSS</i>
				
	<hr>
				
	<p><b>Software Engineer (Internship Position) - QSROnline.com </b> (June 2009 – December 2010)</p>
	<p>QSROnline builds advanced restaurant management systems. The system integrates with the restaurants point of sale system to display data in a meaningful manor.</p>
	<ul>
		<li>Created windows forms in C#</li>
		<li>Developed stored procedures in SQL Server</li>
		<li>Developed export for Quickbooks, MAS 90, Peach Tree</li>
	</ul>
	<i>Technologies Used: C#, SQL</i>	
				
	<hr>
				
	<p><b>Undergrad Network Administrator - Texas A&M University</b> (November 2007 – June 2009)</p>
	<p>Fixed CAMs (computer science and math) computer issues.</p>
	<ul>
		<li>Kept specific computer labs running.</li>
		<li>Trouble shoot computer problems and GHOST CAMs labs</li>
		<li>Assist professors to install hardware and software</li>
		<li>Solve general computer issues in the Computer Science Department</li>
	</ul>
	<i>Technologies Used: C#, SQL</i>	
				
	<div class="ribbon-wrapper arrow_box">
		<div class="ribbon-front">
            <p class="ribbonText">Personal Skills</p>
		</div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	<p>JavaScript, PHP, EXTJS, HTML, CSS3, CSS, SASS, Compass, Jquery, C#, C++,</p>
	<p>SQL Server, Oracle, MySql, GIT, Computer Networking, Computer Hardware, Cisco</p>
HTML;
	break;	
}
	
	echo($html);
?>