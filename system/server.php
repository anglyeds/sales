<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

$uri = urldecode(
	parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.''.$uri))
{
	return false;
}


define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/index.php'); 

// require_once __DIR__.'/index.php';


//require_once dirname(__FILE__).'/index.php';
