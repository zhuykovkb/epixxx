<?php
$pdo = new PDO(
	'mysql:host=localhost;dbname=scrubs;charset=utf8','root','rootzhuykovkb03'
);
$pdo -> exec ("SET CHARACTER SET utf8");
$pdo ->setAtribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);
$st=$pdo
	->query(
	"SELECT name FROM patients"
);
$row = $st-fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['name']);
