<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# faq.php
	#
	# Author: 		Beth Tibbitts
	# Date:			2006-06-11
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PTP Frequently Asked Questions";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

 <ul>
        <li><a href="#faq1">Q1: How do I download PTP?</a></li>
        <li><a href="#faq2">Q2: What version of Eclipse and CDT do I need?</a> </li>
        <li><a href="#faq3">Q3: What version of MPI do I need to run PTP?</a> </li>
        <li><a href="#faq4">Q4: What platforms and runtimes are supported by PTP now?</a> </li>
        <li><a href="#faq5">Q5: I am seeing [strange behavior]...</a> </li>
        <li><a href="#faq6">Q6: How do I install OpenMPI?</a> </li>
        <li><a href="#faq7">Q7: How do I build PTP myself?</a> </li>
          <li><a href="#faq8">Q8:  I see the error popup "There was an error staring the OMPI proxy runtime ..."</a> </li>
        
      </ul>
      <hr>
    <p><b><font size="3"><a name="faq1" id="faq1"></a>Q1:</font></b> 
    How do I download PTP? </p>
    <p><b><font size="3">A:</font></b> We finally have (Mar. 2006) the RC3 (Release Candidate 3) release of the core PTP software. 
    (That is, the parallel runtime and parallel debugger.)
        <p>
    You can download it from the <a href="downloads.html">PTP download page</a>; check regularly there for new releases, too. </p>
    <p>     PTP also requires
    <a href="http://www.open-mpi.org/software/ompi/v1.0/">OpenMPI v1.0.2</a>
    for the core PTP functionality. 

    <p>The PTP MPI Development tools, and the Fortran Development Tools, are available as well.
    See the <a href="downloads.html">PTP download page</a>.
    <hr>    
    <p><b><font size="3"><a name="faq2" id="faq2"></a>Q2:</font></b> What version of Eclipse and CDT do I need? </p>
    <p><b><font size="3">A:</font></b> PTP is designed to work with Eclipse 3.1. 
    The Fortran Development Tools are designed to work with CDT 3.0, 
    however we will endeavor to build FDT against the latest milestone releases of CDT. </p>
    The MPI development tools also require CDT 3.0.x.
    <hr>    
    <p><b><font size="3"><a name="faq3" id="faq3"></a>Q3:</font></b>
    What version of MPI do I need to run PTP?</p>
    <p><b><font size="3">A:</font></b> 
    For the MPI development tools only (no core PTP), there should be no difference between
    the different versions of MPI, such as 
    <a href="http://www.open-mpi.org">OpenMPI</a> and LamMPI.  You just need to configure your project to be built using 
    <code>mpicc</code>  rather than <code>gcc</code>, and to specify the include path to the MPI header files. 
    This should be  described in the PTP or MPI help.
    
    
    
<p>
As far as the main PTP (core PTP) is concerned, <a href="http://www.open-mpi.org">OpenMPI</a>
is very different from other implementations of MPI.
OpenMPI is a complete rewrite and combines work from four different MPI implementations. 
It also provides a new runtime layer called Open Runtime Environment (OpenRTE) 
which PTP relies heavily on for OpenMPI support in the current version. 
<p>Currently (Feb. 2006) PTP requires  
<a href="http://www.open-mpi.org/software/ompi/v1.0/">OpenMPI v1.0.2</a>.
(Note, as of February 2006 this is still a "pending alpha" release of OpenMPI, but it
works fine for us.)
    
    <hr>
   <p><b><font size="3"><a name="faq4" id="faq4"></a>Q4:</font></b>
   What platforms and runtimes are supported by PTP now?</p>
    <p><b><font size="3">A:</font></b> The first release of core PTP  runs only on:    
<br>Open MPI runtime + debugging on Linux (i386/x86_64/ppc)
<br>Open MPI runtime + debugging on Mac OS X 10.4 (PowerPC)
<p>The MPI Development tools will run anywhere Eclipse and CDT will run.
It simply requires any version of MPI (specifically, its header files) to 
aid in the search for MPI artifacts.
    
        <hr>
    <p><b><font size="3"><a name="faq5" id="faq5"></a>Q5:</font></b>
   I am seeing (a) not finding many symbols when building PTP, or (b)
   [some incorrect behavior, need to document what the symptoms are] 
   when running PTP. What is wrong?</p>
    <p><b><font size="3">A:</font></b> Make sure your PATH has OpenMPI ahead
    of any other MPI implementation you have installed.
    <p>Also, see the "Troubleshooting" section of the 
    <a href="docs/releases/release-1.0.html">Release Notes</a>.
    
                <hr>
    <p><b><font size="3"><a name="faq6" id="faq6"></a>Q6:</font></b>
   How do I install OpenMPI?</p>
    <p><b><font size="3">A:</font></b> Download the latest 1.0.2 version
    of OpenMPI from <a href="http://www.open-mpi.org/software/ompi/v1.0/">the OpenMPI download site.</a>
    
Currently (March 2006) OpenMPI 1.0.2 is (pending) alpha.    
Don&apos;t worry, it works fine for us.
<p>
Be sure to run <code>configure</code> to match how you intend to install PTP.
<ol>
<li>If you intend to install PTP from the download site (pre-built), then
most of the defaults work.
<pre>
./configure 
make all
make install
</pre>
<li>If you intend to download PTP source from CVS and build it yourself,
then be sure to run OpenMPI&apos;s <code>configure</code> "with development headers"
<pre>
./configure --with-devel-headers 
make all
make install
</pre>
</ol>
<ul><li><b>Install location:</b>
 The default installation location is /usr/local;
to modify this, add the <code>--prefix</code> argument.

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
 

        <hr>  
            <p><b><font size="3"><a name="faq8" id="faq8"></a>Q8:</font></b>
   I see the error popup "There was an error staring the OMPI proxy runtime. 
   The path to 'orte_server' or 'orted' may be incorrect.  The 'orted' binary MUST be
   in your PATH to be found by 'orte_server.  Try checking the console log or
   error logs for more detailed information."  
   <p><b><font size="3">A:</font></b> 
   If you have tried the things suggested in the error message 
   (including putting OpenMPI in your PATH), make sure
   you have also killed any previous ompi or orte processes.
   See <a href="docs/build.html#cleanupOmpi">instructions for killing old orte/ompi processes with cleanupOmpi</a>.
    
 

        <hr> 

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
