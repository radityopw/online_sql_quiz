<?php

session_start();

if(strlen(trim($_REQUEST['nrp'])) == 10){

	$_SESSION['nrp'] = $_REQUEST['nrp'];

	$_SESSION['server'] = $_REQUEST['server'];

	$_SESSION['no'] = 1;

	$_SESSION['query'] = "";

	$_SESSION['message'] = "";

	$redir = "dashboard.php";
}else{
	$_SESSION['message'] = "Silakan Mengisikan NRP";

	$redir = "index.php";
}

header('Location: ../'.$redir);
