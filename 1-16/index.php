<?php
$firstNames = [
    'Matti',
    'Saara',
    'Timo'
];

$lastNames = [
    'Mallikas',
    'Esimerkkinen',
    'Testinen'
];

foreach ($firstNames as $firstName) {
	foreach ($lastNames as $lastName) {
		echo $firstName . " " . $lastName . "<br>";
	}
}