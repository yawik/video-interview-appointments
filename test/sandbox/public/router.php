<?php
/*
 * This script will map URIs which contains a dot ("."), but does not point to an actual file
 * to the index.php script - The build-in php server will serve a 404 error in that case.
 */

if (false === strpos($_SERVER['REQUEST_URI'], '.')
    || is_file($_SERVER['DOCUMENT_ROOT'] . '/' . $_SERVER['SCRIPT_NAME'])
) {
    return false;
}

$_SERVER['SCRIPT_NAME'] = '/index.php';
require __DIR__ . "/index.php";