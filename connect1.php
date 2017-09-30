<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_password))
{
			die('Cannot Connect to the Database');
}
else

	if(@mysql_select_db('bryar-school'))
	{
		echo ' ';
	}
	else
	
{
	die('Cannot Connect to the Database');
}

?>
