<?php

require("../libs/table_gateway.class.php");

require("../connections/main.php");

session_start();

$redir = "dashboard.php";

if(isset($_REQUEST['ya'])){

	$data = array(

		'ip' => $_SERVER['REMOTE_ADDR'],
		'server' => $_SESSION['server'],
		'nrp' => $_SESSION['nrp'],
		'no' => $_SESSION['no'],
		'query' => $_SESSION['query'],
		'waktu' => date('Y-m-d H:i:s'),
		'final' =>1
	);

	$t_qr = new TableGateway('quiz_result',$conf);

	$t_qr->push($data);

	$_SESSION['no'] = $_SESSION['no'] + 1;

	$_SESSION['query'] = "";

}



header("Location: ../".$redir);
