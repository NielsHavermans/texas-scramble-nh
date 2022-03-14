<?php
	/**
	* Texas Scramble page to generate flights and create new golfers 
	*
	* Create a new database with provided SQL and set connection in classes/Database.php
	* Check: SQL/competitors.sql
	*/
	 
	// Init Texas Scramble
	require 'vendor/autoload.php';
	require('includes/init.php');   
	
	// Init Smarty
	$smarty = new Smarty();
	$smarty->setTemplateDir('./smarty/templates');
	$smarty->setConfigDir('./smarty/config');
	$smarty->setCompileDir('./smarty/compile');
	$smarty->setCacheDir('./smarty/cache');
	
	// TexasScramble Init
	$TexasScramble = new TexasScramble();
	$list = $TexasScramble->getGolfersList();
	
	// Provide data to Smarty
	$smarty->assign('title', 'Texas Scramble');
	$smarty->assign('golferslist', $list);
	$smarty->display('index.tpl');

?>