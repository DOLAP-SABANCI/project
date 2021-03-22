<?php

if($_POST["message"]) {

	mail("anesabdennebi@sabanciuniv.edu", "Here is the subject line",
	$_POST["insert your message here"]. "From: a.anasti@gmail.com");

}

?>
