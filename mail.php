<?php

if($_POST["send message"]) {

	mail("sinanyildirim@sabanciuniv.edu", "Here is the subject line",
	$_POST["insert your message here"]. "From: a.anasti@gmail.com");

}

?>
