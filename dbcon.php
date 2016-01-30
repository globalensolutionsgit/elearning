<?php
// $connection = mysql_select_db('testlms',mysql_connect('localhost','root',''))or die(mysql_error());
$connection = mysql_select_db('A978313_lms',mysql_connect('localhost','root','root'))or die(mysql_error());

// $connection = mysql_select_db('A978313_lms',mysql_connect('mysql509.ixwebhosting.com','A978313_lms','A978313_lms'))or die(mysql_error());


// $dbhost = 'mysql509.ixwebhosting.com';  
// $dbuser = 'A978313_lms';  
// $dbpass = 'A978313_lms'; 
$dbhost = 'localhost';  
$dbuser = 'root';  
$dbpass = 'root'; 


try
{
    if ($conn = mysql_connect($dbhost, $dbuser, $dbpass) )
    {
        $dbname = 'A978313_lms';  
        //$dbname = 'testlms';
		$connection = mysql_select_db($dbname); 
    }
    else
    {
        throw new Exception('Unable to connect');
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
	header("Location:index.php");
}

  
