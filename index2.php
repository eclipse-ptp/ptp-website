<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
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
	$pageTitle 		= "PTP - Parallel Tools Platform";
	$pageKeywords	= "Eclipse, Parallel Programming, Parallel debugger, MPI, OpenMP, OpenMPI, Fortran, C, C++";
	$pageAuthor		= "Beth Tibbitts   tibbitts@us.ibm.com";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	 $Nav->addNavSeparator("Contributors", 	"contributors.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>PTP - Parallel Tools Platform</h1>
		<div class="homeitem">
			<h3>Phoenix conversion status</h3>
			<p>Converted to Phoenix: The faq and downloads pages are converted. 
			<ul>
				<li>The faq,downloads, and contributors pages are converted, more or less.</li>
				<li>Need to work on this main page. </li>
				<li><a href="main.html">Old main PTP page</a></li>
				<li><a href="index.html">Old main PTP page (w/nav)</a></li>
				<li><a href="contributors.php">Contributors (new)</a></li>
				<li><a href="press.html">Press</a></li>
			</ul>
		</div>
		<div class="homeitem">
			<h3>Sample PHP pages</h3>
			<ul>
				<li><a href="sample_3col.php">Sample 3 col</a>. </li>
				<li><a href="sample_4col.php">Sample 4 col</a>.</li>
				<li><a href="sample_busypage.php">Sample busy page</a>.  </li>
				<li><a href="sample_list.php">Sample list</a>.</li>
			</ul>
		</div>
		
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
			<h3>Fortran Development Tools</h3>
			 <p>Although not an integral part of the parallel tools platform, 
			 Fortran language support is an essential tool for the parallel development community. 
			 We have provided an intitial version that is based on the CDT 3.0 Release. Features of FDT include:</p>
      <ul>
        <li>Support for IBM XLF, Intel Fortran, gfortran and other compilers</li>
        <li>Fortran editor with syntax highlighting</li>
        <li>Managed build support</li>
        <li>Outline view</li>
      </ul>
      <p>The CDT and FDT projects share much in common, and we are working closely with the CDT
       community to minimize overlap and move towards a more language independent model. 
       We will also be working with other organizations towards developing an industry-strength Fortran development environment. 
       (See also the <a href="http://eclipse.org/photran">Photran</a> project which includes our FDT work.)
       </p>
		</div>
		
	  <div class="homeitem3col">
			<h3>What&apos;s New</h3>
			<ul>
			<li>June 2006: PTP website is now converted to <a href="http://eclipse.org/phoenix">Phoenix</a><br>
			Most new information is now on the <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki!</a>.
			  <br>  Release 1.1 of PTP is estimated to be available in the Fall of 2006.
			<li>April 11, 2006:  
          <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">PTP now has a Wiki!</a> 
          April Planning Meeting minutes are there along with other information.
          <li>March 18, 2006: Release 1.0 now available for <a href="downloads.html">download</a>!;
          Pre-reqs and installation info is on the <a href="docs/releases/release-1.0.html">Release notes</a> page.
          <li>February 13, 2006: <a href="doc.php">documentation</a> is now available
          <li>December 12, 2005: New whitepaper <a href="docs/whitepapers/PTPWPv9.pdf">available</a>
          <li>September 18, 2005: Version 1.0 release plan <a href="docs/plan.html">available</a>
          <li>April 20, 2005: FDT 0.9-31M5a available. Please see the <a href="downloads.html">Downloads</a>
          <li>April 12 , 2005: <a href="http://eclipse.org/org/press-release/20050412paralleltools.htm">Los Alamos Developing New Eclipse-Based Tools for High-Performance Parallel Computers</a> 
			</ul>
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
			<li> <a href="downloads.php">Downloads</a> - Get the latest build
        	<li> Read the  <a href="doc.php">The PTP User Guide</a>
        	       
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Developer Resources</h3>
			<ul>
				<li><a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki</a>   for various developer information</li>
				<li><a href="http://wiki.eclipse.org/index.php/PTP/planning">Plans</a>   for upcoming PTP releases </li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi?cvsroot=Technology_Project">CVS Repository</a> </td>
                          - View PTP sources using the web interface  
                <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-dev">Mailing List</a> -
                       Email developers and get involved with PTP development
                <li><a href="http://wiki.eclipse.org/index.php/PTP/planning">Plans</a>   - Plans for upcoming PTP releases
                <li><a href="docs/design.html">Design</a>  - PTP design discussion and plans 
                                 (Note: <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki may be more accurate))
                <li><a href="work.html">Work tasks</a>  - Outstanding work items on the project 
                                 (Note: <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki may be more accurate))
                <li><a href="http://wiki.eclipse.org/index.php/PTP/meetings">Planning Meetings</a> 
                               - Monthly conference call schedule, agendas and minutes 
                <li><a href="contributors.html">Contributors</a> - List of contributors to the PTP project
			</ul>
		</div>
	
 
   
    
		<hr class="clearer" />
		<p>Some free text</p>
		<ul class="midlist">
			<li>list of items in free text</li>
			<li>list of items in free text</li>
			<li>list of items in free text</li>
		</ul>
		<ol>
			<li>Ordered list</li>
			<li>Ordered list</li>
			<li>Ordered list</li>
		</ol>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PTP Information</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">PTP Wiki</a> </li>
				<li><a href="http://www.eclipsecon.org/2006/Sub.do?id=265">PTP Presentation at EclipseCon 2006</a> - by Greg Watson</li>
				<li><a href="http://eclipse.org/ptp/docs/whitepapers/PTPWPv9.pdf">PTP Whitepaper</a> - descriptive text</li>
				<li><a href="doc.html">PTP Help documention</a> </li>
				<li><a href="#">Link</a> - descriptive text</li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related links</h6>
			<ul>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
				<li><a href="#">Link</a> - descriptive text</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
