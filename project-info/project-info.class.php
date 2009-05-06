<?php
/**
 * THE ACCOMPANYING PROGRAM IS PROVIDED UNDER THE TERMS OF THIS ECLIPSE PUBLIC LICENSE (http://www.eclipse.org/legal/epl-v10.html).
 * ANY USE, REPRODUCTION OR DISTRIBUTION OF THE PROGRAM CONSTITUTES RECIPIENT'S ACCEPTANCE OF THIS AGREEMENT.
 *
 */
require_once($_SERVER['DOCUMENT_ROOT'] ."/eclipse.org-common/classes/projects/projectInfoData.class.php");

class ProjectInfo {
	private $info;
	private $projectkey;
	function ProjectInfo($key) {
		$this->projectkey = $key;
		$this->info = new ProjectInfoData($this->projectkey);
	}

	/**
	 * Generate the common left menu navigation menu
	 */
    function generate_common_nav( $thenav, $users = NULL, $integrators = NULL, $contributors = NULL ) {
    	global $Nav;
    	$Nav->setLinkList( array() );
    	$Nav->addNavSeparator( $this->info->projectshortname, $this->info->projecturl );
    	$Nav->addCustomNav( "About This Project",
    		"/projects/project_summary.php?projectid=" . $this->projectkey, "", 1  );

        $Nav->addCustomNav("Users", htmlspecialchars($this->info->gettingstartedurl), "", 1);
 	        $Nav->addCustomNav("Getting Started", htmlspecialchars($this->info->gettingstartedurl), "", 2);
	        $Nav->addCustomNav("Downloads", htmlspecialchars($this->info->downloadsurl), "", 2);
	        #$Nav->addCustomNav("Newsgroups", htmlspecialchars($this->newsgroup_url()), "", 2);
	        $Nav->addCustomNav("Bugs", htmlspecialchars($this->bugzilla_url()), "", 2);
	        if( !empty($users) ) {
	        	$users($Nav);
	        }
        $Nav->addCustomNav("Integrators", htmlspecialchars($this->info->integratorsurl), "", 1);
	        $Nav->addCustomNav("API Plan", htmlspecialchars($this->info->projectplanurl), "", 2);
	        if( !empty($integrators) ) {
	        	$integrators($Nav);
	        }
        $Nav->addCustomNav("Contributors", htmlspecialchars($this->info->contributingurl), "", 1);
	        $Nav->addCustomNav("Contributing", htmlspecialchars($this->info->contributingurl), "", 2);
	        #$Nav->addCustomNav("Mailing Lists", htmlspecialchars($this->mailinglist_url()), "", 2);
	        if( !empty($contributors) ) {
	        	$contributors($Nav);
	        }
    }

    function newsgroup_url() {
    	$x = $this->info->newsgroups;
    	if( !$x ) return "";
    	if( count($x) > 0 ) $x = $x[0];
    	if($x->name)
    		return "http://dev.eclipse.org/newslists/news." . $x->name . "/maillist.html";
		else
			return '';
    }
    function mailinglist_url() {
    	$x = $this->info->mailinglists;
    	if( !$x ) return "";
    	if( count($x) > 0 ) $x = $x[0];
    	if($x->name)
    		return "https://dev.eclipse.org/mailman/listinfo/" . $x->name;
		else
			return '';
    }
    function bugzilla_url() {
        $x = $this->info->bugzillas;
    	if( !$x ) return "";
    	if( count($x) > 0 ) $x = $x[0];
    	if($x->url ) 
		  return $x->url;
		else {
		  if ( $x->productname )
    	    return "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=" . $x->productname . "&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=";
    	  else
    	  	return "";
    	  
    	}  
    
    }

}
?>
