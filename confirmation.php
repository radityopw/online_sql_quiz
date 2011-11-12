<?php

require_once("libs/gui_helper.class.php");

session_start();

$no = $_SESSION['no'];

?>
<html>
<body>

<form action="actions/do_save_answers.php" method="POST">

<h2>apakah anda yakin akan menyimpan jawaban untuk no <?php echo($no);?> ? </h2>
<h2><?php echo($_SESSION['query']); ?></h2>

<?php echo(GuiHelper::submit_button('ya','ya')); ?> atau <?php echo(GuiHelper::submit_button('tidak','tidak')); ?>

</form>

</body>
</html>
