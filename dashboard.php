<?php

require_once('libs/gui_helper.class.php');

require_once('functions.php');

session_start();

$no = $_SESSION['no'];

$query = $_SESSION['query'];

$server = $_SESSION['server'];

require("connections/server.php");

//$data = get_results($server,$query);

?>
<html>

<body>

<h1>Sekarang anda(<?php echo($_SESSION['nrp']); ?>)</h1>

<h1>Menggunakan server(asisten) <?php echo($_SESSION['server']); ?></h1>

<h1>sedang mengerjakan NO <?php echo($no); ?></h1>

<p> untuk logout tekan di <?php echo(GuiHelper::link('sini','logout.php')); ?>

<form action='actions/do_log_answers.php' method='POST'>

<h3>Query:</h3>

<p><?php echo(GuiHelper::textarea('query',$query)); ?></p>

<p><?php echo(GuiHelper::submit_button('try','try')); ?> <?php echo(GuiHelper::submit_button('save','save')); ?> </p>

</form>

<?php get_results($query); ?>


</body>

</html>
