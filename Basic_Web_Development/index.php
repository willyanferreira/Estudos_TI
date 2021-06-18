<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Estudando PHP</title>
</head>
<body>
<h1>Hoje são: <span id="date"><?php echo date('Y-m-d h:i:s');?></span></h1>
<?php
	// $a = 98;
	// $b = &$a;
	// $b += 71;

	// $prof = 'Estagiario';
	// $$prof = 'ADS';

	// $valor = $_GET['v'];
	// $raizQdd = sqrt($valor);
	// echo number_format($raizQdd,2);
?>
<pre>
	A raiz quadrada de <?php echo $valor;?> é: <?php echo number_format($raizQdd,2);?>
</pre>
</body>
</html> 