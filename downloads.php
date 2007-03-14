<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-11
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
		<p>Welcome to the downloads page for  the 1.1 release of the Parallel Tools Platform. <br>
    Please see the <a href="docs/releases/release-1.1.php">
      Release notes</a> for prerequisite and installation information. </p>
    <p>The files below contain the current release of PTP. To install PTP you now only
    need to download the PTP Core component. The PLDT component can be installed independently of PTP Core.
    Download and install the plugins and features into your Eclipse installation, then follow the release
    notes to build the architecture specific parts.</p>
     
  <div class="homeitem3col">
  <h3>PTP Core</h3>
  <table>
  <tr>
    <td align=left valign=top >
        <tr bgcolor="#CCCCCC">
          <th width="34%"  scope="col"><div align="left">Platform</div></th>
          <th width="10%"  scope="col"><div align="left">Release</div></th>
          <th width="56%"  scope="col"><div align="left">Download</div></th>
        </tr>
        <tr>
          <td>All</td>
          <td><div align="left">1.1</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/org.eclipse.ptp-1.1.0.tar.gz">org.eclipse.ptp-1.1.0.tar.gz</a></div></td>
        </tr>

      </table>   
      </div>
  <div class="homeitem3col">
  <h3>Parallel Language Development Tools</h3>
     <table>
  <tr>
    <td align=left valign=top >
        <tr bgcolor="#CCCCCC">
          <th width="34%"  scope="col"><div align="left">Platform</div></th>
          <th width="10%"  scope="col"><div align="left">Release</div></th>
          <th width="56%"  scope="col"><div align="left">Download</div></th>
        </tr>
        <tr>
          <td>All</td>
          <td><div align="left">1.1</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/org.eclipse.ptp.pldt-1.1.0.tar.gz">org.eclipse.ptp.pldt-1.1.0.tar.gz</a></div></td>
        </tr>
        <tr>
          <td>All</td>
          <td><div align="left">1.1</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/releases/org.eclipse.ptp.pldt-1.1.0.zip">org.eclipse.ptp.pldt-1.1.0.zip</a></div></td>
        </tr>
      </table>  
</div>
 
    <div class="homeitem3col">
  <h3>Fortran Development Tools</h3>
<p>The Fortran Development Tools have been merged with the Photran project. Please see
<a href="http://www.eclipse.org/photran">here</a> for more information on downloading
and installing this plugin.
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
