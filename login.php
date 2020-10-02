<?php
function login() {
	$legitUsername = "ala";
	$legitPassword = "bala";
	
	if($_POST["username"] == $legitUsername && $_POST["password"] == $legitPassword) {
	header("Location: welcome.html");
	} else {
	header("Location: index.html");
	}
}