<?php
	header('Expires: Wed 9 Dec 1980 16:00:00 GMT');
	header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
	header('Cache-Control: no-stor, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0');
	header('Pragma: no-cache');

	if(! file_exists("conf/config.inc.php")) die('Make a config file');

	require_once("conf/config.inc.php");
	require_once("src/command.class.php");
	require_once("src/login.class.php");
	require_once("src/template.class.php");

	$login = new login(TOKEN,COOKIE,PASS);
	$command = new command;
	$template = new template;
	$template->setPage("login");
	if ($login->isLog()){
		$template->setPage("index");
		if (isset($_GET['open'])) $command->open();
	}

	$template->render();
