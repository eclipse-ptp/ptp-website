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
		<h2>Section title</h2>
		<p>Intro text.<br /> <a href="#">more about something &raquo;</a> </p>
		<div class="homeitem">
			<h3>Phoenix conversion status</h3>
			<p>Converted to Phoenix: The faq and downloads pages are converted. 
			<ul>
				<li>The faq,downloads, and contributors pages are converted, more or less.</li>
				<li>Need to work on this main page. </li>
				<li><a href="main.html">Old main PTP page</a></li>
				<li><a href="index.html">Old main PTP page (w/nav)</a></li>
				<li><a href="contributors.html">Contributors</a></li>
				<li><a href="contributors.php">Contributors (new)</a></li>
				<li><a href="press.html">Press</a></li>
				<li><a href="index.html">Old main PTP page (w/nav)</a></li>
				<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
				
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
	<h2>Project Goals</h2>
		<p>The aim of the parallel tools platform project is to produce an open-source industry-strength platform that provides a highly integrated environment specifically designed for parallel application development. The project will provide:</p>
      <ul>
        <li>a standard, portable parallel IDE that supports a wide range of parallel architectures and runtime systems</li>
        <li>a scalable parallel debugger</li>
        <li>support for  the integration of a wide range of parallel tools</li>
        <li>an environment that simplifies the end-user interaction with parallel systems </li>
    </ul>  
    </div>
    </h2>
    <div class="homeitem3col">
			<h3>Fortran Development Tools</h3>
			 <p>Although not an integral part of the parallel tools platform, Fortran language support is an essential tool for the parallel development community. We have provided an intitial version that is based on the CDT 3.0 series and the first release will coincide with the release of CDT 3.0. Features of FDT include:</p>
      <ul>
        <li>support for IBM XLF, Intel Fortran, gfortran and other compilers</li>
        <li>Fortran editor with syntax highlighting</li>
        <li>  managed build support</li>
        <li>outline view</li>
      </ul>
      <p>The CDT and FDT projects share much in common, and we are working closely with the CDT community to minimize overlap and move towards a more language independent model. We will also be working with other organizations towards developing an industry-strength Fortran development environment. </p>

		</div>
		
	  <div class="homeitem3col">
			<h3>What&apos;s New</h3>
			<table cellSpacing="5" cellPadding="2" width="100%" border="0">
      
      
      <tr>
          <td vAlign="top" align="left" height="12"><img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"><strong>April 11, 2006 <img src="../images/new.gif" width="31" height="14">:  
          <a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">PTP now has a Wiki!</a> 
          April Planning Meeting minutes are there along with other information.
          </strong></td>
        </tr>
     
        <tr>
          <td vAlign="top" align="left" height="12"><img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"><strong>March 18, 2006: Release 1.0 now available for <a href="downloads.html">download</a>!;
          Pre-reqs and installation info is on the <a href="docs/releases/release-1.0.html">Release notes</a> page. </strong></td>
        </tr>
        <tr>
          <td vAlign="top" align="left" height="12"><img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"><strong>March 16, 2006: March Planning Meeting minutes now <a href="meetings.html">available</a> </strong></td>
        </tr>
        
        
        <tr>
          <td vAlign="top" align="left" height="12"><img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"><strong>February 13, 2006: <a href="doc.html">documentation</a> is now available</strong></td>
        </tr>
        
        <tr>
          <td vAlign="top" align="left" height="12"><img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"><strong>December 12, 2005: New whitepaper <a href="docs/whitepapers/PTPWPv9.pdf">available</a></strong></td>
        </tr>
        
         <tr>
          <td vAlign="top" align="left" height="12"><img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"><strong>September 18, 2005: Version 1.0 release plan <a href="docs/plan.html">available</a> </strong></td>
        </tr>
        <tr>
          <td vAlign="top" align="left" height="12" width="23"> <img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"> <b>April 20, 2005: FDT 0.9-31M5a available. Please see the <a href="downloads.html">Downloads</a> page for more information  </b></td>
        </tr>
        <tr>
          <td vAlign="top" align="left" height="12" width="23"> <img src="http://eclipse.org/images/Adarrow.gif" border="0" width="16" height="16"></td>
          <td colspan="2"  valign="top"> <b>April 12 , 2005: <a href="http://eclipse.org/org/press-release/20050412paralleltools.htm">Los Alamos Developing New Eclipse-Based Tools for High-Performance Parallel Computers</a> </b></td>
        </tr>
    </table>
		</div>
			
		<div class="homeitem3col">
			<h3>User Information</h3>
			<ul>
			<li><a href="news://eclipse.org/eclipse.technology.ptp">Newsgroup</a> (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ptp">web interface</a>)</li>
				</ul>
		</div>
		<div class="homeitem3col">
			<h3>Developer Information</h3>
			<ul>
				<li><a href="http://wiki.eclipse.org/index.php/Parallel_Tools_Platform">Wiki</a>   for various developer information</li>
				<li><a href="http://wiki.eclipse.org/index.php/PTP/planning">Plans</a>   for upcoming PTP releases </li>
			</ul>
		</div>
		
		<div class="homeitem3col">
		<h3>Etc.</h3>
		<table cellSpacing="1" cellPadding="2" width="90%" border="0" id="table1">
        <tr>
          <td colspan="2"> <b>General Resources:</b> </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="faq.html">FAQ</a> </td>
          <td> Frequently asked questions about PTP</td>
        </tr>
        <tr>
          <td width="1%">&nbsp;</td>
          <td width="19%"> <a href="news://eclipse.org/eclipse.technology.ptp">Newsgroup</a> (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ptp">web interface</a>) </td>
          <td width="80%"> Ask questions about PTP on the Eclipse Technology Newsgroup</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="http://bugs.eclipse.org/bugs">Bugzilla</a> </td>
          <td> Submit bugs and feature requests</td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td colspan="2"> <b>User Resources:</b> </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="downloads.html">Downloads</a> </td>
          <td> Get the latest build</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> Documentation<br></td>
          <td> The PTP User Guide</td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td colspan="2"> <b>Developer Resources:</b> </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="http://dev.eclipse.org/viewcvs/index.cgi?cvsroot=Technology_Project">CVS Repository</a> </td>
          <td> View PTP sources using the web interface</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="http://dev.eclipse.org/mailman/listinfo/ptp-dev">Mailing List</a> </td>
          <td> Email developers and get involved with PTP development</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="http://wiki.eclipse.org/index.php/PTP/planning">Plans</a> </td>
          <td> Plans for upcoming PTP releases</td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td> <a href="docs/design.html">Design</a> </td>
          <td> PTP design discussion and plans </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="work.html">Work tasks</a> </td>
          <td> Outstanding work items on the project</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="meetings.html">Planning Meetings</a> </td>
          <td>Monthly conference call schedule, agendas and minutes </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td> <a href="contributors.html">Contributors</a> </td>
          <td> List of contributors to the PTP project</td>
        </tr>
    </table>
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
