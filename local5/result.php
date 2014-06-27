<?php

$posts=[
	[
		'name' => 'Max',
		'mail' => 'mivanov@bezshatov.opa',
		'age'  => '21',
		'comm' => 'Max Ivanov',
	],
	[
		'name' => 'Andrey',
		'mail' => 'andrey@epixxxx.ru',
		'age'  => '36',
		'comm' => 'Andrey Ne Pes',
	]
];

$posts[] = $_POST;
/*
$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$mail = (isset($_POST['mail'])) ? $_POST['mail'] : '';
$age = (isset($_POST['age'])) ? $_POST['age'] : '';
$comm = (isset($_POST['comm'])) ? $_POST['comm'] : '';
*/

foreach	( $posts as $key => $value )
{
	printf("Имя : %s ", $value['name']);
	printf("Email:  %s ", $value['mail']);
	printf("Возраст:  %s ", $value['age']);
	printf("Комментарий:  %s ", $value['comm']);
	echo '<br />';
	//var_dump($value);
}
