<?php

Config::set('db.adapter', 'Mysql');
Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', getenv('mysql_password'));
Config::set('db.db_name', 'aerostatic_test');

?>
