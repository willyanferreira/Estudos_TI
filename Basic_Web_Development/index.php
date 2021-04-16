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
  $d=strtotime("12:30pm June 02 2013");
  echo "Created date is " . date("Y-m-d h:i:sa", $d);?>
</body>
</html>