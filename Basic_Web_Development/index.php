<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Estudando PHP</title>
	<?php
		// $txt = isset($_GET['txt'])?$_GET['txt']:'ATIVMOB';
		// $tam = isset($_GET['tam'])?$_GET['tam']:'50pt';
		// $cor = isset($_GET['cor'])?$_GET['cor']:'#cecece';
	?>
	<style>
		/* h3#estilo{
			font-size: <?php echo $tam;?>;
			color: <?php echo $cor;?>; */
		}
	</style>
</head>
<body>
<h1>Hoje são: <span id="date"><?php echo date('Y-m-d h:i:s');?></span></h1>
<!--<div>
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
</div>-->
<?php
	// $a = 98;
	// $b = &$a;
	// $b += 71;

	// $prof = 'Estagiario';
	// $$prof = 'ADS';

	// $valor = $_GET['v'];
	// $raizQdd = sqrt($valor);
	// echo number_format($raizQdd,2);

	// function teste(&$z){
	// 	$z = $z * 2;
	// 	return $z;
	// }
	// $y = 450;
	// echo teste($y);

	// echo "<br>".$y;

	 //$txt = 'criando um texto reativamente grande para exercitar a função wordwrap com o objetivo de não esquecê-la porém esse texto ainda não está suficiente mas tá dando certo';
	// $resultado = wordwrap($txt, 3, "<br>\n", true); //true vai quebrar a palavra de acordo com o número de caracteres passado - false quebra só se a palavra tiver <= o número de caracteres
	// echo $resultado;

	//echo strlen(trim($txt)); // trim: elimina os espaços no começo e fim das strings - ltrim apenas no começo - rtrim no final

	// print_r(str_word_count($txt,2));
	// var_dump(str_word_count($txt,2));
	// var_export(str_word_count($txt,2));
	// $newtxt = explode(" ", $txt);

	// print_r($newtxt); str_split - cria um array colocando cada letra em um indice - implode() junta palavras em uma unica string ex: um array com uma palavra em cada indice - join() igual ao implode()
	
		// $caracter = chr(167);
		// ord() diz qual é o código de um caractere
		// echo "O caractere de códgio 67 é $caracter";

		// $letra = ord('W');

		// echo "<br> o código da letra D(maiúscula) é $letra";

		// $texto = 'essa';

		// echo strtolower($texto); todas em minúsculas
		// echo strtoupper($texto); todas em maiúsculas
		// echo ucfirst($texto); deixa apenas a primeira letra em maiúscula
		// echo ucwords($texto); deixa a primeira letra de cada palavra em maiúsculo
		 //$testedIF =  strpos($texto, 'Carlos'); //retorna o número q uma palavra é encontrada dentro de uma sting - retorna nada se não houver pq no PHP o valor FALSO é impresso como vazio
		
		//  if($testedIF){
		// 	 echo 'Essa palavra se encontra dentro da string e está na posição ' .$testedIF;
		//  }else{
		// 	 echo 'Essa palavra não foi encontrada. <br> Certifique-se de que escreveu corretamente.';
		//  }

		// echo stripos($texto, 'caRloS'); retorna a posição q uma palavra é encontrada dentro de uma sytring msm se independente da caixa(maiúscula ou minúscula)

		// echo substr_count($texto, 'uma'); essa função diz qnts vezes uma palavra foi encontrada dentro d uma string

		// echo substr($texto, 0, 4); faz uma substring d uma string, onde posso dizer onde começar e qnts letras pegar e tbm posso usar valores negativos

		// echo str_pad($texto, 10,"-", STR_PAD_LEFT);
		
		// for($x = 0; $x < 10; $x++){
		// 	echo str_repeat($texto.'<br>', $x).'<hr>';
		// }
		
		// echo str_replace("essa", "Dicas massa", $texto); troca uma palavra em uma string por outra caso ela exista - str_ireplace() ignora se é maiúsculo ou minúscula
		// echo'<pre>';	
		// print_r(range(0, 100, 5));
		// echo '</pre>';

		// foreach(range(0,100,5) as $z){
		// 	echo $z.'<hr>';
		// }

		$registro = array('nome' => 'Willyan Carlos', 'idade' => 32 , 'peso' => 84.5, 'profissao' => 'Estagiário');
		
		// $registro['nome'] = array('Willyan Carlos', 'Raquel Soares');
		// $registro['idade'] = array(32, 36);
		// $registro['peso'] = array(84.5, 81.0);
		// $registro['profissao'] = array('Estagiário', 'Modelista');
		
			foreach($registro as $k => $v){
				echo " $k é: $v <br>";
				// echo '<pre>';
				// print_r($registro['nome'][1]);
				// echo '</pre>';
			}
		

	
?>
<!-- <h3 id="estilo"><?php //echo $txt;?></h3> -->
</body>
</html> 