<?php
	
	$host = 'localhost';
	$username = 'root';
	$password = 'ppn40K01';
	$dbname = 'stuff';

	$myNewConnection = new PDO('mysql:host=localhost;dbname=stuff', $username, $password);

	$query = "SELECT name FROM stuff" or die("Error..." . mysql_error($myNewConnection));

	$result = $myNewConnection->query($query);

	while($row = $result->fetch()){
		echo $row["name"] . "<br>";
	}
?>