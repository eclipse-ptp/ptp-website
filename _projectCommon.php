<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	require_once($_SERVER['DOCUMENT_ROOT'] . "/ptp/project-info/project-info.class.php");
	$projectInfo = new ProjectInfo("tools.ptp");
	
	function add2users() {
		global $Nav;
		#$Nav->addCustomNav("Mailing Lists", "/mail/index_project.php", "_self", 2);
		$Nav->addCustomNav("Documentation", "/ptp/doc.php", 		"_self", 2);
		$Nav->addCustomNav("FAQ", 			"http://wiki.eclipse.org/PTP/FAQ", 		"_self", 2);
		$Nav->addCustomNav("Mailing Lists",	"http://eclipse.org/ptp/mailing_lists.php", "_self", 2);
	}   
	function add2contributors() {
		global $Nav;
		$Nav->addCustomNav("Builds", "http://wiki.eclipse.org/PTP/builds", "_self", 2);
		$Nav->addCustomNav("Source Code",	"http://dev.eclipse.org/viewsvn/index.cgi/org.eclipse.ptp/?root=Tools_Project", "_self", 2);
		$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/PTP", "_self", 2);
	}
	
	$projectInfo->generate_common_nav( $Nav, "add2users", NULL, "add2contributors");
		
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	#$Nav->addNavSeparator("PTP Home", 	"/ptp/index.php");
	#$Nav->addCustomNav("Builds", 		"http://wiki.eclipse.org/PTP/builds", 		"_self", 2);
	#$Nav->addCustomNav("Wiki", 			"http://wiki.eclipse.org/PTP", "_self", 2);

?>
