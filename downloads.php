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
		<p>Welcome to the downloads page for  the first release of the Parallel Tools Platform. <br>
    Please see the <a href="docs/releases/release-1.0.php">
      Release notes</a> for prerequisite and installation information. </p>
    <p>The files below contain the current release of PTP. To install PTP you need to  download the PTP Core component <strong>plus </strong>the  PTP Runtime and PTP Debug components that correspond to your architecture. Download and install the plugins and features into your Eclipse installation.</p>    
     
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
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp-1.0.0.tar.gz">org.eclipse.ptp-1.0.0.tar.gz</a></div></td>
        </tr>

      </table>   
      </div>
  <div class="homeitem3col">
  <h3>PTP Runtime</h3>
  <table>
    <td align=left valign=top >
        <tr bgcolor="#CCCCCC">
          <th width="12%"  scope="col"><div align="left">Runtime</div></th>
          <th width="22%"  scope="col"><div align="left">Platform</div></th>
          <th width="10%"  scope="col"><div align="left">Release</div></th>
          <th width="56%"  scope="col"><div align="left">Download</div></th>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Linux (x86) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp.orte-linux-x86-1.0.0.tar.gz">org.eclipse.ptp.orte-linux-x86-1.0.0.tar.gz</a></div></td>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Linux (x86_64) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp.orte-linux-x86_64-1.0.0.tar.gz">org.eclipse.ptp.orte-linux-x86_64-1.0.0.tar.gz</a></div></td>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Linux (ppc) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left">N/A</div></td>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Mac OS X (ppc) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp.orte-macosx-ppc-1.0.0.tar.gz">org.eclipse.ptp.orte-macosx-ppc-1.0.0.tar.gz</a></div></td>
        </tr>
      </table>  
      </div>
  <div class="homeitem3col">
   <h3>PTP Debug</h3>
  <table>
    <td align=left valign=top >
    <tr bgcolor="#CCCCCC">
          <th width="12%"  scope="col"><div align="left">Runtime</div></th>
          <th width="22%"  scope="col"><div align="left">Platform</div></th>
          <th width="10%"  scope="col"><div align="left">Release</div></th>
          <th width="56%"  scope="col"><div align="left">Download</div></th>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Linux (x86) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp.debug-orte-linux-x86-1.0.0.tar.gz">org.eclipse.ptp.debug-orte-linux-x86-1.0.0.tar.gz</a></div></td>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Linux (x86_64) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp.debug-orte-linux-x86_64-1.0.0.tar.gz">org.eclipse.ptp.debug-orte-linux-x86_64-1.0.0.tar.gz</a></div></td>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Linux (ppc) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left">N/A</div></td>
        </tr>
        <tr>
          <td>OpenRTE</td>
          <td>Mac OS X (ppc) </td>
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp.debug-orte-macosx-ppc-1.0.0.tar.gz">org.eclipse.ptp.debug-orte-macosx-ppc-1.0.0.tar.gz</a></div></td>
        </tr>
      </table>  
</div>
  <div class="homeitem3col">
  <h3>MPI Development Tools</h3>
  <p>The files below contain the current release of the MPI Development Tools for PTP. <br>
       Please see the <a href="docs/releases/release-1.0.php">
      Release notes</a> for prerequisite and installation information. </p>

    <p>Download and install the plugins and features into your Eclipse installation:</p> 
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
          <td><div align="left">1.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.ptp.mpi-1.0.tar.gz">org.eclipse.ptp-mpi-1.0.tar.gz</a></div></td>
        </tr>
      </table>  
</div>
 
    <div class="homeitem3col">
  <h3>Fortran Development Tools</h3>
  <table>
<p>The files below contain the current release of the Fortran Development Tools for PTP. <br>
       Please see the <a href="docs/releases/release-1.0.php">
      Release notes</a> for prerequisite and installation information. </p>

      <p>Download and install the plugins and features into your Eclipse installation:</p>    </tr>
<table>
  <tr>
    <td align=left valign=top >
          <tr bgcolor="#CCCCCC">
            <th width="34%"  scope="col"><div align="left">Description</div></th>
            <th width="10%"  scope="col"><div align="left">Release</div></th>
            <th width="56%"  scope="col"><div align="left">Download</div></th>
          </tr>
          <tr>
            <td><div align="left">CDT with mixed-language projects </div></td>
            <td><div align="left">1.0</div></td>
            <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.cdt-make-1.0.tar.gz">org.eclipse.cdt-make-1.0.tar.gz</a></div></td>
          </tr>
          <tr>
            <td><div align="left">Fortran Development Tools </div></td>
            <td><div align="left">1.0</div></td>
            <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ptp/releases/org.eclipse.fdt-1.0.tar.gz">org.eclipse.fdt-1.0.tar.gz</a></div></td>
          </tr>
        </table>  
</div>
 

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Other useful sites</h6>
			<ul>
				<li><a href="http://www.open-mpi.org/">OpenMPI</a></li>
				<li><a href="http://www-unix.mcs.anl.gov/mpi/">MPI</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Another box</h6>
			<ul>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
