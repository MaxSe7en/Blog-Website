<?php 
	// session_start();
	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	// connect to database
       // coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/kohana/blog/');
?>