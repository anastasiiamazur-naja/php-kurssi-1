<?php
$n = rand(0, 5000);
if ($n > 4000) {
	echo "A";
} elseif ($n == 0 || $n == 1000) {
	echo "B";
} elseif ($n % 2 == 0 && $n < 3000) {
	echo "C";
} else {
	echo "D";
}