<?php

	session_start();

	if(!isset($_SESSION['id'])){
		echo "Sessão: ", $_SESSION['id'];
		header("Location: ../index.php?autentica=1");
	}