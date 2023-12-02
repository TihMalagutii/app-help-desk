<?php

    session_start();

	if(!isset($_SESSION["isAuth"]) || $_SESSION["isAuth"] != true) {
		header("Location: " . $index . "?auth=error");
	}

?>