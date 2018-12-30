<?php

$config = [
	'settings' => [
		'displayErrorDetails' => getenv('APP_DEBUG') === 'true',
		'app' => [
			'title' => getenv('APP_NAME')
		]
	]
];