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

	// telefonie.php

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

	// internet.php

	switch($match[1])
	{
		case "internet":
			$title = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		case "internet":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "internet":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// cloudwerkplek.php

	switch($match[1])
	{
		case "cloudwerkplek":
			$title = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		case "cloudwerkplek":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "cloudwerkplek":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// contact.php

	switch($match[1])
	{
		case "contact":
			$title = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		case "contact":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "contact":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// wholesale.php

	switch($match[1])
	{
		case "wholesale":
			$title = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		case "wholesale":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "wholesale":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// callcenter.php

	switch($match[1])
	{
		case "callcenter":
			$title = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		case "callcenter":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "callcenter":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// voorwaarden.php

	switch($match[1])
	{
		case "voorwaarden":
			$title = 'NAAM INVULLEN';
		break;
	}

	switch($match[1])
	{
		case "voorwaarden":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "voorwaarden":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}

	// hetbedrijf.php

	switch($match[1])
	{
		case "hetbedrijf":
			$title = 'NAAM INVULLEN ';
		break;
	}

	switch($match[1])
	{
		case "hetbedrijf":
			$discp = 'NVT';
		break;
	}

	switch($match[1])
	{
		case "hetbedrijf":
			$ogimg = 'GENURL/files/images/ogimg.png';
		break;
	}
?>