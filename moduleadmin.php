<?php

	session_name('modules');
	session_start();
	// Include utility files
	require_once 'include/config.php';

	// Load the application page template
	require_once PRESENTATION_DIR . 'application.php';

	//Load Smarty template file
	$application = new Application();
	$_SESSION['CurrentPage'] = 'AdminModule';

	// Display the page
	$application->display('not_implemented.tpl');
?>
