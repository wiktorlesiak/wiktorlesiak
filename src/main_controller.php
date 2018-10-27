<?php
/**
 * Main Controller
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'portalgaming');
define('DB_USER', 'root');
define('DB_PASS', 'admin');


function index_action()
{
    require_once __DIR__ . '/../templates/index.php';
}

