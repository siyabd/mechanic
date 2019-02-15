<?php
return[
	'name' => 'sampledb',
	'username' => 'siyabd',
	'password' => '123',
	'connection' => 'mysql//:mysql:',
	'options' => [
		PDO::ATTR_PERSISTENT    => true,
    	PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
    	PDO::ATTR_EMULATE_PREPARES => false
	]
];
