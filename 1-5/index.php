<?php
$array = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K"];
echo implode(' ', $array);
echo "<br>";
echo implode(' ', array_reverse($array));