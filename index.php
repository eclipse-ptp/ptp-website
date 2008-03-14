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
		<li><img src="../images/new.gif">March 14, 2008 (Happy Pi Day!) PTP talks at <a href="http://www.eclipsecon.org/2008/">EclipseCon 2008 next
		week in Santa Clara: 
		<ul>
		<li> <a href="http://www.eclipsecon.org/2008/?page=sub/&id=373">Static Analysis in PTP with CDT</a> - Beth Tibbitts, Wed 1:30 PM
		<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=323">Enabling Remote Development with CDT and PTP</a>  Greg Watson and Chris Recoskie, Tues 1:50 PM
		<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=566">PTP BOF - Tuesday 8:45 PM
		</ul>
		<p>PTP 2.0 preview releases continue to be updated, including yesterday (3/13); See details in the  <a href="http://wiki.eclipse.org/PTP/builds/2.0">2.0 builds page</a>. 
		<li>February 27, 2008: PTP 2.0 preview releases continue to be updated, and are now available
		on the <a href="http://download.eclipse.org/tools/ptp/releases/2.0/">update site</a> 
		or also as an archive to download and use with the update manager - on 
		the <a href="http://wiki.eclipse.org/PTP/builds/2.0">2.0 builds page</a>. 
		See details in the <a href="http://wiki.eclipse.org/PTP/release_notes/2.0">Release Notes for 2.0</a> 
		- Release should be final around the end of March.  
		<li>January 22, 2008: PTP 2.0 preview release is now available; see details in the <a href="http://wiki.eclipse.org/PTP/release_notes/2.0">Release Notes for 2.0</a> - please give it a try and give us your feedback!
		
<li>January 8, 2008: PTP 2.0 preview release coming soon; stay tuned. Latest PTP news is available in the <a href="http://wiki.eclipse.org/PTP/meetings">PTP wiki meetings page</a> - see January 8 meeting.
<li>November 11, 2007: PTP tutorial presented at Supercomputing 2007; BOF and exhibits featured PTP as well
<li>October 11, 2007: PLDT 2.0 beta 2 is available,
		 which works on Eclipse 3.3 and CDT 4.0.
		See the <a href="builds.php">builds page</a> for details.
See <a href="documentation/2.0/org.eclipse.ptp.pldt.help/html/whatsnew.html">What's new in PLDT 2.0</a>.
		<li>September 6, 2007: 
		PTP 1.1.1 is now available.  It's also available via 
		<a href="http://download.eclipse.org/tools/ptp/releases/1.1.1/">the 1.1.1 update site</a> as well.
		Or see the <a href="downloads.php">downloads page</a>. 
		
		<li>August 29, 2007: PTP at 
		<a href="http://sc07.supercomputing.org">Supercomputing 2007</a> in Reno, Nevada Nov 11-16, 2007:
		<ul>
		<li><a href="http://sc07.supercomputing.org/schedule/event_detail.php?evid=11032">
		PTP Tutorial</a> is Sunday, November 11, 2007</li>
		<li>PTP BOF (Birds of a Feather meeting), Wednesday Nov. 14; see 
		<a href="http://sc07.supercomputing.org/?pg=bofs.html">BOF schedule</a></li>
		<li>PTP will be demonstrated at various Exhibitor booths. Stay tuned for details.
		</li>
		</ul>
		</li>
		<li>July 30, 2007: More PTP presentations and tutorials
		available on the <a href="doc.php">Documentation page</a>, including the recent PTP
		tutorial at <a href="http://conferences.oreillynet.com/cs/os2007/view/e_sess/12165">OSCON</a>.
		
		</li>
		<li>June 29, 2007: Europa (Eclipse 3.3) is available,
		and an early access build of PLDT 2.0 is available which works on Eclipse 3.3 and CDT 4.0.
		See the <a href="builds.php">builds page</a> for details.
		</li>
		<li>March 14, 2007: PTP 1.1 released! This version contains numerous
		enhancements and bug fixes, and includes preliminary support for MPICH2. A list of the new
		features is available from <a href="documentation/org.eclipse.ptp.help/html/newNoteworthy.html">here</a>.
		See the <a href="downloads.php">downloads</a> page for more information on downloading and
		installing PTP.
		<li>March 13, 2007: 
		     PTP at <a href="http://eclipseCon.org">EclipseCon 2007</a> in Santa Clara, CA last week:
		     <ul>
		     <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3777">
		         Parallel Tools Platform: Now and Future</a>
		         - Greg Watson (Los Alamos National Laboratory)
		      <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=4057">  
		      Developing Parallel Programs - PTP's PLDT</a>
              - Beth Tibbitts (IBM Research) 
              <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3903">
              C/C++ Source Code Introspection Using the CDT</a>
              - Chris Recoskie (IBM Canada Ltd.), Beth Tibbitts (IBM Research) - showed PLDT analysis
              and how it's done with the CDT.
              <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3787">
              Performance Analysis of Parallel C/C++ and Fortran Applications in Eclipse</a>
              - Wyatt Spear (University of Oregon) 
              <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3932">
               HPCVision: An Interactive Tool for Scalable Analysis of Parallel Performance Profiles</a>
               - Adam Bordelon (Rice University)

		     </ul>
			<p>
			<li>January 19, 2007: The PTP web site and CVS repository have now been transitioned
			to the Tools project. Please let us know if anything is not working!
			
			<li>December 21, 2006: PTP is now officially part of the Tools project! The PTP Move
			Review (slides <a href="http://www.eclipse.org/projects/slides/PTP%20Move%20Review.pdf">here</a>) was successful, and we will be 
			transitioning the web site and CVS repository to the Tools over
			the coming weeks.
			
			<li>December 20, 2006: The SC 2006 PTP tutorial is now available for download from 
			<a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/tutorials/SC2006.pdf?cvsroot=Tools_Project">here</a>

			<li>December 4, 2006: Two new PTP mailing lists have been added. We now have the 
			<a href="http://dev.eclipse.org/mailman/listinfo/ptp-announce">ptp-announce</a> mailing list
			for general annoucements and the <a href="http://dev.eclipse.org/mailman/listinfo/ptp-user">ptp-user</a>
			mailing list for user discussions that are not related to development issues.
		
			<li>December 4, 2006: PTP tutorials
			were given at SC06 and LACSI conferences (see below); PTP release
			1.1 is imminent... stay tuned.
		</ul>
		</div>
		
			 <div class="homeitem3col">
			<h3>Fortran Development Tools</h3>
			 <p>Although not an integral part of the parallel tools platform, 
			 Fortran language support is an essential tool for the parallel development community. 
			 The Fortran Development Tools have now been merged with the <a href="http://eclipse.org/photran">Photran</a> project. 
			 Please consult that for information on downloading and installing this plug-in.
			 Photran is now the official home for the  Fortran IDE.
			 Highlights include:</p>
      <ul>
        <li>Support for IBM XLF, Intel Fortran, gfortran and other compilers</li>
        <li>Fortran editor with syntax highlighting</li>
        <li>Managed build support</li>
      </ul>
       
       </p>
		</div>
		
		<div class="homeitem3col">
		<h3>General Resources</h3>
		<ul>
			<li><a href="faq.php">FAQ (Frequently asked Questions about PTP)</a> 
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
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.ptp/doc/tutorials/SC2006.pdf?cvsroot=Tools_Project">
				PTP Tutorial</a> given at 
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
