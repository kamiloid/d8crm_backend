<?php

if(str_contains($_SERVER['HTTP_HOST'], 'localhost'))
{
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
}

$DBCONFIG = [
	'LOCAL_1' =>[
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'port' => '3306',
		'db' => 'd8crm'
	],
	'LOCAL_2' =>[
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'port' => '8889',
		'db' => 'd8crm'
	]
];

?>
