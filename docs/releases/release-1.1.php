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
		<h2>PTP Release Notes for Release 1.1</h2>


<div class="homeitem3col">

<h3>Parallel Tools Platform </h3>

      <p>The PTP plug-in provides the following functionality</p>
      <ul>
        <li>The PTP Runtime perspective, including an abstract parallel machine view, jobs view and parallel launch configuration</li>
        <li>The PTP Debug perspective, Parallel Debug view and scalable debug manager (SDM)</li>
        <li>Parallel Language Development Tools (PLDT) [Note: these tools are installed as a separate plug-in below]</li>
      </ul>
      <p>
      <h4>Prerequisites</h4>
      <ul>
      <li>Java 1.5 or later</li>
        <li>Eclipse 3.2.x</li>
        <li>CDT 3.1.x</li>
        <li>OpenMPI 1.2 (the earlier 1.0.2 version is also supported)</li>
        <li>gdb 6.3 or later (earlier versions may also work)</li>
      </ul> 
      <p>   
      <h4>Installation</h4>
      <ul>
      	<li>If you are using the Linux operating system, download and install either the 
      	<a href="http://java.sun.com/javase/downloads/index_jdk5.jsp">Sun Java Runtime Environment</a>
      	 or the 
        <a href="http://www-128.ibm.com/developerworks/java/jdk/linux/download.html">IBM Java Runtime Environment</a>. 
        The version of Java that ships with Linux <i>will not work</i> with PTP. See the Trouble Shooting
        section for more information.
        <li>Install 
          <a href="http://eclipse.org/downloads">Eclipse SDK 3.2.x</a>
          and <a href="http://www.eclipse.org/cdt/downloads.php">CDT 3.1.x</a> for your architecture.</li>
        <li>Download and unpack <a href="http://www.open-mpi.org/software/ompi/v1.2/">OpenMPI 1.2</a>. 
          (Note: as of March 2007, this is still a &quot;pre-release&quot; version
          of OpenMPI 1.2, but it works fine for us.)
          If you download the pre-built binary for OpenMPI, you MUST obtain the developer version. If there is no
          developer version available, then you will need to build from source instead.</li>
        <li>Configure, build and install OpenMPI (if necessary)
          <ul>
          	<li>In the main OpenMPI source directory, run the configure command:
          	<p>
          	<code>./configure --with-devel-headers</code>
          	<p> and any other options required for your installation.</li>
          	<li>Build and install OpenMPI using: <p><code>make install</code></li>
          </ul>
        <li>Test your MPI installation by running a small MPI job.</li>
        <li>Download the PTP plug-in and unzip (or un-tar) into the same directory into which Eclipse has been installed.</li>
        <li>Locate the plug-in <code>org.eclipse.ptp.<i>os</i>.<i>arch</i></code> in the <code>plugins</code> directory, where 
        <code><i>os</i></code> and <code><i>arch</i></code> correspond to your operating system and architecture respectively. Change to this directory.</li>
        <li>Run the command: <p><code>sh BUILD</code><p> This should build and install the executables. If you see any errors here, please
        refer to the Trouble Shooting section below.
        <li>Start Eclipse.  (You may need to use the <code>-clean</code> parameter to force it to recognize new features and plug-ins).</li>
        <li>Open the PTP Runtime perspective (Window&gt;Open Perspective&gt;Other...). This should automatically select the Open MPI runtime preference and start the runtime service. 
        If you have a problem here, please refer to the Trouble Shooting section. </li>
        <li>More details on using PTP can be found  in Help&gt;Help Contents.  Click on &quot;PTP: Parallel Tools Platform &quot;. </li>
      </ul>
      <p>
      <h4>Trouble Shooting</h4>
      <ul class="midlist">
      <li>
        <b>I get lots of error messages about missing include files when running the <code>BUILD</code> script.</b>
        <p>This is because OpenMPI was not configured to include the development headers. You need to re-run the configure command
        for the OpenMPI installation specifying the <code>--with-devel-headers</code> option.</p>
      </li>

	  <li>
	    <b>Switching to the PTP Runtime perspective hangs in a dialog with the message &apos;Starting OMPI proxy runtime...&apos;</b>
        <p>If this dialog is replaced with an error dialog after a delay, and you are running PTP on
        a Linux system, then it is likely that you have not installed either the Sun or IBM Java Runtime
        Environments. The Java that is shipped with Linux will not work with PTP.
        <p>In all other cases, this is almost always a problem with the location of the OpenMPI shared libraries on Linux systems. 
        The proxy server is dynamically linked against the OpenMPI libraries, so needs to be able to locate your 
        OpenMPI libraries in order to run.</p>
        <p>You can check this by manually running the proxy server using the command 
        <code><i>eclipse</i>/plugins/org.eclipse.ptp.<i>os</i>.<i>arch</i>/bin/ptp_orte_proxy</code> (replace <code><i>eclipse</i></code> with
        the locatation of your Eclipse installation and <code><i>os</i></code> and <code><i>arch</i></code> with your operating system and 
        architecture respectively). If you see anything other than the message &quot;<code>proxy_svr_connect returned.</code>&quot; then this 
        is likely to be the problem.</p>

	    <ul>
	      <li>
	        If you are starting Eclipse from a shell make sure the OpenMPI libraries are located in 
	        <code>/usr/local/lib</code>, <code>/usr/lib</code> or <code>/lib</code>,
            or you have set your <code>LD_LIBRARY_PATH</code> environment variable correctly.
          </li>
          <li>
            If you are starting Eclipse from a window manager (Gnome, KDE, etc.) then it is usual that the window manager and shell get 
            their environment from different places. This means that setting the <code>LD_LIBRARY_PATH</code> in you <code>.profile</code> may not
            be sufficient; even if you can run an MPI program using <code>mpirun</code> successfully from a shell it does not necessarily
            mean that the window manager is set up correctly. Consult your window manager documentation for information on how
            to set environment variables.
          </li>
        </ul>
      </li>
      
      <li>
        <b>Switching to the PTP Runtime perspective results in a dialog with the message:
        <p>&quot;There was an error starting the OMPI proxy runtime. The path to &apos;ptp_orte_proxy&apos; or &apos;orted&apos; may have 
        been incorrect. The &apos;orted&apos; binary MUST be in your PATH to be found by &apos;ptp_orte_proxy&apos;. Try checking the
        console log or error logs for more detailed information.&quot;</p></b>
        <p>This is a similar problem to the shared library issue above. Make sure that your PATH is set to correctly include the location
        of the OpenMPI <code>bin</code> directory.</p>
 	    <ul>
	      <li>
	        If you are starting Eclipse from a shell add the path to the OpenMPI binaries to the PATH environment variable in your
	        login script.
          </li>
          <li>
            If you are starting Eclipse from a Linux window manager (Gnome, KDE, etc.) then consult your window manager documentation 
            for information on how to set environment variables.
          </li>
          <li>
            If you are starting Eclipse from the MacOS X window manager (Aqua), the PATH must be set by creating a file called 
            <code>environment.plist</code> in a directory called <code>.MacOSX</code> in 
            your home directory.
            <p>The file should look like this, with <code>[path_to_ompi_binaries]</code> replaced with the correct path:
               <pre>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;!DOCTYPE plist PUBLIC &quot;-//Apple Computer//DTD PLIST 1.0//EN&quot;
