<?php

$number = 3 ** 6;

if ($number % 5 == 0) {
    print_r("Число " . $number . " делится на 5");
}
else {
    print_r("Число " . $number . " не делится на 5 ");
    print_r("Ответ: " . $number / 5);
}

