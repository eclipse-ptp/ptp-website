<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2010
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "Getting Involved";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<ul>
<li>
	<a href="http://wiki.eclipse.org/PTP#Developer_Resources">
	Resources for PTP developers</a>
</li>
<li>The 
	<a href="http://wiki.eclipse.org/PTP">
	PTP Wiki</a> usually has the latest information about PTP for Developers, as well as users.
</li>
<li>
    <a href="http://dev.eclipse.org/mailman/listinfo/ptp-dev">
    PTP Developers Mailing List</a><br>
	Mailing list for PTP Developers.
	If you are PTP user please use the
	<a href="http://dev.eclipse.org/mailman/listinfo/ptp-user">
	PTP User Mailing List</a> instead.
</li> 
<li>
    <a href="https://bugs.eclipse.org/bugs/query.cgi?product=PTP">
   	Bugzilla</a><br>Search for PTP bugs.
</li> 
<li>
    <a href="http://wiki.eclipse.org/PTP/environment_setup_60">
   	Developer Environment</a><br> setup information includes how to access the Git repository at dev.eclipse.org.
</li>
</ul>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>