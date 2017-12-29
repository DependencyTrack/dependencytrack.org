<?php
	//header('Strict-Transport-Security: max-age=15768000');
	header('X-Frame-Options: SAMEORIGIN');
	header('X-XSS-Protection: 1; mode=block');
	header('X-Content-Type-Options: nosniff');
	// Redirect from HTTP to HTTPS
/*
	if ($_SERVER['HTTPS'] != "on") {
		$HTTPURI = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: $HTTPURI");
		exit;
	}
*/
?>