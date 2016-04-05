<?php

	function checkLoggedIn() {
	if(isset($_SESSION[‘userName’]) {
		$loggedIn = true;
	} else {
		$loggedIn = false;
}
return $loggedIn;
}