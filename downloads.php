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
		<p>
		Welcome to the downloads page for the Parallel Tools Platform (including Photran).
		</p>
		<p><b>Note: September 27, 2013:</b> Eclipse Kepler 4.3 SR1 is now available. Even if you already have PTP 7.0.3,
		you may want to update the rest of your Eclipse workbench.  Read on...</p>
		<p>
		The latest release of PTP is <b><font size=+1>7.0.3</font></b>, released August 15, 2013 which works with <b>Eclipse Kepler (4.3) including the Eclipse Kepler SR1 (Service Release 1) Release</b>.
		Whether you have just the parallel package from the Kepler June release, or have already upgraded
		it to PTP 7.0.3 from the PTP-specific update site, <b>Help > Check for Updates</b>
		should update everything for you!
		</p>
    	<p>
    	Please see the <font size=+1><a href="http://wiki.eclipse.org/PTP/release_notes/7.0">
      	release notes and installation instructions</a></font> for prerequisite information 
     	and instructions on installing PTP Release 7.0.x.
     	</p>
      	<p>
      	The <b>Eclipse for Parallel Application Developers</b> now contains  <font size=+1>PTP 7.0.3</font>
      	in the Kepler SR1 release. 
        This is now available from the 
      	<a href="http://eclipse.org/downloads">Eclipse downloads</a> page. 
      	If you already have an Eclipse Kepler package installed, <b>Help > Check for Updates</b> should update anything that's down-level.
      	</p>
      	<p>As always, once you have an Eclipse Kepler package, you can use the "Help > Install New Software..." menu
      	to install the latest PTP and its pre-requisites from the PTP-specific update site:
		<b>http://download.eclipse.org/tools/ptp/updates/kepler</b>.
		But at the moment (September 27, Eclipse Kepler SR1 release), the main eclipse sites and the PTP-specific update site contain
		the same release of PTP (7.0.3) and Photran (8.3.1)
		</p>

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
<p>Other PTP builds are also available from the <a href="http://wiki.eclipse.org/PTP/builds">PTP builds page</a>.

<div class="homeitem3col">
<h3>File Downloads</h2>
<p><b>Archived Update Site, Sysmon Stand-alone System Monitoring, Updated Parallel Package builds, and RDT server components</b>
<p>Available from <a href="http://download.eclipse.org/tools/ptp/updates/kepler">PTP 7.0.3 file downloads</a>:
<ul>
<li>Archived update site (ptp-master)
<li>Sysmon, Stand-alone System Monitoring for PTP
<li>Updated all-in-one <b>Parallel Package</b> builds with the latest release of PTP pre-installed
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
