<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP - Eclipse Parallel Tools Platform";
	$pageKeywords	= "Eclipse, Parallel Programming, Parallel debugger, Parallel Tools, MPI, OpenMP, OpenMPI, Fortran, C, C++";
	$pageAuthor		= "Beth Tibbitts   tibbitts@us.ibm.com";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
#	 $Nav->addNavSeparator("Contributors", 	"contributors.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>PTP - Parallel Tools Platform</h1>
		
		<div class="homeitem3col">
	<h3>Project Goals</h3>
		<p>The aim of the parallel tools platform project is to produce an open-source industry-strength platform that 
		    provides a highly integrated environment specifically designed for parallel application development. 
		    The project will provide:</p>
      <ul>
        <li>a standard, portable parallel IDE that supports a wide range of parallel architectures and runtime systems</li>
        <li>a scalable parallel debugger</li>
        <li>support for  the integration of a wide range of parallel tools</li>
        <li>an environment that simplifies the end-user interaction with parallel systems </li>
       </ul>  
    </div>
    
    
   
	  <div class="homeitem3col">
		<h3>What&apos;s New</h3>
		<ul>
			<li><img src="../images/new.gif">December 20, 2006: The SC 2006 PTP tutorial is now available for download from 
			<a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/tutorials/SC2006.pdf?cvsroot=Technology_Project">here</a>

			<li>December 4, 2006: Two new PTP mailing lists have been added. We now have the 
			<a href="http://dev.eclipse.org/mailman/listinfo/ptp-announce">ptp-announce</a> mailing list
			for general annoucements and the <a href="http://dev.eclipse.org/mailman/listinfo/ptp-user">ptp-user</a>
			mailing list for user discussions that are not related to development issues.
		
			<li>December 4, 2006: PTP tutorials
			were given at SC06 and LACSI conferences (see below); PTP release
			1.1 is imminent... stay tuned.
			
			<li>August 16, 2006: PTP passes
			the <a href="http://wiki.eclipse.org/index.php/PTP/meetings/10releaseReview">Eclipse Foundation Release review
			</a> for our 1.0 release
		
			<li>August 9, 2006: PTP Tutorials coming up:
				<ul>
					<li>
					<a href="http://sc06.supercomputing.org/schedule/event_detail.php?evid=5063">
					Application Development Using Eclipse and the Parallel Tools Platform</a> November 12, 2006
					at <a href="http://sc06.supercomputing.org/">Supercomputing 2006</a> in Tampa, FL
		
					<li><a href="http://lacsi.krellinst.org/draft_agenda.shtml">
					Scientific Application Development Using Eclipse and the Parallel Tools Platform</a> at LACSI
					(Los Alamos Computer Science Institute) October 17, 2006 in Santa Fe, NM
				</ul>
		
			<li>July 18, 2006: PLDT update on <a href="builds.php">Builds page</a>
		
			<li>July 11, 2006: <a href="builds.php">Builds page</a> added; early preview of PLDT (Parallel Language Development Tools) made available -
			This includes the previously available MPI Development Tools, but also
			includes OpenMP tools as well.
	
			<li>June 19, 2006: PTP website is now converted to <a href="http://eclipse.org/phoenix">Phoenix</a>;
			The <a href="indexOld.html">old main page is here.</a><br>
			Most new information is now on the <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki!</a>.
			<br>  Release 1.1 of PTP is estimated to be available in the Fall of 2006.
		  
			<li>June 13, 2006: <a href="http://www.computer.org/portal/site/cise/menuitem.92a12adebee18778161489108bcd45f3/index.jsp?&pName=cise_level1_article&TheCat=1001&path=cise/2006/v8n4&file=sci.xml&">
			<i>Developing Scientific Applications Using Eclipse</i></a>
			by Greg Watson and Nathan Debardeleben of PTP fame, is in this month&apos;s
			issue of <a href="http://www.computer.org/portal/site/cise/index.jsp">
			Computing in Science &amp; Engineering</a> magazine.
		  
			<li>April 11, 2006:  
      		<a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">PTP now has a Wiki!</a> 
      		April Planning Meeting minutes are there along with other information.
      
      		<li>March 18, 2006: Release 1.0 now available for <a href="downloads.php">download</a>!;
      		Pre-reqs and installation info is on the <a href="docs/releases/release-1.0.php">Release notes</a> page.
      
      		<li>February 13, 2006: <a href="doc.php">documentation</a> is now available
      
      		<li>December 12, 2005: New whitepaper <a href="docs/whitepapers/PTPWPv9.pdf">available</a>
     
			<li>September 18, 2005: Version 1.0 release plan <a href="docs/plan.html">available</a>
      
      		<li>April 20, 2005: FDT 0.9-31M5a available. Please see the <a href="downloads.php">Downloads</a>
      		<li>April 12 , 2005: <a href="http://eclipse.org/org/press-release/20050412paralleltools.htm">Los Alamos Developing New Eclipse-Based Tools for High-Performance Parallel Computers</a> 
		</ul>
		</div>
		
			 <div class="homeitem3col">
			<h3>Fortran Development Tools</h3>
			 <p>Although not an integral part of the parallel tools platform, 
			 Fortran language support is an essential tool for the parallel development community. 
			 We have provided an intitial version that is based on the CDT 3.0 Release. Features of FDT include:</p>
      <ul>
        <li>Support for IBM XLF, Intel Fortran, gfortran and other compilers</li>
        <li>Fortran editor with syntax highlighting</li>
        <li>Managed build support</li>
      </ul>
      <p>The <a href="http://eclipse.org/cdt">CDT</a> and FDT projects share much in common, and we are working closely with the CDT
       community to minimize overlap and move towards a more language independent model. 
       We will also be working with other organizations towards developing an industry-strength Fortran development environment. 
       See also the <a href="http://eclipse.org/photran">Photran</a>
       project, which  includes our FDT contribution and is the official home for the  Fortran IDE.
       
       
       </p>
		</div>
		
		<div class="homeitem3col">
		<h3>General Resources</h3>
		<ul>
			<li><a href="faq.php">FAQ (Frequently asked Questions about PTP)</a> 
        	<li>Ask questions about PTP on the <a href="news://eclipse.org/eclipse.technology.ptp">Newsgroup</a> 
        	       (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ptp">web interface</a>)</li>
        	         	<li>Submit bugs and feature requests on <a href="http://bugs.eclipse.org/bugs">Bugzilla</a> 
      
        </ul>
		</div>
		
		<div class="homeitem3col">
			<h3>User Resources</h3>
			<ul>
			<li> <a href="downloads.php">Downloads</a> - Get the latest release
			<li> <a href="builds.php">Builds</a> - Get the latest builds for testing
        	<li> Read the  <a href="doc.php">The PTP User Guide</a> including several
        	screen shots.
        	<li> <a href="news://news.eclipse.org/eclipse.technology.ptp">PTP newsgroup</a>
        	for questions about using PTP;
        	<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.ptp/maillist.html">Web version of newsgroup</a>
        	       
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Developer Resources</h3>
			<ul>
				<li>The <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki</a>  is now the best place for the most recent
				information, especially developer information</li>
				<li><a href="http://wiki.eclipse.org/index.php/PTP/planning">Plans</a>   for upcoming PTP releases </li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi?cvsroot=Technology_Project">CVS Repository</a> </td>
                          - View PTP sources using the web interface  
                <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-dev">Mailing List</a> -
                       Email developers and get involved with PTP development
                <li><a href="docs/design.html">Design</a>  - PTP design discussion and plans 
                                 (Note: <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki may be more accurate))
                <li><a href="work.html">Work tasks</a>  - Outstanding work items on the project 
                                 (Note: <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki may be more accurate))
                <li><a href="http://wiki.eclipse.org/index.php/PTP/meetings">Planning Meetings</a> 
                               - Monthly conference call schedule, agendas and minutes 
                <li><a href="contributors.php">Contributors</a> - List of contributors to the PTP project
			</ul>
		</div>
		
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PTP Information</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">PTP Wiki</a> </li>
				<li><a href="http://www.eclipsecon.org/2006/Sub.do?id=265">PTP Presentation at EclipseCon 2006</a> - by Greg Watson</li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/whitepapers/PTPWPv9.pdf?cvsroot=Technology_Project">
                   PTP Whitepaper</a></li>
				<li><a href="doc.php">PTP Help documention</a> including screen shots.</li>
				<li><a href="http://www.computer.org/portal/site/cise/menuitem.92a12adebee18778161489108bcd45f3/index.jsp?&pName=cise_level1_article&TheCat=1001&path=cise/2006/v8n4&file=sci.xml&">
			  <i>Developing Scientific Applications Using Eclipse</i></a>
			  by Greg Watson and Nathan Debardeleben, in <a href="http://www.computer.org/portal/site/cise/index.jsp">
			  Computing in Science &amp; Engineering</a> magazine.
				<li>PTP Tutorial to be presented at 
				<a href="http://sc06.supercomputing.org/">SC06</a>
				on Sunday, Nov. 12, 2006. 
				
			</ul>
		</div>
		
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
