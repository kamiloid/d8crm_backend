<?php

if(!isset($module))
    return false;

if(!file_exists('api/'.$module.'.php'))
    return false;

require_once('api/'.$module.'.php');

$class_module = new $module();

if(!method_exists($class_module, $cmd))
    return false;

//$output['resp'] = $class_module->$cmd($input);

?>
