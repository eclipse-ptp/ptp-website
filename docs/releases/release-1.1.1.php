<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# release-1.1.1.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2007-09-06  
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP 1.1.1 Release Notes";
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

<div class="homeitem3col">
<h3>New and Noteworthy</h3>
      <p>Release 1.1.1 includes a few bug fixes and improvements over Release 1.1:
      <ul>

<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=173142">Bug #173142</a> - passing multiple arguments to application </li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=194952">Bug #194952</a> - automatically select first debugger in list  </li>
<li>Fixed bug in hash function </li>
<li>Improvements to debugger variable handling</li>
<li>PLDT: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=200623">Bug # 200623</a> - blank 
compiler and linker defaults for MPI</li>
<li>PLDT: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=181846">Bug # 181846</a> - MPI new project
wizard page correctly handles differently-named toolchains (e.g. Mac)</li>

	  </ul>
		<p>	In addition, PTP Release 1.1.1 can be installed via an 
	<a href="http://download.eclipse.org/tools/ptp/releases/1.1.1/">update site</a>, right from the Eclipse workbench.
</div>

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
      <li>Java 1.5 or later (Note: for Linux, must be Sun or IBM's. See below.)</li>
        <li>Eclipse 3.2.x</li>
        <li>CDT 3.1.x</li>
        <li>OpenMPI 1.2 (the earlier 1.0.2 version is also supported)</li>
        <li>gdb 6.3 or later (earlier versions may also work)</li>
      </ul> 
      <p>   
      <h4>Installation</h4>
      <ul>
      	<li><b>Java requirement: </b>If you are using the Linux operating system, download and install either the 
      	<a href="http://java.sun.com/javase/downloads/index_jdk5.jsp">Sun Java Runtime Environment</a>
      	 or the 
        <a href="http://www-128.ibm.com/developerworks/java/jdk/linux/download.html">IBM Java Runtime Environment</a>. 
        The version of Java that ships with Linux <i>will not work</i> with PTP. See the Trouble Shooting
        section for more information.
        <li>Install 
          <a href="http://eclipse.org/downloads">Eclipse 3.2.x (SDK or Platform Runtime Binary)</a>
          and <a href="http://www.eclipse.org/cdt/downloads.php">CDT 3.1.x</a> for your architecture.
          <p>If you plan to do Java or Eclipse development, get the Eclipse SDK.
          If you just want C/C++ (or Fortran via Photran) then the Platform runtime Binary only is
          smaller and less complex.  It's on the "Other downloads" page for the release.
          <p>See <a href="../install.html">Installing Eclipse and PTP</a> for detailed instructions on downloading
          Eclipse, installing CDT, etc.  If you plan to install PTP from the update site,
		you can do it at this point also.
          </li>
        <li>Download and unpack <a href="http://www.open-mpi.org/software/ompi/v1.2/">OpenMPI 1.2</a>.
          If you download a pre-built binary for OpenMPI, you MUST obtain the developer version. If there is no
          developer version available, then you will need to build from source instead.</li>
        <li>Configure, build and install OpenMPI (if necessary)
          <ul>
          	<li>In the main OpenMPI source directory, run the configure command:
          	<p>
          	<code>./configure --with-devel-headers</code>
          	<p> and any other options required for your installation.</li>
          	<li>Build and install OpenMPI using: <p><code>make install</code></li>
          	<li>Note that if you install OpenMPI in a nonstandard location, you may need to 
          	build PTP differently.  See the troubleshooting section below.
          </ul>
        <li>Test your MPI installation by running a small MPI job, e.g.
        <pre>
        mpicc test.c -o test
        mpirun -np 4 test
        </pre>
        </li>
        <li>If you didn't install PTP from the update site while installing CDT,
		<ul>
			<li>Install it from the <a href="http://download.eclipse.org/tools/ptp/releases/1.1.1/">update site</a> now, or</li>
			<li>Download the PTP plug-in and unzip (or un-tar) into the same directory into which Eclipse has been installed.
   		     Do the same with the PLDT download as well, if you want the development tools.</li>
		</ul>
	 
        </li>
        <li>Locate the plug-in <code>org.eclipse.ptp.<i>os</i>.<i>arch</i>_<i>x.y.z</i></code> 
		in the <code>plugins</code> directory, where 
        <code><i>os</i></code> and <code><i>arch</i></code> correspond to your operating system and architecture respectively,
		and <i>x.y.z</i> (if present) corresponds to the release version of that particular plugin, e.g. 1.1.0 or 1.1.1.
		Change to this directory.</li>
        <li>Run the command: <p><code>sh BUILD</code><p> This should build and install the executables. 
        If you see any errors here, please
        refer to the Trouble Shooting section below.
        <br>If you installed OpenMPI in a non-standard location, see below also for an alternate build
        command.
        <li>Start Eclipse.  (You may need to use the <code>-clean</code> parameter to force it to recognize new features and plug-ins).</li>
        <li>Open the PTP Runtime perspective (Window&gt;Open Perspective&gt;Other...). 
        The runtime service will start and you should see a machine and one or more nodes appear in the 'Machines View'.
        </li>
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
          <li>
          <b>I installed OpenMPI in a non-standard location. Do I need to do anything differently?
          </b>
          <p>Yes.  The standard location is <code>/usr/local</code>.
          If you install it to, e.g., <code>/usr/local/openmpi</code>,
          then when you build the platform-specific PTP code, instead of
          <code>sh BUILD</code>
          you should use the following command:
          <br><code>  CFLAGS=-I/usr/local/openmpi/include LDFLAGS="-L/usr/local/openmpi/lib -Wl,-rpath,/usr/local/openmpi/lib" sh BUILD </code>
          </li>
        </ul>
     </li>
	</li>
		<li> <b>I forgot to switch to the PTP Runtime perspective before launching a job.
		Now I see no machines and get messages in the console about simulation.</b>
		<p>Try opening PTP preferences, and assuring runtime control system and monitoring system are set to ORTE.
		If they are, change them to something else and change them back.
		This should reset ORTE as the runtime system.
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
