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
<h1>PTP Documentation</h1>
<h2>Getting Started</h2>
<ul>
<li>For installation help, see the <a href="http://wiki.eclipse.org/PTP/release_notes/8.0">Release notes</a>
<li>Read the <a href="http://help.eclipse.org/luna/topic/org.eclipse.ptp.doc.user/html/toc.html">PTP Help</a>
<li>See the <a href="http://wiki.eclipse.org/PTP/tutorials">PTP Tutorials</a>
<li>Read and ask questions on the <a href="http://dev.eclipse.org/mhonarc/lists/ptp-user/">ptp-users mailing list</a>
<li>See more information on the <a href="http://wiki.eclipse.org/PTP">PTP Wiki</a> and at the links below.
</ul>
<h2>PTP 9.0  release information</h2>
<p>The following links are available for the current release of PTP 9.0 - based on Eclipse Mars (4.5)
<ul>
<li><a href="http://wiki.eclipse.org/PTP/release_notes/9.0">PTP 9.0 Release Notes</a>
<li><a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/9.0.0">New and Noteworthy features in PTP 9.0</a>
<li><a href="http://help.eclipse.org/mars/topic/org.eclipse.ptp.doc.user/html/toc.html">Parallel Tools Platform User Guide </a>.  To see this within Eclipse, install PTP and select Help > Help Contents.
<li><a href="http://help.eclipse.org/mars/index.jsp?nav=%2F44">PTP Developer's Guide</a>
<!--  need a toc.html or something to link to in developer's guide - update the above link after Kepler SR2 release if i have a good toc.html to link to-->
<li><a href="http://help.eclipse.org/mars/topic/org.eclipse.photran.doc.user/html/toc.html">Photran User Guide</a> 
</ul>
<!--
<h2>PTP 8.0  release information</h2>
<p>The following links are available for the current release of PTP 8.0 - based on Eclipse Luna (4.4)
<ul>
<li><a href="http://wiki.eclipse.org/PTP/release_notes/8.0">PTP 8.0 Release Notes</a>
<li><a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/8.0.0">New and Noteworthy features in PTP 8.0</a>
<li><a href="http://help.eclipse.org/kepler/topic/org.eclipse.ptp.doc.user/html/toc.html">Parallel Tools Platform User Guide </a>.  To see this within Eclipse, install PTP and select Help > Help Contents.
<li><a href="http://help.eclipse.org/kepler/index.jsp?nav=%2F44">PTP Developer's Guide</a>
<li><a href="http://help.eclipse.org/kepler/topic/org.eclipse.photran.doc.user/html/toc.html">Photran User Guide</a> 
<li><a href="http://help.eclipse.org/kepler/topic/org.eclipse.ptp.rdt.doc.user/html/toc.html">Remote Development Tools User Guide</a>
</ul>
<h2>PTP 7.0  release information</h2>
<p>The following links are available for  PTP 7.0 - based on Eclipse Kepler (4.3)
<ul>
<li><a href="http://wiki.eclipse.org/PTP/release_notes/7.0">PTP 7.0 Release Notes</a>
<li><a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/7.0.0">New and Noteworthy features in PTP 7.0</a>
<li><a href="http://help.eclipse.org/kepler/topic/org.eclipse.ptp.doc.user/html/toc.html">Parallel Tools Platform User Guide </a>.  To see this within Eclipse, install PTP and select Help > Help Contents.
<li><a href="http://help.eclipse.org/kepler/index.jsp?nav=%2F44">PTP Developer's Guide</a>
<li><a href="http://help.eclipse.org/kepler/topic/org.eclipse.photran.doc.user/html/toc.html">Photran User Guide</a> 
<li><a href="http://help.eclipse.org/kepler/topic/org.eclipse.ptp.rdt.doc.user/html/toc.html">Remote Development Tools User Guide</a>
</ul>
<h2>PTP 6.0  release information</h2>
<p>The following links are available for  PTP 6.0 - based on Eclipse Juno (4.2)
<ul>
<li><a href="http://wiki.eclipse.org/PTP/release_notes/6.0">PTP 6.0 Release Notes</a>
<li><a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/6.0.0">New and Noteworthy features in PTP 6.0</a>
<li><a href="http://help.eclipse.org/juno/topic/org.eclipse.ptp.doc.user/html/toc.html">Parallel Tools Platform User Guide (including PLDT and ETFw)</a>.  To see this within Eclipse, install PTP and select Help > Help Contents.
<li><a href="http://help.eclipse.org/juno/topic/org.eclipse.ptp.doc.isv/provisional_api.html">PTP Developer's Guide</a>
<li><a href="http://help.eclipse.org/juno/topic/org.eclipse.photran.doc.user/html/basic/GettingStarted.html">Photran User Guide</a> 
<li><a href="http://help.eclipse.org/juno/topic/org.eclipse.ptp.rdt.doc.user/html/toc.html">Remote Development Tools User Guide</a>
</ul>
<h2>PTP 5.0  release information</h2>
<p>The following links are available for the current release of PTP 5.0. 
<ul>
<li><a href="http://wiki.eclipse.org/PTP/release_notes/5.0">PTP 5.0 Release Notes</a>
<li><a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/5.0.0">New and Noteworthy features in PTP 5.0</a>
<li><a href="http://help.eclipse.org/indigo/topic/org.eclipse.ptp.doc.user/html/toc.html">Parallel Tools Platform User Guide (including PLDT and ETFw)</a>.  To see this within Eclipse, install PTP and select Help > Help Contents.
<li><a href="http://help.eclipse.org/indigo/topic/org.eclipse.ptp.doc.isv/provisional_api.html">PTP Developer's Guide</a>
<li><a href="http://help.eclipse.org/indigo/topic/org.eclipse.photran.doc.user/html/basic/GettingStarted.html">Photran User Guide</a> 
<li><a href="http://help.eclipse.org/indigo/topic/org.eclipse.ptp.rdt.doc.user/html/toc.html">Remote Development Tools User Guide</a>
</ul>

