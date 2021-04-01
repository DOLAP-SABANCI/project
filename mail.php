<?php

if($_POST["EmailForm"]) {

	mail("sinanyildirim@sabanciuniv.edu", "Here is the subject line",
	$_POST["insert your message here"]. "From: a.anasti@gmail.com");

}

?>
