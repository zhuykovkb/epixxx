<?php
function ageprint($age){
if ( "$age" < 20 ){
    echo 'Все впереди, Jack';
} elseif ( $age > 20 && $age < 30 ){
    echo 'Самое время взяться за ум, Jack';
} elseif ( $age > 30 ){
    echo 'У Вас есть чему поучиться, Jack';
}	
}
ageprint(23);
