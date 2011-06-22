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
		    The project provides:</p>
      <ul>
        <li>a standard, portable parallel IDE that supports a wide range of parallel architectures and runtime systems</li>
        <li>a scalable parallel debugger</li>
        <li>support for  the integration of a wide range of parallel tools</li>
        <li>an environment that simplifies the end-user interaction with parallel systems </li>
       </ul>  
    </div>
    
    
   
	  <div class="homeitem3col">
		<h3>What&apos;s New</h3>
		<p>Note: the <a href="http://wiki.eclipse.org/PTP">PTP Wiki</a> usually contains the most recent information. 
		<ul>
		<li>June 22, 2011:  PTP 5.0 and
		<a href="http://eclipse.org/photran">Photran 7.0 </a>
		released with Eclipse 3.7 (Indigo)
		<li>May 14, 2011: PTP 4.0.7 and Photran 6.0.7 are released.	
		<li>February 25, 2011: PTP 4.0.6 and Photran 6.0.6 are released with Helios Service Release 2 (Eclipse 3.6.2)
		<li>January 2011:  <a href="http://wiki.eclipse.org/PTP/PTP_User_Meetings">PTP Monthly User calls</a>  to begin soon: January 26 at 2pm ET		
		
		<li>November 17, 2010:  <a href="http://sc10.supercomputing.org/schedule/event_detail.php?evid=bof149">PTP Birds-of-a-Feather Session</a>  at Supercomputing 2010.		
		<li>November 14, 2010:  <a href="http://sc10.supercomputing.org/schedule/event_detail.php?evid=tut149">PTP Tutorial</a> is presented at Supercomputing 2010.
		<li>November 10, 2010:  PTP 4.0.5 and Photran 6.0.5 are released.
		<li>November 5, 2010:  PTP 4.0.4 and Photran 6.0.4 are released.
		
		<li>September 24, 2010:  PTP 4.0.3 and Photran 6.0.3 are released as part of Eclipse 3.6.1 (a.k.a. Helios SR1- Service Release 1).
		<li>August 30, 2010: <a href="http://sc10.supercomputing.org/schedule/event_detail.php?evid=bof149">PTP Birds-of-a-Feather Session</a> 
		at the <a href="http://sc10.supercomputing.org/">Supercomputing 2010 Conference in New Orleans</a>
		is scheduled for Wednesday November 17, 2010, 5:30-7:00 PM.  
		Come and hear the latest about PTP and tell us what you're doing and what you'd like PTP to do in the future.</a>.
		<li>August 3, 2010:  PTP 3.0.2 and Photran 5.0.2 released.
		<li>July 29, 2010:  <a href="http://sc10.supercomputing.org/schedule/event_detail.php?evid=tut149">PTP Tutorial</a> 
		at the <a href="http://sc10.supercomputing.org/">Supercomputing 2010 Conference in New Orleans</a>
		will be presented on Sunday November 14, 2010.  This is a full-day, hands-on tutorial. <a href="http://wiki.eclipse.org/PTP/tutorials/SC10-setup">Bring your laptop and come prepared</a>.
		<li>June 23, 2010:  PTP 4.0 and
		<a href="http://eclipse.org/photran">Photran 6.0 </a>
		released with Eclipse 3.6 (Helios)!
		<li>March 25, 2010:  PTP presentations at <a href="http://www.eclipsecon.org/2010/">EclipseCon 2010</a> include:
		<ul>
		<li><a href="http://www.eclipsecon.org/2010/sessions/?page=sessions&id=1500">Make Me an Eclipse View (with Less Plumbing): The PTP External Tools Framework Feedback View</a> by Beth Tibbitts
		<li><a href="http://www.eclipsecon.org/2010/sessions/?page=sessions&id=1428">UPC and OpenMP Parallel Programming in PTP with CDT</a> by Beth Tibbitts
		<li><a href="http://www.eclipsecon.org/2010/sessions/?page=sessions&id=1126">The Parallel Tools Platform: A Development Environment for High Performance Computing</a> by Greg Watson	
		</ul>
		<li>February 2, 2010  PTP 3.0.1 and Photran 5.0.1 released.
		<li>February 1, 2010: PTP 3.0 help docs are here on the <a href="doc.php">documentation</a> 
		link of this website now.  PTP 3.0.1 release should be available very soon.
		<li>December 4, 2009: PTP 3.0 released! This version contains numerous
		enhancements and bug fixes. A list of the new
		features is available from <a href="http://wiki.eclipse.org/PTP/new_and_noteworthy/3.0.0">here</a>.
		See the <a href="downloads.php">downloads</a> page for more information on downloading and
		installing PTP.
		<li>November 14, 2009: <a href="http://wiki.eclipse.org/PTP/tutorials/SC09">PTP SC09 Tutorial slides</a> posted
		<li>November 14, 2009: See <a href="http://wiki.eclipse.org/PTP/meetings/SC09#PTP_.40_SC09">
		All PTP and Photran-related events at SC09</a>
		<li>November 13, 2009: Upcoming PTP Tutorial at SC09 (11/16/09). See the <a href="http://wiki.eclipse.org/PTP/tutorials">PTP tutorials page</a>.
		PTP BOF at SC09 is 11/18/09 at 5:30 pm. <a href="http://sc09.supercomputing.org">SC09</a> is November 15-20 - come see PTP at exhibit booths from IBM, NCSA, UIUC, and more!
		<li>August 24, 2009:  Upcoming PTP Tutorials at Cluster09 (8/31/09), SC09 (11/16/09). See the <a href="http://wiki.eclipse.org/PTP/tutorials">PTP tutorials page</a>.
		PTP BOF at SC09 is 11/18/09 at 5:30 pm. 
		<li>November 13, 2009: Upcoming PTP Tutorial at SC09 (11/16/09). See the <a href="http://wiki.eclipse.org/PTP/tutorials">PTP tutorials page</a>.
		PTP BOF at SC09 is 11/18/09 at 5:30 pm. <a href="http://sc09.supercomputing.org">SC09</a> is November 15-20 - come see PTP at exhibit booths from IBM, NCSA, UIUC, and more!
		<li>August 24, 2009:  Upcoming PTP Tutorials at Cluster09 (8/31/09), SC09 (11/16/09). See the <a href="http://wiki.eclipse.org/PTP/tutorials">PTP tutorials page</a>.
		PTP BOF at SC09 is 11/18/09 at 5:30 pm. 
		<li>July 17, 2009: PTP 2.1.3 has been released. See the <a href="http://www.eclipse.org/ptp/downloads.php">PTP downloads page</a>
		for details and installation instructions.	 
		<li>May 11, 2009: PTP 2.1.2 has been released. See the <a href="http://www.eclipse.org/ptp/downloads.php">PTP downloads page</a>
		for details and installation instructions.	 
		<li>March 16, 2009: The <a href="http://eclipse.org/photran">Photran</a> project has merged with PTP. For details
		see the <a href="http://wiki.eclipse.org/PTP/photran-faq">Photran Merge FAQs</a> on the Wiki.
		<li>March 9, 2009: PTP 2.1.1 has been released. See the <a href="http://www.eclipse.org/ptp/downloads.php">PTP downloads page</a>
		for details and installation instructions.	 
		<li><a href="pastNews.php">Older news...</a>

		</ul>
		</div>
		
			 <div class="homeitem3col">
			<h3>Fortran Development Tools (Photran)</h3>
			 <p>The <a href="http://eclipse.org/photran">Photran</a> project is now part of PTP. 
			 Forming an integral part of the parallel tools platform, 
			 Fortran language support provided by Photran is an essential tool for the parallel development community. 
			 Please consult the <a href="http://wiki.eclipse.org/PTP/photran/documentation/photran5">Photran User's Guide</a>
			 for information on downloading and installing this plug-in.
			 Highlights include:</p>
      <ul>
        <li>Support for IBM XLF, Intel Fortran, gfortran and other compilers</li>
        <li>Fortran editor with syntax highlighting</li>
        <li>Powerful refactoring support</li>
        <li>Managed build support</li>
      </ul>
       
       </p>
		</div>
		
		<div class="homeitem3col">
		<h3>General Resources</h3>
		<ul>
			<li><a href="http://wiki.eclipse.org/PTP/FAQ">FAQ (Frequently asked Questions about PTP)</a> 
        	<li>Ask questions about PTP on the <a href="http://dev.eclipse.org/mailman/listinfo">PTP mailing lists</a></li>
        	         	<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=PTP">Submit bugs and feature requests</a> 
      
        </ul>
		</div>
		
		<div class="homeitem3col">
			<h3>User Resources</h3>
			<ul>
			<li> <a href="downloads.php">Downloads</a> - Get the latest release
			<li> <a href="builds.php">Builds</a> - Get the latest builds for testing
        	<li> Read the  <a href="doc.php">The PTP User Guide</a> including several
        	screen shots.
        	<li> <a href="http://dev.eclipse.org/mailman/listinfo/ptp-user">PTP user mailing list</a>
        	for questions about using PTP       	       
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Developer Resources</h3>
			<ul>
				<li>The <a href="http://wiki.eclipse.org/PTP">Wiki</a>  is now the best place for the most recent
				information, especially developer information</li>
				<li><a href="http://wiki.eclipse.org/PTP/planning">Plans</a>   for upcoming PTP releases </li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi?cvsroot=Tools_Project">CVS Repository</a> </td>
                          - View PTP sources using the web interface  
                <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-dev">Mailing List</a> -
                       Email developers and get involved with PTP development
                <li><a href="docs/design.html">Design</a>  - PTP design discussion and plans 
                                 (Note: <a href="http://wiki.eclipse.org/PTP">Wiki may be more accurate))
                <li><a href="html/work.html">Work tasks</a>  - Outstanding work items on the project 
                                 (Note: <a href="http://wiki.eclipse.org/PTP">Wiki may be more accurate))
                <li><a href="http://wiki.eclipse.org/PTP/meetings">Planning Meetings</a> 
                               - Monthly conference call schedule, agendas and minutes 
                <li><a href="contributors.php">Contributors</a> - List of contributors to the PTP project
			</ul>
		</div>
		
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PTP Information</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/PTP">PTP Wiki</a> </li>
				<li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3777">PTP Presentation at EclipseCon 2007</a> - by Greg Watson</li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/whitepapers/PTPWPv9.pdf?cvsroot=Tools_Project">
                   PTP Whitepaper</a></li>
				<li><a href="doc.php">PTP Help documention</a> including screen shots.</li>
				<li><a href="http://www.computer.org/portal/site/cise/menuitem.92a12adebee18778161489108bcd45f3/index.jsp?&pName=cise_level1_article&TheCat=1001&path=cise/2006/v8n4&file=sci.xml&">
			  <i>Developing Scientific Applications Using Eclipse</i></a>
			  by Greg Watson and Nathan Debardeleben, in <a href="http://www.computer.org/portal/site/cise/index.jsp">
			  Computing in Science &amp; Engineering</a> magazine.
				<li><a href="http://wiki.eclipse.org/PTP/tutorials">PTP tutorials page</a>

			</ul>
		</div>
		
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
