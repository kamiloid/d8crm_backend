<?php

require_once('core/headers.php');
$path_access = require_once('core/path_decode.php');

$output = [];

if($path_access)
{
    $api_access = require_once('core/api_decode.php');
    if($api_access)
    {
        $input = $_REQUEST;
    }else{
        $output['message'] = 'No Api module or command defined.';
    }
}else{
    $output['message'] = 'No Api route defined.';
}

echo json_encode($output);

?>
