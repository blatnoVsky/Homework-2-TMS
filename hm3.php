<?php

echo "Input a year: ";
$year = readline();

if( $year % 4 == 0 ) {
    print_r($year . " является високосным годом.");
}
else {
    print_r($year . " не является високосным годом.");
}