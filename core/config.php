<?php
return[
	'name' => 'mechanic',
	'username' => 'siyabd',
	'password' => '1234',
	'connection' => 'mysql:host=mysql'',
	'options' => [
		PDO::ATTR_PERSISTENT    => true,
    	PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
    	PDO::ATTR_EMULATE_PREPARES => false
	]
];
