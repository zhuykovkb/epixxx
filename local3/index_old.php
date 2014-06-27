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
	]
];

var_dump($mas);

foreach ( $mas as $key => $val ){
	$mas[$key]['name']=$val['sname'];
	$mas[$key]['sname']=$val['name'];
}
var_dump($mas);

