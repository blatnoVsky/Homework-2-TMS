<?php

echo "Input a day number 1-31: ";
$day = readline();

if ($day >= 1 && $day <= 10) {
    print_r("День " . $day . " входит в первую декаду");
} else if ($day > 10 && $day <= 20) {
    print_r("День " . $day . " входит во вторую декаду");
} else if ($day > 20 && $day <= 31) {
    print_r("День " . $day . " входит в третью декаду");
} else if ($day < 1) {
    print_r("Неправильно подан день");
} else if ($day > 31) {
    print_r("Неправильно подан день");
}