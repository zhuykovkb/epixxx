<?php
echo '<table>';

function compare($up, $left){
	if ($up===$left){
	 echo '<td>';
	 echo "TRUE";
	 echo '</td>';
	}
	else{
	 echo '<td>';
	echo "FALSE";
	 echo '</td>';
	}
}

$massive = array(TRUE, FALSE, 1, 0, -1, "1", "0", "-1", NULL, array(), "php", "");

foreach ( $massive as $up) {
	echo '<tr>';
	foreach ( $massive as $left ){

	compare($up,$left);

	}
	echo '</tr>';




echo '</table>';
}
