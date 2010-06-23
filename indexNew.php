<?php
/*******************************************************************************
 * Copyright (c) 2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());
	
	$localVersion = false;
	
	$pageTitle 		= "Eclipse PTP";
	
	// 	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
<div id="bigbuttons">
<h3>Primary Links</h3>
<ul>
<li><a id="buttonDownload" href="downloads.php" title="Download">
	Eclipse Parallel Tools Platform, Software Install Site</a></li>
<li><a id="buttonDocumentation" href="doc.php" title="Documentation">
	Tutorials, Examples, Videos, Reference Documentation</a></li>
<li><a id="buttonSupport" href="support.php" title="Support">
	Bug Tracker, Newsgroup</a></li>
<li><a id="buttonInvolved" href="developers.php" title="Getting Involved">
	CVS, Workspace Setup, Wiki, Committers</a></li>
</ul>
</div>

<div id="midcolumn">
<h3>Eclipse PTP (Parallel Tools Platform)</h3>

<div id="introText">

<p>The PTP Project provides .. blah blah blah
</p>

<img class="displayed" src="/cdt/images/snapshots.gif" alt="PTP Snapshots" border="0"/>

</div>

</div>

<div id="rightcolumn">

<div>
<h3>Current Status</h3>
<p>PTP version 4.0 is now available for Eclipse Helios.</p>
<p>Release review material is now available. See the
	<a href="releases/cdt7.0/PTP_Helios_Review.pdf">Review Slides</a>
	and the
	<a href="releases/cdt7.0/PTP_Helios_Approved_IP_Log.pdf">Approved IP log</a>.
</p>
</div>

<div id="headlines">
<h3>PTP 3.0.1 Now Available</h3>
<p>Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
</div>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
