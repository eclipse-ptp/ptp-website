<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("technology.ptp");
	$projectInfo->generate_common_nav( $Nav );
	
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	#$Nav->addNavSeparator("PTP Home", 	"/ptp/index.php");
	#$Nav->addCustomNav("Downloads", 		"/ptp/downloads.php", 	"_self", 2);
	$Nav->addCustomNav("Builds", 		"/ptp/builds.php", 	"_self", 2);
	#$Nav->addCustomNav("Installation", 		"/ptp/install.php", 		"_self", 2);
	$Nav->addCustomNav("FAQ", 				"/ptp/faq.php", 			"_self", 2);
	$Nav->addCustomNav("Wiki", 				"http://wiki.eclipse.org/index.php/Parallel_Tools_Platform", "_self", 2);
	#$Nav->addCustomNav("Documentation", 	"/ptp/doc.php", 			"_self", 2);
	#$Nav->addCustomNav("Mailing Lists",	"https://dev.eclipse.org/mailman/listinfo", "_self", 2);

?>
