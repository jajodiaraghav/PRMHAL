<?php
// ini_set('display_errors','Off');
// ini_set('error_reporting',0);

$settings = array(
					'db_host' 		=> 'localhost',
					'db_name' 		=> 'prmhal',
					'db_user' 		=> 'root',
					'db_password' 	=> '8582liap@cs2',
				);

require('partials/PDOext.class.php');

// Database Connection
$pass = 'mysql:host=' . $settings['db_host'] . ';dbname=' . $settings['db_name'];
$dbh = new PDOext($pass, $settings['db_user'], $settings['db_password'], array(PDO::MYSQL_ATTR_LOCAL_INFILE => 1));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