<h2>PTP 4.0  release information</h2>
<p>The following links are available for the current release of PTP 4.0.  To see this within Eclipse, install PTP and select Help > Help Contents.
<ul>
<li><a href="http://wiki.eclipse.org/PTP/release_notes/4.0">PTP 4.0 Release Notes</a>
<li><a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/4.0.0">New and Noteworthy features in PTP 4.0</a>
<li><a href="http://help.eclipse.org/helios/topic/org.eclipse.ptp.help/html/toc.html">Parallel Tools Platform User Guide (including PLDT and ETFw)</a>
<li><a href="http://help.eclipse.org/helios/nav/38">Photran User Guide</a> and
<a href="http://help.eclipse.org/helios/topic/org.eclipse.photran.doc.user/html/basic/InstallingPhotran.html">Photran Installation help</a>
<li><a href="http://help.eclipse.org/helios/topic/org.eclipse.ptp.rdt.doc.user/html/toc.html">Remote Development Tools User Guide</a>
</ul>
<h2>PTP 3.0  release information</h2>
<p>The following links are available for the previous release of PTP 3.0.  To see this within Eclipse, install PTP and select Help > Help Contents.
<ul>
<li><a href="documentation/3.0/org.eclipse.ptp.help/html/toc.html">PTP Help</a> and <a href="documentation/3.0/org.eclipse.ptp.help/html/00newNoteworthy.html">New in 3.0</a>
and <a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/3.0.0">New and Noteworthy features in  PTP 3.0</a>
<li><a href="documentation/3.0/org.eclipse.ptp.pldt.help/html/toc.html">PLDT Help</a> and <a href="documentation/3.0/org.eclipse.ptp.pldt.help/html/whatsnew.html">New in 3.0</a>
<li><a href="documentation/3.0/org.eclipse.ptp.rm.ibm.pe.help/html/PEMainHelp.html">IBM Parallel Environment (PE) Resource Manager</a>
<li><a href="documentation/3.0/org.eclipse.ptp.rm.ibm.ll.help/html/IBMLLMainHelp.html">IBM Loadleveler (LL) Resource Manager</a>
<li><a href="documentation/3.0/org.eclipse.ptp.rdt.doc.user/html/toc.html">RDT: Remote Development Tools</a>
<li><a href="http://wiki.eclipse.org/PTP/PTFw/PTFw-Overview">External Tools Framework (ETFw) / Performance Tools Framework (PTFw)</a>
<li><a href="http://wiki.eclipse.org/PTP/ETFw/PTP_External_Tools_Framework_Feedback_View">External Tools Framework (ETFw) Feedback view</a>
</ul>
<h2>PTP 2.1  release information</h2>
<p>The following links are available for the previous release of PTP 2.1.  To see this within Eclipse, install PTP and select Help > Help Contents.
<ul>
<li><a href="documentation/2.1/org.eclipse.ptp.help/html/toc.html">PTP Help</a> and <a href="documentation/2.1/org.eclipse.ptp.help/html/00newNoteworthy.html">New in 2.1</a>
<li><a href="documentation/2.1/org.eclipse.ptp.pldt.help/html/toc.html">PLDT Help</a> and <a href="documentation/2.1/org.eclipse.ptp.pldt.help/html/whatsnew.html">New in 2.1</a>
<li><a href="documentation/2.1/org.eclipse.ptp.ibmpe.help/html/PEMainHelp.html">IBM Parallel Environment (PE) Resource Manager</a>
<li><a href="documentation/2.1/org.eclipse.ptp.ibmll.help/html/IBMLLMainHelp.html">IBM Loadleveler (LL) Resource Manager</a>
<li><a href="documentation/2.1/org.eclipse.ptp.rdt.doc.user/html/toc.html">RDT: Remote Development Tools</a>
<li><a href="http://wiki.eclipse.org/PTP/PTFw/PTFw-Overview">External Tools Framework (ETFw) / Performance Tools Framework (PTFw)</a>
</ul>
<p>Additional information for PTP 2.1:
<ul>
<li><a href="http://wiki.eclipse.org/PTP/release_notes/2.1">PTP 2.1 release notes</a> including installation directions
</ul>
-->

