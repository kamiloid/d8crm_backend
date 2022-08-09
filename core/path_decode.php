<?php

if(!isset($_GET['path']))
    return false;

$args = $_GET['path'];
$args = explode('/', $args);

if(sizeof($args) === 0)
    return false;

$module = $args[0];
$cmd = $args[1];

if(!isset($cmd) || trim($cmd) === '')
    return false;

return true;

?>
