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
    
    <p>These files below contain recent builds of PTP and PLDT
    <p>Please see the <a href="docs/releases/release-1.1.php">release notes</a> for information on how to install this release of PTP and PLDT.
 
 
    <div class="homeitem3col">
  <h3>PTP Core</h3>
  <p>PTP Core contains the core runtime and debugging support for parallel programs. 
  <p>PTP Core needs Java 1.5, Eclipse 3.2, and CDT 3.1
  <p>For OpenMPI support, PTP requires OpenMPI 1.2 (b4 or later) or 1.0.2.
  <p>For MPICH2 support, PTP requires MPICH2 1.0.5p2.

     <p>
        <ul>

       <li>22 February 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200702222000.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200702222000.tar.gz</a>
          
       <li>14 February 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200702141535.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200702141535.tar.gz</a>

       <li>3 February 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200702030940.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200702030940.tar.gz</a>
          
       <li>28 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701282100.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701282100.tar.gz</a>

       <li>25 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701250850.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701250850.tar.gz</a>

        <li>19 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701191300.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701191300.tar.gz</a>

        <li>16 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701161500.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701161500.tar.gz</a>

        <li>14 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701142000.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701142000.tar.gz</a>

        <li>12 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701121100.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701121100.tar.gz</a>

        <li>10 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701101100.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701101100.tar.gz</a>
        
        <li>09 January 2007: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200701091500.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200701091500.tar.gz</a>

        <li>11 December 2006: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200612111900.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200612111900.tar.gz</a>
 
        <li>24 November 2006: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200611240900.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200611240900.tar.gz</a>
        
        <li>11 November 2006: 
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp-1.1.0-I200611111400.tar.gz" >
          
          org.eclipse.ptp-1.1.0-I200611111400.tar.gz</a>
          
     </div>   
     
  <div class="homeitem3col">
  <h3>PLDT: Parallel Language Development Tools</h3>
  <p>PLDT contains the MPI Development Tools, plus similar tools for OpenMP.
  <p>PLDT needs Eclipse 3.2 and CDT 3.1.

     <p>
        <ul>
		<li>08 January 2007:
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt-1.1.0-I200701082248.zip" >
          org.eclipse.ptp.pldt-1.1.0-I200701082248.zip</a>
          <p>Progress monitor improved; option to not show popup confirmation dialog.
      	<li>13 December 2006:
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt-1.1.0-I200612131333.zip" >
          org.eclipse.ptp.pldt-1.1.0-I200612131333.zip</a>
          <p>More info when cannot find artifacts; finds artifacts altered by preprocessor defines; MPI constants now found again; 
          remembers selection in navigator better.  Hopefully one more build will come on Friday.
          
        <li>18 July 2006:
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt-1.0.0-I200607181525.zip" >
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
