<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Estudando PHP</title>
	<?php
		$tam = $_GET['tam'];
		$cor = $_GET['cor'];
	?>
	<style>
		h3#estilo{
			font-size: <?php echo $tam;?>;
			color: <?php echo $cor;?>;
		}
	</style>
</head>
<body>
<h1>Hoje são: <span id="date"><?php echo date('Y-m-d h:i:s');?></span></h1>
<div>
	<form action="index.php" method="GET">
		<label for="itxt">Texto: </label>
		<input type="text" name="txt" id="itxt">
		<br>
		<label for="itam">Tamanho: </label>
		<select type="text" name="tam" id="itam">
			<option value="10pt">10</option>
			<option value="12pt">12</option>
			<option value="14pt">14</option>
			<option value="16pt">16</option>
			<option value="18pt">18</option>
			<option value="20pt">20</option>
		</select>
		<br>
		<label for="icor">Cor: </label>
		<input type="color" name="cor" id="icor">
		<br>
		<input type="submit" value='Aplicar'>
	</form>
	<br>
	<hr>
</div>
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
<h3 id="estilo"><?php echo $_GET['txt'];?></h3>
</body>
</html> 