<?php

$conn = new PDO('sqlite:test.sqlite');

$createTable = "CREATE TABLE IF NOT EXISTS users ( 
		id INTEGER PRIMARY KEY AUTOINCREMENT,
		username VARCHAR(255)
		)
";
$conn->query($createTable);





$deleteAll = "DELETE FROM users";
$conn->query($deleteAll);





$insertBulk = "INSERT INTO users (username) VALUES 
	('sajjad'),('ali'),('hasan')
";
$conn->query($insertBulk);




$selectAll = "SELECT * FROM users";
$result = $conn->query($selectAll);



$rows = $result->fetchAll(PDO::FETCH_ASSOC);

var_dump($rows);

?>