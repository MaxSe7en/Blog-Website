<?php 
	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://dreamerslake.com/kohana/blog/');
?>