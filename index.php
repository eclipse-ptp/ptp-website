<?php
	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-11
	#
	# Description: Main PTP site root page
	#
	#
	#****************************************************************************
	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
	#$localVersion = false;
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Parallel Tools Platform (PTP)";
	$pageKeywords	= "Eclipse, Parallel Programming, Parallel debugger, Parallel Tools, MPI, OpenMP, OpenMPI, Fortran, C, C++";
	$pageAuthor		= "Beth Tibbitts   tibbitts@us.ibm.com";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	#<div id="bigbuttons">
	#	<h3>Primary Links</h3>
	#	<ul>
	#	<li><a id="buttonDownload" href="downloads.php" title="Download"></a></li>
	#	<li><a id="buttonDocumentation" href="doc.php" title="Documentation"></a></li>
	#	<li><a id="buttonSupport" href="support.php" title="Support"></a></li>
	#	<li><a id="buttonInvolved" href="developers.php" title="Getting Involved"></a></li>
	#	</ul>
	#</div>

	<div id="maincontent">
	<div id="midcolumn">
		<h1>Eclipse PTP</h1>
		  <table>
		    <tr>
		      <td>
			<p>The PTP project provides an integrated development environment to support the development of parallel applications written 
			in C, C++, and Fortran. Eclipse PTP provides:
	      	<ul>
		        <li>Support for the MPI, OpenMP and UPC programming models, as well as OpenSHMEM and OpenACC</li>
		        <li>Support for a wide range of batch systems and runtime systems, including PBS/Torque, LoadLeveler, GridEngine,
		        Parallel Environment, Open MPI, and MPICH2</li>
		        <li>A scalable parallel debugger</li>
		        <li>Support for  the integration of a wide range of parallel tools</li>
			</ul>
			</p>
			  </td>
			  <td align="right">
			    <img alt="PTP" src="/ptp/images/ptp_logo_icon256.png"/>
			  </td>
			</tr>
          </table>
			<h2>Fortran Development Tools (Photran)</h2>
			<p>The <a href="http://eclipse.org/photran">Photran</a> project is now part of PTP. 
				Forming an integral part of the parallel tools platform, 
				Fortran language support provided by Photran is an essential tool for the parallel development community. 
				Please consult the <a href="http://help.eclipse.org/luna/index.jsp?topic=%2Forg.eclipse.photran.doc.user%2Fhtml%2Ftoc.html">Photran User's Guide</a>
				for information on downloading and installing this plug-in. 
				<a href="http://help.eclipse.org/luna/topic/org.eclipse.photran.doc.user/html/toc.html">Online version of the Photran User's Guide</a> 
				is also available as part of the plug-in installation.
				Highlights include:
			<ul>
				<li>Support for IBM XLF, Intel Fortran, gfortran and other compilers</li>
				<li>Fortran editor with syntax highlighting</li>
				<li>Powerful refactoring support</li>
				<li>Managed build support</li>
			</ul>
			</p>
	</div>
	</div>
    
    <div id="rightcolumn">
    	$sidebar
    	
		<div class="sideitem">
			<h3>Current Status</h3>
			<p>PTP 8.0.1 released 13 July, 2014 </p>
		</div>
		
		<div class="sideitem">
		<h3>PTP 8.0.1  Available July 13, 2013</h3>
		
		<h3>PTP 8.0.0  Available June 25, 2013</h3>
		<p>Check the <a href="downloads.php">Download</a> link on how to get yours.</p>

			<h3>Eclipse for Parallel Application Developers now is based on Eclipse Luna </h3>
			<p><i>June 25, 2014 -</i> PTP 8.0 is now the basis of this package in the 
			Eclipse Luna release. Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
		   
		<h3>PTP 7.0.5  Available April 11, 2013</h3>
			
		<h3>Eclipse Kepler SR2 and PTP 7.0.4 available February 28, 2014</h3>
		<p>You can update PTP and the rest of your Eclipse workbench with the Eclipse Kepler SR2 release.
		 
		<h3>PTP 7.0.3  Available August 15, 2013</h3>
		<h3>PTP 7.0.2  Available July 21, 2013</h3>
		<h3>PTP 7.0.1  Available July 3, 2013</h3>
		<h3>PTP 7.0.0  Available June 26, 2013 with Eclipse Kepler</h3>
		<p></i> Check the <a href="downloads.php">Download</a> 
		    link for details on how to get yours. 
		    <!--The <b>Help > Check for updates</b>
		    menu item should work to update your Eclipse and PTP from a previous
		    Kepler-based release.-->
		   
		    If you installed the 
		    <b>Eclipse for Parallel Application Developers</b> package,
		    please see <a href="http://wiki.eclipse.org/PTP/release_notes/7.0#Updating_from_the_Parallel_Package_to_a_more_recent_release">
		    Updating from the parallel package to a more recent release</a> on the PTP wiki.
		    </p>
		<!--
			<h3>Eclipse for Parallel Application Developers now is based on Eclipse Kepler </h3>
			<p><i>June 26, 2013 -</i> PTP 7.0 is now the basis of this package in the 
			Eclipse Kepler release. Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
		    -->
		    <!--PTP was refreshed to 6.0.2 in the September SR1 release of the package.
		    PTP 6.0.3 was subsequently released on November 11, 2012.-->
			
			<h3>More Information</h3>
			<p>The <a href="http://wiki.eclipse.org/PTP">PTP Wiki</a> is often the best source of up-to-date information on PTP for Developers and Users.
	
		</div>
		
	
	</div>
	   

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
