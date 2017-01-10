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
				Please consult the <a href="http://help.eclipse.org/mars/index.jsp?topic=%2Forg.eclipse.photran.doc.user%2Fhtml%2Ftoc.html">Photran User's Guide</a>
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
			<h6>Current Status</h6>
			<p>PTP Neon.2 released December 21, 2016 </p>
			<p>If you installed the 
		    <a href="https://www.eclipse.org/downloads/packages/eclipse-parallel-application-developers/neon2">Eclipse for Parallel Application Developers</a>
		    package you can do <b>Help > Check for Updates</b>.
		    
		    You can also see <a href="https://wiki.eclipse.org/PTP/release_notes#Updating_from_a_previous_release">
		    Updating from a previous release</a> on the PTP wiki for details about updating from and to different releases.
		    </p>
		</div>
		
		<div class="sideitem">
		  <h6>Recent News</h6>
		  <p><i>December 21, 2016</i> - Eclipse Neon.2 released. Check the <a href="downloads.php">Download</a> link on how to get yours.</p>	  
		  <p><i>September 28, 2016</i> - Eclipse Neon.1 and PTP 9.1.1 released.</p>	  
    	  <p><i>June 24, 2016</i> - Eclipse Neon and PTP 9.1.0 released.  
    	  <p><i>February 26, 2016</i> - Eclipse Mars.2 released.  
    	  <p><i>September 25, 2015</i> - Eclipse Mars.1 and PTP 9.0.1 released.  
    	  <p><i>June 24, 2015</i> - Eclipse Mars and PTP 9.0.0 released.  
		</div>

		<div class="sideitem">
			<h6>More Information</h6>
			<p>The <a href="http://wiki.eclipse.org/PTP">PTP Wiki</a> is often the best source of up-to-date information on PTP for Developers and Users.
		</div>
	</div>
	   

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
