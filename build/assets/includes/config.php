<?php

	$genurl = "http://localhost:3000/build/";


	$self = htmlentities($_SERVER['PHP_SELF']);
	$replace = preg_match("/([-'a-z0-9]+)(.php)/", $self, $match);
	$self_r = htmlentities($_SERVER['REQUEST_URI']);
	$replace_r = preg_match("/([-'a-z0-9]+)(.php)/", $self_r, $match_r);

	if(!empty($match_r[2])) {
		header("Location: /" . $match[1] . "", 301);
	}

	// Default

	switch($match[1])
	{
		default:
			$title = 'Deze pagina is niet gevonden - ';
		break;
	}

	switch($match[1])
	{
		default:
			$name = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		default:
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		default:
			$ptype = 'website';
		break;
	}

	switch($match[1])
	{
		default:
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// index.php

	switch($match[1])
	{
		case "index":
			$title = 'TEST';
		break;
	}

	switch($match[1])
	{
		case "index":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// sample_page.php

	switch($match[1])
	{
		case "telefonie":
			$title = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		case "telefonie":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "telefonie":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}
?>