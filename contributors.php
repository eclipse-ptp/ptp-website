<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# contributors.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-12
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Contributors";
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
		<p>The PTP Project wishes to acknowledge contributions made by the 
		following people:
		 
  <div class="homeitem3col">
  <h3>Committers</h3>
  
		  <ul>
		  <li>Greg Watson (Project Lead), Los Alamos National Laboratory
		  <li>Craig Rasmussen, Los Alamos National Laboratory
		  <li>Nathan DeBardeleben, Los Alamos National Laboratory
		  <li>Clement Chu, Monash Univeristy
		  <li>Donny Kurniawan, Monash Univeristy
		  <li>Beth Tibbitts, IBM Research
		  <li>Tianchao Li, Technische Universit&auml;t M&uuml;nchen 
		  </ul>
		  <p>
 
        <h3>Other Contributors</h3>
        <ul>
        <li>David Abramson,  Monash University 
        <li>Don Pazel, Google Inc.
        <li>Bill Chung, IBM Research
        <li>Anirban Sinha, University of British Columbia
        <li>Wyatt Spear, University of Oregon
        </ul>
        <p>
    <h3>Supporters</h3>
 
      <p>The following organizations have offered support for the ptp project: </p>
      <ul>
          <li>Altera Corporation</TD>
          <li>AWE, PLC</TD>
          <li>Etnus, LLC</TD>
          <li>IBM Research </TD>
          <li>Intel Corporation </TD>
          <li>ITACA</TD>
          <li>Louisiana State University </TD>
          <li>Monash University </TD>
          <li>Open HPC Inc. </TD>
          <li>Open MPI </TD>
          <li>Rice University </TD>
          <li>Scalable Systems Pte Ltd</TD>
          <li>Technische Universitaet Muenchen</TD>
          <li>Terra Soft Solutions</TD>
          <li>University of Oregon</TD>
          <li>University of Tennessee</TD>
    </ul>
     
</div>
 

	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
