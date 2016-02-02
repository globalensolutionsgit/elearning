<?php
// mysql_select_db('A978313_lms', mysql_connect('mysql509.ixwebhosting.com', 'A978313_lms', 'A978313_lms'))or die(mysql_error());
mysql_select_db('testlms', mysql_connect('localhost', 'root', 'root'))or die(mysql_error());
// define('_HOST_NAME', 'mysql509.ixwebhosting.com');
// define('_DATABASE_USER_NAME', 'A978313_lms');
// define('_DATABASE_PASSWORD', 'A978313_lms');
// define('_DATABASE_NAME', 'A978313_lms');
define('_HOST_NAME', 'localhost');
define('_DATABASE_USER_NAME', 'root');
define('_DATABASE_PASSWORD', 'root');
define('_DATABASE_NAME', 'A978313_lms');

$dbConnection = new mysqli(_HOST_NAME, _DATABASE_USER_NAME, _DATABASE_PASSWORD, _DATABASE_NAME);
if ($dbConnection->connect_error) {
    trigger_error('Connection Failed: ' . $dbConnection->connect_error, E_USER_ERROR);
}
?>
