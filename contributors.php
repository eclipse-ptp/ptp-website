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
		 
  <div class="homeitem3col">
  <h2>Contributors</h2>
    <h3>Committers</h3>
  	<table>
        <TR>
          <TD width="50%" bgColor="#eeeeee" >Nathan DeBardeleben</TD>
          <TD width="25%" bgColor="#eeeeee" >Los Alamos National Laboratory </TD>
        </TR>
        <TR>
          <TD width="50%" bgColor="#eeeeee">Clement Chu</TD>
          <TD width="25%" bgColor="#eeeeee"> Monash Univeristy</TD>
        </TR>
        <TR>
          <TD width="50%" bgColor="#eeeeee">Donny Kurniawan </TD>
          <TD width="25%" bgColor="#eeeeee"> Monash Univeristy</TD>
        </TR>
        <TR>
          <TD width="50%" bgColor="#eeeeee">Craig Rasmussen </TD>
          <TD width="25%" bgColor="#eeeeee">Los Alamos National Laboratory</TD>
        </TR>
        <TR>
          <TD bgColor="#eeeeee">Greg Watson (Project Lead)</TD>
          <TD bgColor="#eeeeee"> Los Alamos National Laboratory</TD>
        </TR>
        <TR>
          <TD width="50%" bgColor="#eeeeee">Beth Tibbitts </TD>
          <TD width="25%" bgColor="#eeeeee"> IBM Research </TD>
        </TR>
        <TR>
          <TD bgColor="#eeeeee">Tianchao Li </TD>
          <TD bgColor="#eeeeee">Technische Universit&auml;t M&uuml;nchen </TD>
        </TR>
        </table>
        <h3>Other Contributors</h3>
        <table>
        <TR>
          <TD bgColor="#eeeeee">David Abramson</TD>
          <TD bgColor="#eeeeee"> Monash University </TD>
        </TR>
        <TR>
          <TD bgColor="#eeeeee">Don Pazel </TD>
          <TD bgColor="#eeeeee"> IBM Research </TD>
        </TR>
        <TR>
          <TD bgColor="#eeeeee">Bill Chung </TD>
          <TD bgColor="#eeeeee">IBM Research </span></TD>
        </TR>
        <TR>
          <TD width="50%" bgColor="#eeeeee">Anirban Sinha </TD>
          <TD width="25%" bgColor="#eeeeee">University of British Columbia </TD>
        </TR>
    </TABLE>
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

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Right column</h6>
			<ul>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
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
