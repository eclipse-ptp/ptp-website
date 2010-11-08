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
		<p>Welcome to the downloads page for the Parallel Tools Platform (incuding Photran). The latest release of PTP is <b><font size=+1>4.0.4</font></b></p>
    <p>Please see the <font size=+1><a href="http://wiki.eclipse.org/PTP/release_notes/4.0">
      release notes and installation instructions</a><font size=-1> for prerequisite information 
      and instructions on building and installing PTP Release 4.0.  

<p>
<b><font size=+1>PTP 4.0.3</font></b> is part of the Eclipse Helios (3.6)
Service Release 1 (SR1), released on September 24, 2010, 
available using the Eclipse Installation Manager from the Helios update site: 
<a href="http://download.eclipse.org/releases/helios">http://download.eclipse.org/releases/helios</a>
</p>
<p>
The <b><font size=+1>PTP 4.0.4</font></b> release is now available from the PTP update site: 
<a href="http://download.eclipse.org/tools/ptp/updates/helios">http://download.eclipse.org/tools/ptp/updates/helios</a>
</p>

<p>Other PTP builds are also available from the <a href="http://wiki.eclipse.org/PTP/builds">PTP builds page</a>.

<div class="homeitem3col">
  <h3>Proxy Agent and Scalable Debug Manager (SDM) Source Code</h3>
  <p>The IBM LoadLeveler, IBM PE, and SLURM proxy agents, and the SDM need to be built and installed from source code.
  <table>
        <tr bgcolor="#CCCCCC">
          <th width="20%"  scope="col"><div align="left">Version</div></th>
          <th width="80%"  scope="col"><div align="left">Download</div></th>
        </tr>
        <tr>
          <td><div align="left">4.0.4</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/helios/ptp-proxy-4.0.4-I201011051906.zip">ptp-proxy-4.0.4-I201011051906.zip</a></div></td>
        </tr>
        <tr>
          <td><div align="left">4.0.3</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/galileo/ptp-proxy-4.0.4-I201011051906.zip">ptp-proxy-4.0.4-I201011051906.zip</a></div></td>
        </tr>
  </table>  
</div>

<div class="homeitem3col">
  <h3>Remote Development Tools (RDT) Server Components</h3>
  <p>Two Remote Providers work with RDT:
  <ul>
  <li>Remote Tools (part of PTP) - the remote server components are moved to the remote target automatically.
  <li>RSE -   RDT server components need to be separately installed on the remote target
  if you are using the RSE Remote Provider. See the <a href="http://wiki.eclipse.org/PTP/builds/4.0.4">4.0.4 builds page</a> to download these archives.
  </ul>
</div>
      
  
<div class="homeitem3col">
<h3>Previous releases</h3>
<p>Download information for <a href="downloads_3_0.php">PTP 3.0</a>.
<p>Download information for <a href="downloads_2_1.php">PTP 2.1</a>.

</div>
 
    <div class="homeitem3col">
  <h3>Fortran Development Tools (Photran)</h3>
<p>Photran is now part of PTP and can be installed using the PTP 4.0 update site.</p?
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
