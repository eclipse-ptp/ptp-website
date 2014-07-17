<?php

/*******************************************************************************
 * Copyright (c) 2009-2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "solstice";
	include("sidebar.php");

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
		
	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/ptp/style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("PTP", 	"/ptp");
	$Nav->addCustomNav("About PTP", "http://www.eclipse.org/projects/project_summary.php?projectid=tools.ptp", "_self", 2);
	
	$Nav->addNavSeparator("Resources", null);
	$Nav->addCustomNav("Documentation", "/ptp/doc.php", "_self", 2);
   	$Nav->addCustomNav("Downloads", "/ptp/downloads.php", "_self", 2);
	$Nav->addCustomNav("Support", "/ptp/support.php", "_self", 2);
	
	$Nav->addNavSeparator("Project", null);
	$Nav->addCustomNav("Developers", "/ptp/developers.php", "_self", 2);
	$Nav->addCustomNav("Contributing", "/ptp/developers.php", "_self", 2);
	$Nav->addCustomNav("Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=tools.ptp", "_self", 2);
    $Nav->addCustomNav("IP Log", "http://www.eclipse.org/projects/ip_log.php?projectid=tools.ptp", "_self", 2);
    $Nav->addCustomNav("Source", "http://git.eclipse.org/c/ptp", "_self", 2);
	#$Nav->addCustomNav("Project Stats", "/projects/project_summary.php?projectid=tools.ptp", "_self", 2);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "Eclipse, Parallel Programming, Parallel debugger, Parallel Tools, MPI, OpenMP, OpenMPI, Fortran, C, C++";
	$pageAuthor		= "Beth Tibbitts   tibbitts@us.ibm.com";
?>