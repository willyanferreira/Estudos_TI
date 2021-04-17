<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Estudando PHP</title>
	<style>
		.error{
			color: red;
			border: 1px solid black;
		}
	</style>
</head>
<body>
  <?php
    $myFile = fopen("textophp.txt", "r") or die ("Não deu certo!");
    echo fread($myFile, filesize("textophp.txt"));
    fclose($myFile);
  ?>
</body>
</html>