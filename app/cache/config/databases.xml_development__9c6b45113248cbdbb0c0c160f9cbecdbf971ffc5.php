<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/config/databases.xml
// Generated by: AgaviDatabaseConfigHandler
// Date: 2013-06-27T00:36:09+0000

$database = new AgaviPdoDatabase();
$this->databases['pdo_mysql_main'] = $database;
$database->initialize($this, array (
  'dsn' => 'mysql:host=localhost;dbname=agsmplapp',
  'username' => 'root',
  'password' => NULL,
));
$database = new AgaviPropelDatabase();
$this->databases['propelom'] = $database;
$database->initialize($this, array (
  'config' => 'C:\\ws\\tabeshtour\\app/config/agent-conf.php',
));
$this->defaultDatabaseName = 'propelom';

?>