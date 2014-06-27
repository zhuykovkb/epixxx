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
	]
];

var_dump($mas);

foreach ( $mas as $key => $val ){
	$mas[$key]['name']=$val['sname'];
	$mas[$key]['sname']=$val['name'];
}
var_dump($mas);

$b=[];
$c=[];



foreach ( $mas as $key => $val ){
	if ($key % 2) {
	echo "TRUE $key";
	$b[]=$val;
	}
	else{
	echo "FALSE $key";
	$c[]=$val;
	}
};

echo 'FUCK ME';

var_dump($b);
var_dump($c);
