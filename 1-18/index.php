<?php

function generateNames(int $n, string $prefix = ""): array
{

	$array = [];
	if ($n < 1 || $n > 20) return $array;
	if (strlen($prefix) > 20) return $array;
	if (strlen($prefix) > 0) {
		$prefix = $prefix . ' ';
	}

    $firstNames = ['Mikko', 'Matti', 'Antti', 'Simo', 'Anna', 'Siiri', 'Mira', 'Jaana'];
    $lastNames  = ['Meikäläinen', 'Onnekas', 'Mallikas', 'Testaaja', 'Esimerkkinen'];

	
	foreach($firstNames as $firstName) {
		foreach ($lastNames as $lastName) {
			array_push($array, $prefix . $firstName . ' ' . $lastName);
			if (count($array) >= $n) return $array;
		}
	}
}
