<?php	
		$servername = "localhost";
		$dbusername = "root";
		$dbpass = "";

	try {
		
	    $connection = new PDO("mysql:host=$servername;dbname=forum", $dbusername, $dbpass);
	    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $connection;
	    
	    }
	catch(PDOException $e)
	    {
	    echo $e->getMessage();
	    }

?>