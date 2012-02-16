<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-11
	#
	# Description: Main PTP site root page
	#
	#
	#****************************************************************************
	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
	$localVersion = false;
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP - Eclipse Parallel Tools Platform";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<div id="bigbuttons">
		<h3>Primary Links</h3>
		<ul>
		<li><a id="buttonDownload" href="downloads.php" title="Download">
			Eclipse IDE for Parallel Application Developers, Software Install Site</a></li>
		<li><a id="buttonDocumentation" href="documentation.php" title="Documentation">
			Tutorials, Examples, Videos, Reference Documentation</a></li>
		<li><a id="buttonSupport" href="support.php" title="Support">
			Bug Tracker, Newsgroup</a></li>
		<li><a id="buttonInvolved" href="developers.php" title="Getting Involved">
			CVS, Workspace Setup, Wiki, Committers</a></li>
		</ul>
	</div>

	<div id="midcolumn">
		<h3>PTP - Parallel Tools Platform</h3>
		<div id="introText">
			<p>The aim of the parallel tools platform project is to produce an open-source industry-strength platform that 
			    provides a highly integrated environment specifically designed for parallel application development. 
			    The project provides:
	      	<ul>
		        <li>a standard, portable parallel IDE that supports a wide range of parallel architectures and runtime systems</li>
		        <li>a scalable parallel debugger</li>
		        <li>support for  the integration of a wide range of parallel tools</li>
		        <li>an environment that simplifies the end-user interaction with parallel systems </li>
			</ul>
			</p>
			<h3>Fortran Development Tools (Photran)</h3>
			<p>The <a href="http://eclipse.org/photran">Photran</a> project is now part of PTP. 
				Forming an integral part of the parallel tools platform, 
				Fortran language support provided by Photran is an essential tool for the parallel development community. 
				Please consult the <a href="http://wiki.eclipse.org/PTP/photran/documentation/photran5">Photran User's Guide</a>
				for information on downloading and installing this plug-in.
				Highlights include:
			<ul>
				<li>Support for IBM XLF, Intel Fortran, gfortran and other compilers</li>
				<li>Fortran editor with syntax highlighting</li>
				<li>Powerful refactoring support</li>
				<li>Managed build support</li>
			</ul>
			</p>
		</div>
	</div>
    
    <div id="rightcolumn">
		<div>
			<h3>Current Status</h3>
			<p>PTP 5.0 has been released with Eclipse Indigo!</p>
		</div>
		
		<div id="headlines">
			<h3>PTP 5.0 Now Available</h3>
			<p><i>June 22, 2011 -</i> Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
		</div>
		
		<div id="headlines">
			<h3>PTP 4.0.7 Now Available</h3>
			<p><i>February 25, 2011 -</i> PTP 4.0.7 and Photran 6.0.7 are the latest and last release in the Eclipse Helios series. 
				Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
		</div>
	
		<div id="headlines">
			<h3>PTP 4.0.6 Now Available</h3>
			<p><i>February 25, 2011 -</i> PTP 4.0.6 and Photran 6.0.6 are released with Helios Service Release 2 (Eclipse 3.6.2). 
				Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
		</div>
	</div>
	   

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
