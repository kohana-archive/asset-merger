<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'merge'      => array(Kohana::PRODUCTION, Kohana::STAGING),
	'folder'     => 'assets',
	'load_paths' => array(
		Assets::JAVASCRIPT => DOCROOT.'js'.DIRECTORY_SEPARATOR,
		Assets::STYLESHEET => DOCROOT.'css'.DIRECTORY_SEPARATOR,
	),
	// To enable set this as sha256, sha384 or sha512
	// Multiple choices ['sha256', 'sha512'] are available
	// Local assets must be merged
	'integrity_check' => FALSE,
	'processor'  => array(
		Assets::STYLESHEET => 'cssmin',
	),
	'docroot' => DOCROOT
);