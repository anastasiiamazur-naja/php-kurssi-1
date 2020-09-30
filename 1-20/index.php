<?php
$file = file(__DIR__ . '/maakunnat.txt');
$array = [];
foreach ($file as $line) {
	$line_arr = explode(';', $line);
	$province = $line_arr[0];
	$population = (int) $line_arr[1];
	if ($population % 2 != 0) {
		$array[$population] = $province;
	}
}
krsort($array);
file_put_contents(__DIR__ . '/maakunnat_vastaus.txt', implode(PHP_EOL, $array));