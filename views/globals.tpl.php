<?php

// Controls everything in HEAD
// Global definition across site
$head = array(
	"title" => "Corporate Wellness",
	// "base" => array(
// 		"target" => "_blank",
// 		"href"   => "http://localhost/"
// 	),
	"meta" => array(

	),
	"css" => array(
		"views/bootstrap/css/bootstrap.min.css",
		"views/bootstrap/css/bootstrap-theme.min.css",
		"views/css/profile.css",
		"views/css/style.css"
	),
	"script" => array(
		"views/js/jquery.min.js",
		"views/bootstrap/js/bootstrap.min.js",
		"views/js/js.js"
	),
	// "favicon" => "path/to/favicon.ico",
	"custom" => ""
);

// Custom page definitions
if($page == "index") {
	
}