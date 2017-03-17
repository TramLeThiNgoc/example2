<?php
	try
	{
	 $dsn = "mysql:host=localhost;dbname=company";
	 $db = new PDO ($dsn, "webuser", "webpass");
	 // check it work or not. "connected"
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
