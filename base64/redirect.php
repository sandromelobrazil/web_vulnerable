<?php

	header('Location: '.base64_decode(urldecode($_GET["url"])));
	die();

?>

