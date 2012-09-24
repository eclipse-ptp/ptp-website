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
	$pageTitle 		= "Eclipse Parallel Tools Platform (PTP)";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<div id="bigbuttons">
		<h3>Primary Links</h3>
		<ul>
		<li><a id="buttonDownload" href="downloads.php" title="Download"></a></li>
		<li><a id="buttonDocumentation" href="doc.php" title="Documentation"></a></li>
		<li><a id="buttonSupport" href="support.php" title="Support"></a></li>
		<li><a id="buttonInvolved" href="developers.php" title="Getting Involved"></a></li>
		</ul>
	</div>

	<div id="midcolumn">
		<h3>Eclipse PTP</h3>
		<div id="introText">
			<p>The PTP project provides an integrated development environment to support the development of parallel applications written 
			in C, C++, and Fortran. Eclipse PTP provides:
	      	<ul>
		        <li>Support for the MPI, OpenMP and UPC programming models</li>
		        <li>Support for a wide range of batch systems and runtime systems, including PBS/Torque, LoadLeveler, GridEngine,
		        IBM Parallel Environment, Open MPI, and MPICH2</li>
		        <li>A scalable parallel debugger</li>
		        <li>Support for  the integration of a wide range of parallel tools</li>
			</ul>
			</p>
			<h3>Fortran Development Tools (Photran)</h3>
			<p>The <a href="http://eclipse.org/photran">Photran</a> project is now part of PTP. 
				Forming an integral part of the parallel tools platform, 
				Fortran language support provided by Photran is an essential tool for the parallel development community. 
				Please consult the <a href="http://wiki.eclipse.org/PTP/photran/documentation/photran5">Photran User's Guide</a>
				for information on downloading and installing this plug-in. 
				<a href="http://help.eclipse.org/indigo/topic/org.eclipse.photran.doc.user/html/toc.html">Online version of the Photran User's Guide</a> 
				is also available as part of the plug-in installation.
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
			<p>PTP 6.0.1 is the latest release with Eclipse Juno</p>
				</div>
		
		<div id="headlines">
		    <h3>PTP 6.0.1 Now Available with Eclipse Juno</h3>
		    <p><i>June 29, 2012 -</i> Check the <a href="downloads.php">Download</a> 
		    link on how to get yours. If you installed the 
		    <b>Eclipse for Parallel Application Developers</b> package,
		    please see <a href="http://wiki.eclipse.org/PTP/release_notes/6.0#Updating_from_the_Parallel_Package_to_a_more_recent_release">
		    Updating from the parallel package to a more recent release</a> on the PTP wiki.
		    </p>
		
			<h3>Eclipse for Parallel Application Developers now is based on Eclipse Juno </h3>
			<p><i>June 27, 2012 -</i> PTP 6.0 is now the basis of this package in the 
			Eclipse Juno release. Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
		
			
			<h3>More Information</h3>
			<p>The <a href="http://wiki.eclipse.org/PTP">PTP Wiki</a> is often the best source of up-to-date information on PTP for Developers and Users.
	
		</div>
		
	
	</div>
	   

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
