<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-11
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP - Parallel Tools Platform";
	$pageKeywords	= "Eclipse, Parallel Programming, Parallel debugger, MPI, OpenMP, OpenMPI, Fortran, C, C++";
	$pageAuthor		= "Beth Tibbitts   tibbitts@us.ibm.com";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>PTP - Parallel Tools Platform</h1>
		<h2>Section title</h2>
		<p>Intro text.<br /> <a href="#">more about something &raquo;</a> </p>
		<div class="homeitem">
			<h3>Phoenix conversion status</h3>
			<p>Converted to Phoenix: The faq and downloads pages are converted. 
			<ul>
				<li>The faq and downloads pages are converted, more or less.</li>
				<li>Need to work on this main page. </li>
			</ul>
		</div>
		<div class="homeitem">
			<h3>Sample PHP pages</h3>
			<ul>
				<li><a href="sample_3col.php">Sample 3 col</a>. </li>
				<li><a href="sample_4col.php">Sample 4 col</a>.</li>
				<li><a href="sample_busypage.php">Sample busy page</a>.  </li>
				<li><a href="sample_list.php">Sample list</a>.</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>This is a wide column</h3>
			<ul>
				<li><a href="main.html">Old main PTP page</a></li>
				<li><a href="index.html">Old main PTP page (w/nav)</a></li>
				<li><a href="contributors.html">Contributors</a></li>
				<li><a href="contributors.php">Contributors (new)</a></li>
				<li><a href="press.html">Press</a></li>
				<li><a href="index.html">Old main PTP page (w/nav)</a></li>
				<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
			</ul>
		</div>
		<hr class="clearer" />
		<p>Some free text</p>
		<ul class="midlist">
			<li>list of items in free text</li>
			<li>list of items in free text</li>
			<li>list of items in free text</li>
		</ul>
		<ol>
			<li>Ordered list</li>
			<li>Ordered list</li>
			<li>Ordered list</li>
		</ol>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PTP Information</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">PTP Wiki</a> </li>
				<li><a href="http://www.eclipsecon.org/2006/Sub.do?id=265">PTP Presentation at EclipseCon 2006</a> - by Greg Watson</li>
				<li><a href="http://eclipse.org/ptp/docs/whitepapers/PTPWPv9.pdf">PTP Whitepaper</a> - descriptive text</li>
				<li><a href="doc.html">PTP Help documention</a> </li>
				<li><a href="#">Link</a> - descriptive text</li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related links</h6>
			<ul>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
