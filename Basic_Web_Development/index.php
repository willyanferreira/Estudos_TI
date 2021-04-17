<?php
	session_start();
	$_SESSION['food'] = "Arroz com feijão já tá bom.";
	//session_unset();
	//session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Estudando PHP</title>
</head>
<body>
<?php
	echo "Minha cor favorita: ". $_SESSION['favcolor']. "<br>";
?>
</body>
</html> 