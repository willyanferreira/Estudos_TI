<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Estudando PHP</title>
</head>
<body>
<h1>Hoje são: <span id="date"><?php echo date('Y-m-d h:i:s');?></span></h1>
<?php
	$a = 98;
	$b = &$a;
	$b += 71;
?>
<pre>
	O valor de A é: <?php echo $a;?>
	<br>
	O valor de B é: <?php echo $b;?>
</pre>
</body>
</html> 