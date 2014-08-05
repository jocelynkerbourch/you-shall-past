<?php
	require_once("src/command.class.php");
	require_once("src/login.class.php");
	require_once("src/template.class.php");

	$login = new login;
	$command = new command;
	$template = new template;
	$template->setPage("login");
	if ($login->isLog()){
		$template->setPage("index");
		if (isset($_GET['open'])) $command->open();
	}

	$template->render();