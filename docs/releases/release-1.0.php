<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# release-1.0.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-19 (from original *.html)
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Release Notes";
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

<div id="maincontent">

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>PTP Release Notes for Release 1.0</h2>


<div class="homeitem3col">

<h3>Parallel Tools Platform </h3>

    <p>Note: installation of the PTP component is not required if you just want to use the <a href="#MDT">MPI Development Tools</a> or <a href="#FDT">Fortran Development Tools </a>components. Please see the appropriate sections below for release notes on these components. </p>
      <p>The main PTP components are split into three parts:</p>
      <ul>
        <li>a set of Eclipse plug-ins</li>
        <li>an architecture-specific runtime plug-in</li>
        <li>an architecture-specific debugger plug-in</li>
      </ul>
      <h4>Prerequisites</h4>
      <ul>
      <li>Java 1.4.2 or later</li>
        <li>Eclipse 3.1.x</li>
        <li>CDT 3.0.x</li>
        <li>OpenMPI 1.0.2</li>
        <li>gdb 6.3 (earlier versions may also work)</li>
      </ul>    
      <h4>Installation</h4>
      <ol>
        <li>Install 
          <a href="http://eclipse.org/downloads">Eclipse SDK 3.1.x</a>
          and <a href="http://download.eclipse.org/tools/cdt/releases/eclipse3.1">CDT 3.0.x SDK</a> for your architecture.</li>
        <li>Download, build and install <a href="http://www.open-mpi.org/software/ompi/v1.0/">OpenMPI 1.0.2</a>. 
          (Note: as of February 2006, this is still a &quot;pending alpha&quot; release
          of OpenMPI 1.0.2, but it works fine for us.)
          If you intend to build PTP from source, instead of downloading it pre-built
          from the <a href="../../downloads.php">downloads</a> page, 
          make sure you supply the <code>--with-devel-headers</code> argument to the <code>configure</code> command.</li>
        <li> Test your MPI installation by running a small MPI job.</li>
        <li>Download PTP core and the runtime and debugger plug-ins that suit your architecture.</li>
        <li>Unzip (or un-tar) into the same directory into which Eclipse has been installed.</li>
        <li> Start Eclipse.  (You may need to use the &quot;-clean&quot; parameter to force it to recognize new features and plug-ins).</li>
        <li>Open the PTP Runtime perspective (Window&gt;Open Perspective&gt;Other...). This should automatically select the Open MPI runtime preference and start the runtime service. If you have a problem here, please refer to the Troubleshooting section. </li>
        <li>More details on using PTP can be found  in Help  &gt; Help Contents.  Click on &quot;PTP: Parallel Tools Platform &quot;. </li>
      </ol>
      <h4>Troubleshooting</h4>
      <p><b>
        PTP session hangs in &apos;Refresh runtime system&apos; dialog. </b>
      <p>This is usually one of the following things:
      
      <ol>
          <li>OpenMPI lock problem: (See also a <a href="../build.html#cleanupOmpi">handy shell script for doing this cleanup</a>)
            <ul>
              <li>Quit out of Eclipse </li>
              <li>Check there are no orted, orte_server or sdm programs running with the &apos;ps ax&apos; command.</li>
              <li>If there are, kill them off.</li>
              <li>Check for any directories in /tmp starting with &apos;openmpi-sessions-&lt;username&gt;&apos; . Remove the directory and all its contents.</li>
              <li>Restart Eclipse</li>
            </ul>
        </li>
        <li>Unable to locate OpenMPI libraries:
          <ul>
            <li>The orte_server is dynamically linked against the OpenMPI libraries, so needs to be able to locate your OpenMPI installation to run.</li>
            <li>You can check this by manually running the orte_server. If you see anything other than the message &quot;<code>proxy_svr_connect returned.</code>&quot; then this is likely to be the problem.</li>
            <li>On Linux, make sure the OpenMPI libraries are  located in /usr/local/lib, /usr/lib or /lib, or you have set your LD_LIBRARY_PATH correctly.</li>
            <li>On Mac OS X, make sure the OpenMPI libraries are located in $(HOME)/lib, /usr/local/lib, /usr/lib or /lib, or you have set your DYLD_LIBRARY_PATH correctly. </li>
          </ul>
        </li>
        <li>Window manager path problem:
          <ul>
            <li>The window manager and shell get their paths from different places. </li>
            <li>If you are launching Eclipse using a window manager, you need to make sure that the OpenMPI installation is in the window manager path.</li>
            <li>Even if you can use &apos;mpirun&apos; successfully from a shell it does not necessary mean that the window manager path is correct.</li>
            <li>Mac OS X:
              <ul>
                <li>The path is set by creating an environment.plist file in a directory called .MacOSX in your home directory. </li>
                <li>The file should look like this, with [path_including_ompi_installation] replaced with the correct path:
                  <pre>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;<br>&lt;!DOCTYPE plist PUBLIC &quot;-//Apple Computer//DTD PLIST 1.0//EN&quot; &quot;http://www.apple.com/DTDs/PropertyList-1.0.dtd&quot;&gt;<br>&lt;plist version=&quot;1.0&quot;&gt;<br>&lt;dict&gt;<br>        &lt;key&gt;PATH&lt;/key&gt;<br>        &lt;string&gt;[path_including_ompi_installation]&lt;/string&gt;<br>&lt;/dict&gt;<br>&lt;/plist&gt;</pre>
                </li>
              </ul>
            </li>
            <li>Linux/KDE:
              <ul>
                <li>Anybody know? </li>
              </ul>
            </li>
            <li>Linux/Gnome:
              <ul>
                <li>Anybody know? <br>
                </li>
              </ul>
            </li>
          </ul>
        </li>
  </ol>   
  </div>
		 
		<div class="homeitem3col">
			<h3>MPI Development Tools</h3>
  <p>The MPI Development Tools require an MPI installation to be available on 
  the machine running Eclipse. Unlike PTP, any MPI installation should work 
  (MPICH, LAM-MPI, etc.) The MPI Development Tools only requires access to the MPI header 
  files to be able to recognize the MPI artifacts. </p>
      <h4>Prerequisites</h4>
      <ul>
        <li>Eclipse 3.1.x</li>
        <li>CDT 3.0.x</li>
        <li>An MPI installation </li>
      </ul>
      <h4>Installation</h4>
      <ol>
        <li>Install Eclipse 3.1.x and CDT 3.0.x for your architecture.</li>
        <li>Download the &apos;MPI Development Tools&apos; distribution from from <a href="http://eclipse.org/ptp/downloads.php">here</a>.</li>
        <li>Unzip (or un-tar) into same directory into which  Eclipse has been installed (or use the update site).</li>
        <li>Start Eclipse.  (You may need to use the &quot;-clean&quot; parameter to force it to recognize new features and plug-ins).</li>
        <li>You should see the two new &quot;MPI&quot; buttons in the toolbar.</li>
        <li>Follow the instructions in Help  &gt; Help Contents.  Click on &quot;PTP MPI Tools&quot;.   </li>
        <li>Setup and running instructions include a small sample C MPI file for testing.</li>
    </ol>
</div>
		<div class="homeitem3col">
			<h3>Fortran Development Tools</h3>


      <h4>Prerequisites</h4>
      <ul>
      <li>Eclipse 3.1.x</li>
      <li>CDT 3.0</li>
      </ul>
      <h4>Installation</h4>
      <ol>
      <li>Install Eclipse 3.1.x and CDT 3.0 for your architecture.</li>
      <li>Download the &apos;CDT with mixed-language projects&apos; and &apos;Fortran Development Tools&apos; distributions from <a href="http://eclipse.org/ptp/downloads.php">here</a>.</li>
      <li>Unzip (or un-tar) into same directory into which  Eclipse has been installed (or use the update site).</li>
      <li>Start Eclipse.  (You may need to use the &quot;-clean&quot; parameter to force it to recognize new features and plug-ins).</li>
      </ol>  
      <h4>Notes</h4>
      <p>The installation of the Fortran Development Tools will replace some of your 
      existing CDT 3.0 components. 
      This adds support for mixed language projects (i.e. combining C, C++ and Fortran into 
      a single project), and also introduces some changes necessary to support the FDT 
      plug-ins. These changes will be included in  CDT release 3.1 (June 2006) </p>    
      </div>
</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
