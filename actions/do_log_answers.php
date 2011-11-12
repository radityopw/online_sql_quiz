<?php

require("../libs/table_gateway.class.php");

require("../connections/main.php");

session_start();

//var_dump($_REQUEST);

//exit();

$_SESSION['query'] = $_REQUEST['query'];

$redir = "dashboard.php";

$data = array(

	'ip' => $_SERVER['REMOTE_ADDR'],
	'server' => $_SESSION['server'],
	'nrp' => $_SESSION['nrp'],
	'no' => $_SESSION['no'],
	'query' => $_SESSION['query'],
	'waktu' => date('Y-m-d H:i:s'),
	'final' =>0
);

if(isset($_REQUEST['save'])){

	$redir = "confirmation.php";	

}else{

	$t_qr = new TableGateway('quiz_result',$conf);

	$t_qr->push($data);
}



header('Location: ../'.$redir);
