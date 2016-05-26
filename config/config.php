<?php

Config::set('db.adapter', 'Mysql');
Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', getenv('mysql_password'));
Config::set('db.db_name', 'aerostatic_test');

FileUploader::initialize(ROOT.DS.'public'.DS.'uploads');
FileUploader::set_max_size(2000 * 1024);
FileUploader::allow_empty_file(true);
FileUploader::throw_exceptions(true);
?>
