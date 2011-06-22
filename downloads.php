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
		<p>The latest release of PTP is <b><font size=+1>5.0.0</font></b>, released June 22, 2011 with <b>Eclipse Indigo (3.7)</b>.
		</p>
    <p>Please see the <font size=+1><a href="http://wiki.eclipse.org/PTP/release_notes/5.0">
      release notes and installation instructions</a><font size=-1> for prerequisite information 
      and instructions on installing PTP Release 5.0 (both client and target machine parts).  
      <p><font size=+1>PTP 5.0</font> can be installed two ways:
      <ul><li>Install the <img src="images/ptp_logo_icon32.png"><b>Eclipse IDE for Parallel Application Developers</b> from the <a href="http://eclipse.org/downloads">Eclipse downloads</a> page.</li>
      <li>Install into an existing Eclipse - first download Eclipse, and then use the Eclipse "Help > Install New Software..." menu
      to install PTP and its pre-requisites from the Indigo update site: 
      <a href="http://download.eclipse.org/releases/indigo">http://download.eclipse.org/releases/indigo</a>.
      The Indigo update site has PTP 5.0.0, the initial 5.0 release,
      and all the prerequisites that PTP needs.  
      See the <a href="http://wiki.eclipse.org/PTP/release_notes/5.0">release notes</a> for more details.
      </ul>
</p>
<p>In the future, subsequent PTP releases will be 
<!-- This <b><font size=+1>PTP 5.0.1</font></b> release is  -->
available from the PTP-specific update site: 
<a href="http://download.eclipse.org/tools/ptp/updates/indigo">http://download.eclipse.org/tools/ptp/updates/indigo</a>.

<ul>
<li>Enable or add this site in your "Available Software Sites" then install from there initially, or update (Help > Check for Updates).
<li>If you already have PTP 5.0.x installed <i>from the PTP-specific update site</i>, you should be able to do 
Help > Check for Updates...  to get the new version.  </li>
<li>If you initially installed the <b>Eclipse IDE for Parallel Application Developers</b>, then install PTP on top of that from
the PTP-specific update site to get the first update (or re-install 5.0.0 from there) and then Help > Check for Updates will find subsequent
PTP releases automatically.
</ul>
</p>

<p>Other PTP builds are also available from the <a href="http://wiki.eclipse.org/PTP/builds">PTP builds page</a>.

<div class="homeitem3col">
  <h3>Optional PTP Server Components</h3>
  <p>Server components for the IBM LoadLeveler, IBM PE, and SLURM resource managers, and the parallel debugger, need to be built and installed from source code. 
  The following download link will work for the 5.0   versions of PTP. 
  See the release notes for instructions on installing the 
  optional PTP server components.
  <ul>  
  <li><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/ptp-proxy-5.0.0-I201106140904.zip">ptp-proxy-5.0.0-I201106140904.zip</a>
  </ul>
</div>

<div class="homeitem3col">
  <h3>Optional Remote Development Tools (RDT) Server Components</h3>
  <p>The RDT server components are required if you are using the Remote System Explorer (RSE) as a remote service provider for RDT. If you are using Remote Tools
  (installed as part of PTP) the server components are installed automatically. See the release notes for more details on using RSE with RDT.
  <table>
  <tr>
    <td align=left valign=top >
        <tr bgcolor="#CCCCCC">
          <th width="34%"  scope="col"><div align="left">Platform</div></th>
          <th width="10%"  scope="col"><div align="left">Version</div></th>
          <th width="56%"  scope="col"><div align="left">Download</div></th>
        </tr>
         <tr>
          <td>AIX</td>
          <td><div align="left">5.0.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/rdt-server-aix-5.0.0.tar">rdt-server-aix-5.0.0.tar</a></div></td>
        </tr>
        <tr>
          <td>Linux (Generic)</td>
          <td><div align="left">5.0.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/rdt-server-linux-5.0.0.tar">rdt-server-linux-5.0.0.tar</a></div></td>
        </tr>
        <tr>
          <td>Linux (PPC)</td>
          <td><div align="left">5.0.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/rdt-server-linux.ppc-5.0.0.tar">rdt-server-linux.ppc-5.0.0.tar</a></div></td>
        </tr>
        <tr>
          <td>Linux (x86)</td>
          <td><div align="left">5.0.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/rdt-server-linux.x86-5.0.0.tar">rdt-server-linux.x86-5.0.0.tar</a></div></td>
        </tr>
        <tr>
          <td>Unix</td>
          <td><div align="left">5.0.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/rdt-server-unix-5.0.0.tar">rdt-server-unix-5.0.0.tar</a></div></td>
        </tr>
		<tr>
          <td>MacOS X</td>
          <td><div align="left">5.0.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/rdt-server-macosx-5.0.0.tar">rdt-server-macosx-5.0.0.tar</a></div></td>
        </tr>
		<tr>
          <td>Windows</td>
          <td><div align="left">5.0.0</div></td>
          <td><div align="left"><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ptp/updates/indigo/rdt-server-windows-5.0.0.zip">rdt-server-windows-5.0.0.zip</a></div></td>
        </tr>
        
      </table>  
</div>
      
  
<div class="homeitem3col">
<h3>Previous releases</h3>
<p>Download information for <a href="downloads_4_0.php">PTP 4.0</a> for Eclipse 3.6 (Helios).
<p>Download information for <a href="downloads_3_0.php">PTP 3.0</a> for Eclipse 3.5 (Galileo).
<p>Download information for <a href="downloads_2_1.php">PTP 2.1</a> for Eclipse 3.4 (Ganymede).

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
