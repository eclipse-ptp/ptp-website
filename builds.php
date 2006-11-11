<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# nightlyBuilds.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-07-11
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Builds";
	$pageKeywords	= "Type, page, keywords, here";
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
    
    <p>These files below contain  recent builds of portions of PTP,
    for early release.
       
 
    <div class="homeitem3col">
  <h3>PTP Core</h3>
  <p>PTP Core contains the core runtime and debugging support for parallel programs.
  <p>PTP Core needs Java 1.5, Eclipse 3.2, and CDT 3.1.

     <p>
        <ul>
        <li>10 November 2006: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/builds/org.eclipse.ptp-1.1.0-I200611101850.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200611101850.tar.gz</a>
          
     </div>   
     
    <div class="homeitem3col">
  <h3>PTP Runtime Source</h3>
  <p>PTP Runtime contains the source code to the non-Java components that are needed to support the core runtime and debugger.
  <p>PTP Runtime needs OpenMPI 1.2 or OpenMPI 1.0.2.

     <p>
        <ul>
        <li>10 November 2006: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/builds/org.eclipse.ptp-runtime-1.1.0-I200611101918.tar.gz" >
          
          org.eclipse.ptp-runtime-1.1.0-I200611101918.tar.gz</a>
          
     </div> 
     
  <div class="homeitem3col">
  <h3>PLDT: Parallel Language Development Tools</h3>
  <p>PLDT contains the MPI Development Tools, plus similar tools for OpenMP.
  <p>PLDT needs Eclipse 3.2 and CDT 3.1.

     <p>
        <ul>
        <li>11 July 2006: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/builds/org.eclipse.ptp.pldt-1.0.0-I200607112207.zip" >
          
          org.eclipse.ptp.pldt-1.0.0-I200607112207.zip</a>
          <p>Note: the help for PLDT incorrectly states that a fix is required to CDT for 
          PLDT.  This version of PLDT is  built for Eclipse 3.2 and CDT 3.1, which includes
          the required change.
        <li>18 July 2006:
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/builds/org.eclipse.ptp.pldt-1.0.0-I200607181525.zip" >
          org.eclipse.ptp.pldt-1.0.0-I200607181525.zip</a>
          <p>New project wizard now correctly includes MPI page; help corrected,
          misc. build problems corrected.
          </ul>
          <p>&nbsp;
          
     </div>   
</div>
 
  

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
