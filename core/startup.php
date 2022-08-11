<?php

require_once('headers.php');
require_once('ENVS.php');
require_once('constants.php');
require_once('config.php');
require_once('db/db_factory.php');

$db = create_db(DB_MYSQL, $DBCONFIG[isset($_DB) ? $_DB : 'LOCAL_1']);

?>