&quot;http://www.apple.com/DTDs/PropertyList-1.0.dtd&quot;&gt;
&lt;plist version=&quot;1.0&quot;&gt;
&lt;dict&gt;
  &lt;key&gt;PATH&lt;/key&gt;
  &lt;string&gt;[path_to_ompi_binaries]&lt;/string&gt;
  &lt;/dict&gt;
&lt;/plist&gt;
               </pre></p>
          </li>
        </ul>
     </li>
     </ul> 
  </div>
		 
		<div class="homeitem3col">
			<h3>Parallel Language Development Tools</h3>
  <p>The Parallel Language Development Tools require an MPI installation to be available on 
  the machine running Eclipse. Unlike PTP, any MPI installation should work 
  (MPICH, LAM-MPI, etc.) The Parallel Language Development Tools only requires access to the MPI header 
  files to be able to recognize the MPI artifacts. </p>
      <h4>Prerequisites</h4>
      <ul>
        <li>Eclipse 3.2.x</li>
        <li>CDT 3.1.x</li>
        <li>An MPI installation </li>
      </ul>
      <h4>Installation</h4>
      <ol>
        <li>Install Eclipse 3.2.x and CDT 3.1.x for your architecture.</li>
        <li>Download the &apos;Parallel Language Development Tools&apos; distribution.</li>
        <li>Unzip (or un-tar) into same directory into which  Eclipse has been installed (or use the update site).</li>
        <li>Start Eclipse.  (You may need to use the &quot;-clean&quot; parameter to force it to recognize new features and plug-ins).</li>
        <li>You should see the two new &quot;MPI&quot; buttons,
        and two new &quot;OpenMP&quot; buttons, in the toolbar.</li>
        <li>Follow the instructions in Help  &gt; Help Contents.  Click on 
        &quot;PTP Parallel Language Development Tools&quot;.   </li>
        <li>Setup and running instructions include a small sample C MPI file for testing.</li>
    </ol>
</div>
		<div class="homeitem3col">
			<h3>Fortran Development Tools</h3>


      <p>See the <a href="http://eclipse.org/photran">Photran project</a>.
      
      </div>
</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
