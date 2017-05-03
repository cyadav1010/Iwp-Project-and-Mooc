<?php
session_start();
session_unset(); 
session_destroy();

	setcookie('userid', 'fdhdfh', time() - (86400 * 30), "/");
				setcookie('name','fdhdfh', time() - (86400 * 30), "/");
				setcookie('image', 'fdhdfh', time() - (86400 * 30), "/");

		header('Location: /vitbull');







?>
