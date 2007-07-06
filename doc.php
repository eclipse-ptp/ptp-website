<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# doc.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-12
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Documentation";
	$pageKeywords	= "PTP, user guide";
	$pageAuthor		= "Beth Tibbitts";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
<h1>User Guides</h1>
		
<p>The current release (1.1) of the PTP User Guide (also available from the help plug-ins in the PTP installation) is available here.
<p><a href="documentation/org.eclipse.ptp.help/html/newNoteworthy.html">New and Noteworthy</a>:
What's new in PTP Release 1.1. 
<p><a href="docs/install.html">How to install Eclipse and CDT for PTP</a>
<p>Click on the screen shots below for  full-size images of the PTP Runtime and Debug Perspectives.
Click on the Help links to read the help on-line.
<table border="1">
<tr>
<td><font size="+2"><a href="documentation/org.eclipse.ptp.help/html/toc.html">
PTP 1.1 Help</a></font>
<br>Screen shots:<br>
<table>
<tr><td>PTP Runtime Perspective<br>
<a href="documentation/images/runtime_perspective_col_ann.png">
<img src="documentation/images/runtime_perspective_col_ann_small.png">
</a>
</td><td>PTP Debug Perspective<br>
<a href="documentation/images/debug_perspective_col_ann.png">
<img src="documentation/images/debug_perspective_col_ann_small.png">
</a>
</td>
</table>
</td>
</tr><tr>
<td><font size="+2"><a href="documentation/org.eclipse.ptp.pldt.help/html/toc.html">PLDT 1.1 help</a></font>
<br>PTP PLDT (Parallel Language Development Tools) 

<table>
<tr><td>MPI and OpenMP Development Tools<br>
Screen shots: <br>
<a href="documentation/images/ptp-mpi-help2.gif">
<img src="documentation/images/ptp-mpi-help2_small.gif">
</a>
</td>
</table>

</td>
</tr>
</table>

<h1>Tutorials</h1>
<ul>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/tutorials/SC2006.pdf?cvsroot=Tools_Project">
PTP Tutorial</a> from SC 2006 in Tampa, FL
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/tutorials/PTP-workshop.pdf?cvsroot=Tools_Project">
PTP Tutorial</a> from Los Alamos Computer Science Institute (Fall 2005)
</ul>
<h1>Presentations</h1>
<h1>Articles and White Papers</h1>
<li><a href="http://www.computer.org/portal/site/cise/menuitem.92a12adebee18778161489108bcd45f3/index.jsp?&pName=cise_level1_article&TheCat=1001&path=cise/2006/v8n4&file=sci.xml&">
			  <i>Developing Scientific Applications Using Eclipse</i></a>
			  by Greg Watson and Nathan Debardeleben of PTP fame, is in the July/August 2006
			  issue of <a href="http://www.computer.org/portal/site/cise/index.jsp">
			  Computing in Science &amp; Engineering</a> magazine.
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/whitepapers/PTPWPv9.pdf?cvsroot=Tools_Project">
<i>A Strategy for Addressing the Needs of Advanced Scientific Computing Using Eclipse as a Parallel Tools Platform</i></a>, Whitepaper written by Greg Watson and Craig Rasmussen
 </ul>
 <p>&nbsp;
  <p>&nbsp;
	</div>



EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
