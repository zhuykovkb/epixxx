<?php
$pdo = new PDO(
	"mysql:host=localhost;dbname=scrubs;charset=utf8","scrubs","scrubs"
);
$stmt = $pdo -> prepare ("select * from patients");
$stmt -> execute();
$pdo -> exec ("SET CHARACTER SET utf8");
$pdo -> setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);

$res = $stmt -> fetchAll();
if ( count( $res) ){
	echo "<ul>";
	foreach ($res as $row){
	echo "<div>" . "<li>" . "<strong>" . $row['name'] . "</strong>" . ' ' . $row['card_num'] . ' ' . "<i>" . $row['email'] . "</i>" . "<a style='display:inline' href='" . "" . $_SERVER['REQUEST_URI'] ."" . "edit.php?id=" . $row["id"] . "'>Edit</a></li></div>";
}
	echo "</ul>";
	}
else
{
echo "No rows";
}
