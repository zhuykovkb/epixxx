<?php
$pdo = new PDO(
	'mysql:host=localhost;dbname=scrubs;charset=utf8','root','rootzhuykovkb03'
);
$stmt = $pdo -> prepare ('select * from patients');
$stmt -> execute();
$pdo -> exec ("SET CHARACTER SET utf8");
$pdo -> setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);

$res = $stmt -> fetchAll();
if ( count( $res) ){
	echo '<ul>';
	foreach ($res as $row){
	echo '<li>' . "<strong>" . $row['name'] . "</strong>" . ' '
		. $row ['card_num'] . ' ' . "<i>" . $row['email'] . "</i>" .'</li>';
		} 
	echo "</ul>";
	}
else
{
echo "No rows";
}
