<?php
// Tiedot, joilla käyttäjä kirjautuu sisään.
$name     = 'Mikko';
$password = 'Banaani_Kasvaa_Puussa';

// Normaalisti tiedot tulisivat tietokannasta eikä koskaan suoraan koodista.
$user = [
    'id'       => 2020,
    'name'     => 'Mikko',
    'password' => '15d541988dff8be2f055d14ab44dfcc9adadb231',
];

if (hash('sha1', $password) !== $user['password']) {
	echo 'Väärä salasana!';
	exit();
}
$user['password'] = hash('sha512', $password);
var_dump($user);