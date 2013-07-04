<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# downloads.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2007-09-06
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Downloads";
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
		<p>Welcome to the downloads page for the Parallel Tools Platform (including Photran). 

		<p>The latest release of PTP is <b><font size=+1>7.0.1</font></b>, released July 2, 2013 which works with <b>Eclipse Kepler (4.3)</b>.
		</p>
    <p>Please see the <font size=+1><a href="http://wiki.eclipse.org/PTP/release_notes/7.0">
      release notes and installation instructions</a></font> for prerequisite information 
      and instructions on installing PTP Release 7.0.x.  
      <p><font size=+1>PTP 7.0.1</font> can be installed two ways:
      <ol><li>Install the <img src="images/ptp_logo_icon32.png"><b>Eclipse for Parallel Application Developers</b> from the 
      <a href="http://eclipse.org/downloads">Eclipse downloads</a> page.
       <b>Currently has PTP 7.0.0</b>. 
       Then update to 7.0.1 (see below, but it's essentially step 2(b)).
       </li>
      <li>Install into an existing Eclipse - first download Eclipse, and then use the Eclipse "Help > Install New Software..." menu
      to install PTP and its pre-requisites from:
      <ul type="a">
      <li>(a) The Eclipse Kepler update site: 
      <b>http://download.eclipse.org/releases/kepler</b>. 
      <br><b>Currently has PTP 7.0.0</b>
      <br>-or-
      <li>(b) The PTP-specific update site:
      <b>http://download.eclipse.org/tools/ptp/updates/kepler</b>. 
      <br><b>Currently has PTP 7.0.1</b>
      </ul>  
      See the <a href="http://wiki.eclipse.org/PTP/release_notes/7.0">release notes</a> for more details.
      </ol>
</p>
<p>

Currently, as of Eclipse Kepler (26 June 2013), the <b>Eclipse for Parallel Application Developers</b>
contains PTP 7.0.0. We suggest you install this and update from 
the PTP-specific update site 
<a href="http://download.eclipse.org/tools/ptp/updates/kepler">http://download.eclipse.org/tools/ptp/updates/kepler</a> 
will get you the latest PTP (7.0.1).

<!--
<ul>
<li>Enable or add this site in your "Available Software Sites" then install from there initially, or update (Help > Check for Updates).
<li>If you already have PTP 6.0.x installed <i>from the PTP-specific update site</i>, you should be able to do 
Help > Check for Updates...  to get any updates to PTP <i>since</i> the latest <b>Eclipse for Parallel Application Developers</b>, if any.  </li>
<li>If you initially installed the <b>Eclipse for Parallel Application Developers</b>, then 
follow the instructions for <a href="http://wiki.eclipse.org/PTP/release_notes/6.0#Updating_from_the_Parallel_Package_to_a_more_recent_release">Updating from from the Parallel Package to a more recent release</a>
to install PTP on top of that from
the PTP-specific update site; this gets the most recent update (or re-install the current release from there) and then Help > Check for Updates will find subsequent
PTP releases automatically.
</ul>
-->
</p>
<p>Other PTP builds are also available from the <a href="http://wiki.eclipse.org/PTP/builds">PTP builds page</a>.

<div class="homeitem3col">
<h3>Archived Update Site, Sysmon Stand-alone System Monitoring, and RDT server components</h3>
<p>Available from <a href="http://download.eclipse.org/tools/ptp/builds/7.0.1">PTP 7.0.1 file downloads</a>:
<ul>
<li>Archived update site (ptp-master)
<li>Sysmon, Stand-alone System Monitoring for PTP
<li>RDT server components - required if you are using the Remote System Explorer (RSE) as a remote service provider for RDT. If you are using Remote Tools
  (installed as part of PTP) the server components are installed automatically. See the release notes for more details on using RSE with RDT.
<li>...and other items
</ul>
   
<div class="homeitem3col">
<h3>Previous releases</h3>
<p>Download information for <a href="downloads_605.php">PTP 6.0</a> for Eclipse 4.2 (Juno).
<p>Download information for <a href="downloads_5_0.php">PTP 5.0</a> for Eclipse 3.7 (Indigo).
<p>PTP 4.0 was released for Eclipse 3.6 (Helios).
<p>PTP 3.0 was released for Eclipse 3.5 (Galileo).
<p>PTP 2.1 was released for Eclipse 3.4 (Ganymede).

</div>
 
    <div class="homeitem3col">
  <h3>Fortran Development Tools (Photran)</h3>
<p>Photran is now part of PTP and can be installed using the PTP update site.</p>
</div>
 

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Other useful sites</h6>
			<ul>
				<li><a href="http://www.open-mpi.org/">OpenMPI</a></li>
				<li><a href="http://www-unix.mcs.anl.gov/mpi/">MPI</a></li>
				<li><a href="http://eclipse.org/photran">Photran</a></li>
				
			</ul>
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
