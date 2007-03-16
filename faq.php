<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Frequently Asked Questions";
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

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>List of FAQs</h2>

		 <ul>
        <li><a href="#faq1">Q1: How do I download PTP?</a></li>
        <li><a href="#faq2">Q2: What version of Eclipse and CDT do I need?</a> </li>
        <li><a href="#faq3">Q3: What version of MPI do I need to run PTP?</a> </li>
        <li><a href="#faq4">Q4: What platforms and runtimes are supported by PTP now?</a> </li>
        <li><a href="#faq5">Q5: I&apos;m seeing [strange behavior]...</a> </li>
        <li><a href="#faq6">Q6: How do I install OpenMPI?</a> </li>
        <li><a href="#faq7">Q7: How do I build PTP myself?</a> </li>
          <li><a href="#faq8">Q8:  I see the error popup &quot;There was an error starting the OMPI proxy runtime ...&quot;</a> </li>
        
      </ul>
      <hr>
    <p><b><font size="3"><a name="faq1" id="faq1"></a>Q1:</font></b> 
    How do I download PTP? </p>
    <p><b><font size="3">A:</font></b> The 1.1.0  release of the PTP Core software 
    (That is, the parallel runtime and parallel debugger) is available for Linux and Mac OS.
        <p>
    You can download it from the <a href="downloads.php">PTP download page</a>; check regularly there for new releases, too. </p>
    <p>     PTP also requires
    <a href="http://www.open-mpi.org/software/ompi/v1.0/">OpenMPI v1.0.2 or v1.2</a>
    for the PTP Core functionality. 
    <p>After downloading, be sure to run the shell script to build for your machine... 
    see the <a href="http://www.eclipse.org/ptp/docs/releases/release-1.1.php">release notes and installation instructions.</a>

    <p>The PTP Parallel Language Development tools (PLDT) - 
    formerly named MPI Development tools - and <a href="http://eclipse.org/photran">Photran</a>, 
    for Fortran development, 
    are available as well, on more platforms.
    See the <a href="downloads.php">PTP downloads page</a>.
    <hr>    
    <p><b><font size="3"><a name="faq2" id="faq2"></a>Q2:</font></b> What version of Eclipse and CDT do I need? </p>
    <p><b><font size="3">A:</font></b> PTP and PLDT 1.1.0 are designed to work with Eclipse 3.2.x and CDT 3.1.x.
    </p>
    
    <hr>    
    <p><b><font size="3"><a name="faq3" id="faq3"></a>Q3:</font></b>
    What version of MPI do I need to run PTP?</p>
   
<p><b><font size="3">A:</font></b> 
As far as the main PTP (PTP Core) is concerned, <a href="http://www.open-mpi.org">OpenMPI</a>
is very different from other implementations of MPI.
OpenMPI is a complete rewrite and combines work from four different MPI implementations. 
It also provides a new runtime layer called Open Runtime Environment (OpenRTE) 
which PTP relies heavily on for OpenMPI support in the current version. 
<p>Currently PTP (Release 1.1.0, March 2007) requires  
<a href="http://www.open-mpi.org/software/ompi/v1.0/">OpenMPI v1.0.2 or v1.2</a>.

<p>
    For the PLDT only (no PTP Core), there should be no difference between
    the different versions of MPI, such as 
    <a href="http://www.open-mpi.org">OpenMPI</a> and LamMPI.  You just need to configure your project to be built using 
    <code>mpicc</code>  rather than <code>gcc</code>, and to specify the include path to the MPI header files. 
    This should be  described in the <a href="http://www.eclipse.org/ptp/documentation/org.eclipse.ptp.pldt.help/html/setup.html">
    PLDT help</a>.
    
    <hr>
   <p><b><font size="3"><a name="faq4" id="faq4"></a>Q4:</font></b>
   What platforms and runtimes are supported by PTP now?</p>
    <p><b><font size="3">A:</font></b> The current release of core PTP  runs only on:    
<br>Open MPI runtime + debugging on Linux (i386/x86_64/ppc)
<br>Open MPI runtime + debugging on Mac OS X 10.4 (PowerPC)
<p>The PLDT will run anywhere Eclipse 3.2 and CDT 3.1 will run.
It simply requires any version of MPI (specifically, its header files) to 
aid in the search for MPI artifacts.  And an OpenMP header file, if OpenMP analysis is needed.
    
        <hr>
    <p><b><font size="3"><a name="faq5" id="faq5"></a>Q5:</font></b>
   I&apos;m seeing (a) not finding many symbols when building PTP, or (b)
   [some incorrect behavior, need to document what the symptoms are] 
   when running PTP. What&apos;s wrong?</p>
    <p><b><font size="3">A:</font></b> Make sure your PATH has OpenMPI ahead
    of any other MPI implementation you have installed.
    <p>Also, see the "Troubleshooting" section of the 
    <a href="docs/releases/release-1.1.php">Release Notes and installation instruction</a>.
    
                <hr>
    <p><b><font size="3"><a name="faq6" id="faq6"></a>Q6:</font></b>
   How do I install OpenMPI?</p>
    <p><b><font size="3">A:</font></b> Download the latest 1.2 version
    of OpenMPI from <a href="http://www.open-mpi.org/software/ompi/v1.2/">the OpenMPI download site.</a>
    
<p>
See the <a href="http://www.eclipse.org/ptp/docs/releases/release-1.1.php">release notes for details on installing OpenMPI.

<ul><li><b>Install location:</b>
 The default installation location is /usr/local;
to modify this, add the <code>--prefix</code> argument to ./configure.

<pre>./configure --prefix=/path/to/your/ompi/install</pre>

Be sure and add the bin directory to your path, e.g.
<pre>export PATH=$PATH:/usr/local/bin  
</pre>
or
<pre>export PATH=$PATH:/path/to/your/ompi/install/bin
</pre>
</ul>
<p>
At this point it&apos;s a good idea to run a small mpi program to test you have
installed OpenMPI correctly.
<pre>
mpicc testMPI.c -o testMPI
mpirun -np 2 testMPI
</pre>


        <hr>
    <p><b><font size="3"><a name="faq7" id="faq7"></a>Q7:</font></b>
   How do I build PTP myself?</p>
    <p><b><font size="3">A:</font></b> 
    See the <a href="docs/build.html">PTP build procedure</a> instructions.
    [May not be updated for 1.1]
 

        <hr>  
            <p><b><font size="3"><a name="faq8" id="faq8"></a>Q8:</font></b>
   I see the error popup &quot;There was an error starting the OMPI proxy runtime. 
   The path to &apos;orte_server&apos; or &apos;orted&apos; may be incorrect.  The &apos;orted&apos; binary MUST be
   in your PATH to be found by &apos;orte_server&apos;.  Try checking the console log or
   error logs for more detailed information.&quot;  
   <p><b><font size="3">A:</font></b> 
   If you have tried the things suggested in the error message 
   (including putting OpenMPI in your PATH), make sure
   you have also killed any previous ompi or orte processes.
   See <a href="docs/build.html#cleanupOmpi">instructions for killing old orte/ompi processes with cleanupOmpi</a>.
    
 

        <hr> 
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>More PTP Stuff</h6>
			<ul>
				<li><a href="">User Guide and other docs</a></li>
				<li><a href="http://www.computer.org/portal/site/cise/menuitem.92a12adebee18778161489108bcd45f3/index.jsp?&pName=cise_level1_article&TheCat=1001&path=cise/2006/v8n4&file=sci.xml&">
				<i>Developing Scientific Applications in Eclipse</i></a> article describes Eclipse and PTP</li>
				
			</ul>
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
