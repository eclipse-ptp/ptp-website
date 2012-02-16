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

	$pageTitle 		= "PTP Support";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>Being an open source project, PTP support is provided by the community
	on a volunteer basis.
	Use the following mechanisms to reach that community.</p>

<h3>Mailing Lists</h3>
	<p>Two mailing lists are available for PTP users:</p>
        <ul>
        <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-user">ptp-user</a>: 
          For questions or support information about using PTP.</li>
        <li><a href="http://dev.eclipse.org/mailman/listinfo/ptp-announce">ptp-announce</a>: 
          For announcements about forthcoming PTP releases and other significant events.</li>
        </ui>

<h3>Bugzilla</h3>
<p>Report defects and ask for enhancements in
	<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=PTP">Bugzilla</a>.</p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>