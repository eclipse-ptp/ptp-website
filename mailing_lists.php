<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# mailing_lists.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-07-11
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Mailing Lists";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Greg Watson";
	
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
    
    <p>The following mailing lists are available for users and contributors to the PTP project,
    or for people just wishing to keep informed of upcoming PTP events.
    <p>Note that we no longer uses a newsgroup for PTP user discussions. Please use the ptp-user
    mailing list instead.
 
 
    <div class="homeitem3col">
  <h3>PTP Mailing Lists</h3>
     <p>
        <ul>

        <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-user">ptp-user</a>: 
          For questions or information about using PTP.

        <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-dev">ptp-dev</a>: 
          For discussions relating to the development of PTP and related components.

        <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-announce">ptp-announce</a>: 
          For announcements about forthcoming PTP releases and other significant events.

        <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-cvs-commit">ptp-cvs-commit</a>: 
          For CVS individual commit notification. Recommended for committers only.
          
     </div>   
     

    </div>
 
  

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
