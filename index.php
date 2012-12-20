<?php
	namespace application\system;

	use application\system\base;
	use application\system\data;

	define(DIRECTORY_SEPARATOR, '\\');

	spl_autoload_register(function($className) {
		$className = ltrim($className, '\\');
	    $fileName  = '';
	    $namespace = '';

	    if ($lastNsPos = strripos($className, '\\')) {
	        $namespace = substr($className, 0, $lastNsPos);
	        $className = substr($className, $lastNsPos + 1);
	        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	    }

	    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

		echo '<pre>';
		var_dump($fileName);
		var_dump(file_exists($fileName));
		include($fileName);
	});

	$snapi = new Base_Snapi();

	$bar = new  Model_Bar();