<h1>Tutorials, Presentations, and other papers</h1>
<h2>Tutorials</h2>
<ul>
<li>For tutorial materials see the <a href="http://wiki.eclipse.org/PTP/tutorials">Tutorial Materials page on the PTP wiki</a>
</ul>

<h2>Presentations</h2>
<ul>
<li>For more recent materials see the <a href="http://wiki.eclipse.org/PTP/articles">Articles page on the PTP wiki</a>
<p>
<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=373">Static Analysis in PTP with CDT</a>, Beth Tibbitts, EclipseCon 2008, March 2008
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/Power.org_2007.pdf?cvsroot=Tools_Project"><i>IDEs and Eclipse - Myths and Facts About the Worlds Greatest IDE</i></a>, Greg Watson, Power.org Power Architecture Summit, April 2007
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/stmcs07_Tibbitts_EclipsePTPa.pdf?cvsroot=Tools_Project">
<i>An Integrated Tools Platform for Multi-Core Enablement</i></a>, Beth Tibbitts & Evelyn Duesterwald, STMCS: Second Workshop on Software Tools for Multi-Core Systems , March 2007
(See also <a href="http://www.isi.edu/~mhall/stmcs07/program.html">here</a>.)
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/EclipseCon_2007.pdf?cvsroot=Tools_Project">
<i>Parallel Tools Platform - Now and the Future</i></a>, Greg Watson, EclipseCon 2007, March 2007
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/EclipseCon_2007_C_and_C++_Code_Introspection_Using_The_CDT.pdf?cvsroot=Tools_Project">
<i>C and C++ Code Introspection Using the CDT</i></a> (includes analysis in PTP's PLDT), Beth Tibbitts and Chris Recoskie, EclipseCon 2007, March 2007
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/EclipseCon_2007_DevelopingParallelApps.pdf?cvsroot=Tools_Project">
<i>Developing Parallel Applications: The PTP's PLDT</i></a>, Beth Tibbitts, EclipseCon 2007, March 2007
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/HPCWPL_2006.pdf?cvsroot=Tools_Project"><i>Programming Environments and Debugging</i></a>, Greg Watson, Workshop on Programming Languages for High Performance Computing, December 2006
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/CDT_2006.pdf?cvsroot=Tools_Project"><i>Parallel Tools Platform - Parallel Debugger</i></a>, Greg Watson, CDT Fall Summit, September 2006
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/Cluster_2006.pdf?cvsroot=Tools_Project"><i>A Model Based Framework for the Integration of Parallel Tools</i></a>, Greg Watson, 2006 IEEE International Conference on Cluster Computing, September 2006
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/UTK_2006.pdf?cvsroot=Tools_Project"><i>The Eclipse Parallel Tools Platform: A Framework and Community for Integrating Parallel Tools</i></a>, Greg Watson & Craig Rasmussen, Invited Presentation, University of Tennessee, Knoxville, 2006
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/HPCS_Lang_2006.pdf?cvsroot=Tools_Project"><i>Achieving the P in HPCS</i></a>, Greg Watson, HPCS Languages Workshop, July 2006
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/EclipseCon_2006.pdf?cvsroot=Tools_Project"><i>Parallel Application Development with Eclipse</i></a>, Greg Watson, EclipseCon 2006, March 2006
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/CDT_2005.pdf?cvsroot=Tools_Project"><i>Extending CDT to Debug Parallel Programs</i></a>, Greg Watson, CDT Fall Summit, September 2005
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/LLNL_2005.pdf?cvsroot=Tools_Project"><i>The Eclipse Parallel Tools Platform Project</i></a>, Greg Watson, Invited Seminars at Lawrence Livermore National Laboratory and Sandia National Laboratory, April 2005
<p>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/presentations/EclipseCon_2005.pdf?cvsroot=Tools_Project"><i>The Eclipse Parallel Tools Platform Project</i></a>, Greg Watson, EclipseCon 2005, February 2005
</ul>
<h2>Articles and White Papers</h2>
<ul>
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

<!--  
<h2>Previous Release (1.1)</h2>	
<p>The previous release (1.1) of the PTP User Guide (also available from the help plug-ins in the PTP installation) is available here.
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

</td>
</tr>
</table>
-->

</div>



EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
