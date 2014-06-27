<?php

$mas = [
	[
		'name'  => 'Kirill',
		'sname' => 'Zhuykov',
		'city'  => 'Pskov',
		'email' => 'zhuykovkb@gmail.com',
		'idvk'  => '00000',
	],
	[
		'name'  => 'Egor',
		'sname' => 'Tarakanov',
		'city'  => 'Saint-P',
		'email' => 'egortarakanov@gmail.com',
		'idvk'  => '210147',
	],
	[
		'name'  => 'Maxim',
		'sname' => 'Ivanov',
		'city'  => 'Saint-P',
		'email' => 'max@gmail.com',
		'idvk'  => '123839',
	],
	[
		'name' => 'Egor123',
		'sname' => 'Tarakanov',
		'city' => 'Saint-P',
		'vk' => '210147',
		'email' => 'egortarakanov@gmail.com',
	],
	[
		'name' => 'Third3_one',
		'sname' => 'Ofjse',
		'city' => 'Kfjfe',
		'vk' => '111232',
		'email' => 'grdrh@gmail.com',
	],
	[
		'name' => 'Third3_two',
		'sname' => 'Ofkfse',
		'city' => 'Mnfje',
		'vk' => '002233',
		'email' => 'ffrgt45@gmail.com',
	],
	[
		'name' => 'Cvsrh',
		'sname' => 'Jksoe',
		'city' => 'Pokes',
		'vk' => '096534',
		'email' => 'ffyjetyuhddr@gmail.com',
	]
];


$count=ceil(count($mas)/2);
echo "Count of pages => $count\n";
echo "<br/>";

$stranica=$_GET['page'];
echo "STRANICA===>$stranica";
echo "<br/>";

$offset=$stranica*2-2;

echo "OFFSET======> $offset";
$wtf=array_slice ( $mas, $offset, 2);

var_dump($wtf);

for ($i=1; $i <= $count; $i++){
	echo "<a href='/?page=$i' > $i </a>";
}
