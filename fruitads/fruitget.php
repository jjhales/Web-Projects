<?php
	//setup database connection
	$user = "root";
	$pass = "root";
	$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
	// select all from fruits and order by random choose only 1
	$stmnt   = $db->prepare('SELECT id, fruitname, fruitcolor, fruitimage FROM fruits ORDER BY RAND() LIMIT 1');
	$stmnt->execute();
	$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);
	$result = array("fruits"=>$result);
	// create json file for fruitads.php to read
	header("Content-type:application/json");
	$jsonfile = json_encode($result);
	echo $jsonfile;
?>

