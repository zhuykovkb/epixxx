<?php
$f=file_get_contents('hist.txt');
$convert = explode("\n", $f);
var_dump($convert);
krsort($convert);
var_dump($convert);
//print_r("$convert");
