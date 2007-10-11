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
<p>PTP 1.1 is now released - see the <a href="downloads.php">downloads page</a>.
          
     </div>   
     
  <div class="homeitem3col">
  <h3>PLDT: Parallel Language Development Tools</h3>
  <p>PLDT contains the MPI Development Tools, plus similar tools for other tools such as OpenMP.
  <p>PLDT 1.1 needs Eclipse 3.2 and CDT 3.1.  See the <a href="downloads.php">downloads page</a>
  for the release version.
  
  <p><b>PLDT 2.0</b>
  <p>PLDT 2.0 needs Eclipse 3.3 and CDT 4.0.  
  This early access version is made available here prior to the availability of the rest of PTP 2.0.
  <p>New features in PLDT 2.0 include:
  <ul>
  <li>MPI barrier analysis to detect possible deadlocks in MPI programs.</li>
  <li>Eclipse welcome page leads to PTP info.  </li>
  <li>Wizard improvements including allowing sample MPI file insertion.</li>
  <li>LAPI supported (separate installation)
  <li>To use PLDT 2.0, download Eclipse 3.3.x from <a href="http://eclipse.org/downloads">the Eclipse downloads page</a>,
  and install CDT 4.0.1, e.g. from the update site.
  <br>
  A good choice is to use the new simplified download for Eclipse + C/C++ development available on 
<a href="http://eclipse.org/downloads">the Eclipse downloads page</a>.
  </li>
  </ul>
      
     <p>
        <ul>
		<li>10 October 2007 build (beta 2): 
		<table>
		<tr>
			<td><a 
				href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt.2.0.0-beta2-I200710101509.tar">
			org.eclipse.ptp.pldt.2.0.0-beta2-I200710101509.tar</a></td>
			<td>PLDT (MPI & OpenMP)</td>
		</tr>
<tr>
			<td><a 
				href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt.2.0.0-beta2-I200710101509.zip">
			org.eclipse.ptp.pldt.2.0.0-beta2-I200710101509.zip</a></td>
			<td>PLDT (MPI & OpenMP)</td>
		</tr>
		<tr>
			<td><a
          href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt.lapi.2.0.0-beta2-I200710102303.tar">
			org.eclipse.ptp.pldt.lapi.2.0.0-beta2-I200710102303.tar</a></td>
			<td>PLDT support for IBM's LAPI</td>
		</tr>
<tr>
			<td><a
          href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt.lapi.2.0.0-beta2-I200710102303.zip">
			org.eclipse.ptp.pldt.lapi.2.0.0-beta2-I200710102303.zip</a></td>
			<td>PLDT support for IBM's LAPI</td>
		</tr>
	    </table>
          </li>
          <li>28 June 2007 build (beta 1): 
		<table>
		<tr>
			<td><a 
				href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt-2.0.0-I200706281121.zip">
			org.eclipse.ptp.pldt-2.0.0-I200706281121.zip</a></td>
			<td>PLDT (MPI & OpenMP)</td>
		</tr>
		<tr>
			<td><a
				href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/org.eclipse.ptp.pldt.lapi-2.0.0-I200706281121.zip">
			org.eclipse.ptp.pldt.lapi-2.0.0-I200706281121.zip</a></td>
			<td>PLDT support for IBM's LAPI</td>
		</tr>
	    </table>
          </li>
    
        </ul>
        <p>&nbsp;
          
     </div>   
</div>
 
  

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
