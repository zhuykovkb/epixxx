<?php
require 'header.php';


$stranica=isset($_GET['wannaopen']) ? $_GET['wannaopen'] : 'main.php';
var_dump($stranica);


require "$stranica";
require 'footer.php';
