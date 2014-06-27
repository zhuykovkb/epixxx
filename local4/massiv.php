<?php
$epic_people3 = ["Oleg", "Olga", "Mira", "Key", "Oxana"];
$count = count($epic_people3);
$count_half = $count/2;
$count_half= round($count_half);
print_r($epic_people3);
var_dump($count);

for ($i=0; $i<$count_half; $i++)
{
echo "<a href=\"/massiv.php/?page=".$i."\">".($i + 1)."</a>"; 
}

echo "<br/>"; 
echo $_GET["page"];
var_dump($_GET);
?>
