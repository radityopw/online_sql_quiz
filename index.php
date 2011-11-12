<?php

session_start();

if(isset($_SESSION['query'])){

	header("Location: dashboard.php");

}

require_once("libs/gui_helper.class.php");

$asisten = array(

	'akmal' => 'akmal',
	'atikah' => 'atikah',
	'fashel' => 'fashel',
	'harry' => 'harry',
	'laili' => 'laili',
	'rafi' => 'rafi'

);



?>
<html>

<body>

<p><?php echo($_SESSION['message']); ?></p>

<form action='actions/do_register.php' method='POST'>

<h2>Silakan isi data terlebih dahulu</h2>

<h3>NRP:</h3>

<p><?php echo(GuiHelper::text_field('nrp'));  ?></p>

<h3>Asisten:</h3>

<p><?php echo(GuiHelper::combobox('server',$asisten));  ?></p>

<p><?php echo(GuiHelper::submit_button('quiz')); ?></p>

</form>

</body>

</html>
