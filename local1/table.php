<!DOCTYPE html>
<head></head>
<body>
<table>
<tr>
<td>
</td>
<?php
for ( $i=1; $i<=9; $i++)
{
echo '<th>' .$i. '</th>';
}
?>
</tr>
<?php
for ( $i=1; $i<=9; $i++){
    echo '<tr><th>' . $i . '</th>';
    for ($j=1; $j<=9; $j++){
        echo '<td> ' . $i*$j .  '</td>';
    }
    echo '</tr>';
}
?>
</table>
