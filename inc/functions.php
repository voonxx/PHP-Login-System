<?php

// Force the user to be logged in, or redirect.
function ForceLogin() {
	if(isset($_SESSION['user_id'])) {
		// The user is allowed here
	} else {
		// The user is not allowed here.
		header("Location: web/PHP-Login-System/ajax/login.php"); exit;
	}
}

function ForceDashboard() {
	if(isset($_SESSION['user_id'])) {
		// The user is allowed here but redirect anyway
		header("Location: ../PHP-Login-System/dashboard.php"); exit;
	} else {
		// The user is not allowed here.
	}
}



?>
