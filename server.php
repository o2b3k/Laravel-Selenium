<?php
/**
 * @package  Modelizer\Selenium
 * This file was copied from Laravel framework
 */
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/stubs/html/'.$uri)) {
    require_once __DIR__.'/stubs/html'.$uri;

    die;
}

if ($uri === '/') {
    require_once __DIR__.'/stubs/html/index.html';

    die;
}

echo 'File Not found.';
