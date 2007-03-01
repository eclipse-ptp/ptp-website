<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_busypage.php
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
	$pageTitle 		= "PTP User Guide and other Documentation";
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
		<h1>$pageTitle</h1>
		
<p>The current release of the PTP User Guide (also available from the help plug-ins in the PTP installation) is available here.
<p>Click on the screen shots below for a full-size image.
Click on the Help links to read the help on-line.
<table border="1">
<tr>
<td><font size="+2"><a href="documentation/org.eclipse.ptp.help/html/toc.html">PTP Help</a></font>

<br>
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
<td><font size="+2"><a href="documentation/org.eclipse.ptp.mpi.help/html/toc.html">PTP MPI Development Tools Help</a></font>

<table>
<tr><td>MPI Development Tools<br>
<a href="documentation/images/ptp-mpi-help2.gif">
<img src="documentation/images/ptp-mpi-help2_small.gif">
</a>
</td>
</table>

</td>
</tr>
</table>
<p><a href="documentation/org.eclipse.ptp.help/html/toc.html">PTP 1.1 help TOC</a> | 
<a href="documentation/org.eclipse.ptp.help/html/newNoteworthy.html">New and Noteworthy</a> | 
<a href="documentation/org.eclipse.ptp.pldt.help/html/toc.html">PLDT 1.1 help</a> | 

<p>Note: PLDT (Parallel Language Development Tools) combine MPI with OpenMP tools.  It will be included in PTP 1.1 but
is available in early release form on the <a href="builds.php">builds page</a>.  The PLDT help includes information about
OpenMP tools.
<h2>Other PTP Information:</h2>
<ul>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/tutorials/SC2006.pdf?cvsroot=Tools_Project">
PTP Tutorial</a> from SC 2006 in Tampa, FL
<p>
<li>Whitepaper written by 
Greg Watson and Craig Rasmussen,
<a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/whitepapers/PTPWPv9.pdf?cvsroot=Tools_Project">
A Strategy for Addressing the Needs of Advanced Scientific Computing Using Eclipse as a Parallel Tools Platform
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/tutorials/PTP-workshop.pdf?cvsroot=Tools_Project">
PTP Tutorial</a> from Los Alamos Computer Science Institute (Fall 2005)
<p>
<li><a href="http://www.computer.org/portal/site/cise/menuitem.92a12adebee18778161489108bcd45f3/index.jsp?&pName=cise_level1_article&TheCat=1001&path=cise/2006/v8n4&file=sci.xml&">
			  <i>Developing Scientific Applications Using Eclipse</i></a>
			  by Greg Watson and Nathan Debardeleben of PTP fame, is in the July/August 2006
			  issue of <a href="http://www.computer.org/portal/site/cise/index.jsp">
			  Computing in Science &amp; Engineering</a> magazine.
 </ul>
 <p>&nbsp;
  <p>&nbsp;
	</div>



EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
