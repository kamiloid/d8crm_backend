<?php

require_once('mysql.php');

function create_db($db_type, $db_config)
{
	if(!isset($db_config))
		return null;
	if(sizeof($db_config) === 0)
		return null;

	if(!isset($db_config['host']) || !isset($db_config['user']) || !isset($db_config['pass']) || !isset($db_config['db']))
		return null;

	if($db_type === DB_MYSQL)
	{
		$mysql = new MysqlDB($db_config);
		$mysql->connect();
		return $mysql;
	}
}

?>
