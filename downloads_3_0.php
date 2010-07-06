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
		<p>Welcome to the downloads page for the Parallel Tools Platform. The latest release is <b><font size=+1>3.0.1</font></b></p>
    <p>Please see the <font size=+1><a href="http://wiki.eclipse.org/PTP/release_notes/3.0">
      release notes and installation instructions</a><font size=-1> for prerequisite information 
      and instructions on building and installing PTP Release 3.0.  

<p>PTP is installed from the Eclipse update site: <a href="http://download.eclipse.org/tools/ptp/releases/galileo">http://download.eclipse.org/tools/ptp/releases/galileo</a>
</p>
<p>Other PTP builds are also available from the <a href="http://wiki.eclipse.org/PTP/builds">PTP builds page</a>


  <div class="homeitem3col">
  <h3>Remote Development Tools (RDT) Server Components</h3>
  <table>
  <tr>
    <td align=left valign=top >
        <tr bgcolor="#CCCCCC">
          <th width="34%"  scope="col"><div align="left">Platform</div></th>
          <th width="10%"  scope="col"><div align="left">Version</div></th>
          <th width="56%"  scope="col"><div align="left">Download</div></th>
        </tr>
        <tr>
          <td>Linux</td>
          <td><div align="left">3.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/galileo/rdt-server-linux-3.0.1.tar">rdt-server-linux-3.0.1.tar</a></div></td>
        </tr>
        <tr>
          <td>Unix</td>
          <td><div align="left">3.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/galileo/rdt-server-unix-3.0.1.tar">rdt-server-unix-3.0.1.tar</a></div></td>
        </tr>
		<tr>
          <td>MacOS X</td>
          <td><div align="left">3.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/galileo/rdt-server-macosx-3.0.1.tar">rdt-server-macosx-3.0.1.tar</a></div></td>
        </tr>
		<tr>
          <td>Windows</td>
          <td><div align="left">3.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/galileo/rdt-server-windows-3.0.1.zip">rdt-server-windows-3.0.1.zip</a></div></td>
        </tr>
      </table>   
  </div>
      
  
<div class="homeitem3col">
<h3>Previous releases</h3>
<p>The <a href="downloads_2_1.php">Release 2.1</a> download information is also available.

</div>
 
    <div class="homeitem3col">
  <h3>Fortran Development Tools (Photran)</h3>
<p>Photran is now part of PTP and can be installed using the PTP 3.0 update site.</p?
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