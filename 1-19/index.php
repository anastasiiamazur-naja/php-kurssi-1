<?php

$users = [
    ['id' => 99, 'name' => 'Mikko'],
    ['id' => 63, 'name' => 'Saara'],
    ['id' => 30, 'name' => 'Tiina'],
    ['id' => 63, 'name' => 'Matti'],
    ['id' => 2, 'name' => 'Alma'],
    ['id' => 187, 'name' => 'Sami'],
    ['id' => 56, 'name' => 'Tuula'],
];

usort($users, static function ($a, $b) {
	return ($a['id'] == $b['id'] ? 0 : ($a['id'] < $b['id'] ? -1 : 1));
});