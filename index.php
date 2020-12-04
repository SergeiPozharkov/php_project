<?php
$array = range(1, 100);
shuffle($array);
print_r(array_slice($array, 0, 10));