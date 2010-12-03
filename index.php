<?php

require "config.php";
		
$action = strtolower($_GET['a']);
$category = strtolower($_GET['c']);
$subcategory = strtolower($_GET['s']);

if (!$action) $action = "home";

if ($action) {

	// determine filename

/*
	POSSIBLE FILENAME PATTERNS:
*/

	//	inc/action/category/subcategory.php
	if (file_exists("$contentFolder/$action/$category/$subcategory.php")) {
		$filename = "$contentFolder/$action/$category/$subcategory.php";

	//	inc/action/category/default.php
	} elseif (file_exists("$contentFolder/$action/$category/default.php")) {
		$filename = "$contentFolder/$action/$category/default.php";

	//	inc/action/category.php
	} elseif (file_exists("$contentFolder/$action/$category.php")) {
		$filename = "$contentFolder/$action/$category.php";

	// inc/action/default.php
	} elseif (file_exists("$contentFolder/$action/default.php")) {
		$filename = "$contentFolder/$action/default.php";

	//	inc/action.php
	} elseif (file_exists("$contentFolder/$action.php")) {
		$filename = "$contentFolder/$action.php";

	} else {
		$filename = "$contentFolder/404.php";
	}

	

	
	// check file existence
	if (!file_exists($filename)) {
		$action = "404";
		$category = "";
		$subcategory = "";
	}
	
	// set page title
	if ($action && ($action != "home")) {
		$pageTitle = $pageTitleShort;
		$pageTitle .= " $titleBreadcrumbSeparator " . ucwords($action);
		if ($category) {
			$pageTitle .= " $titleBreadcrumbSeparator " . ucwords($category);
			if ($subcategory) $pageTitle .= " $titleBreadcrumbSeparator " . ucwords($subcategory);
		}
	}
	
	// menu discovery
	if (file_exists("$contentFolder".$action."/menu.php")){
		$menu = "$contentFolder".$action."/menu.php";
	}
	
/*
	// menu discovery
	if ($category && file_exists("$contentFolder".$action."/".$category."/menu.php")){
		$submenu = "$contentFolder".$action."/".$category."/menu.php";
	}
	
*/
	
}

// create breadcrumb

$breadcrumb = "<a href=\"home/\">bmbi</a>";
if ($action) $breadcrumb .= " &raquo; <a href=\"" . $action . "/\">" . $action . "</a>";
if ($category) $breadcrumb .= " &raquo; <a href=\"" . $action . "/" . $category . "/\">" . $category . "</a>";
if ($subcategory) $breadcrumb .= " &raquo; <a href=\"" . $action . "/" . $category . "/" . $subcategory . "/\">" . $subcategory . "</a>";

// load page

require "$contentFolder/layout/header.php";

// debugging filenames
// echo "<p>/$filename</p>";

if ($submenu) require $submenu;
require $filename;

require "$contentFolder/layout/footer.php";	

?>

