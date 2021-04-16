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
  $data = mktime(14, 30, 58, 12, 31, 2012);
  echo date("Y-m-d h:i:sa:", $data);
?>
</body>
</html>