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

		// $registro = array(1 => 41, 3 => 52, 9 => 13, 5 => 34, 13 => 5, 101 => 96, 210 => 77, 18 => 28, 51 => 9);
		
		// // $registro['nome'] = array('Willyan Carlos', 'Raquel Soares');
		// // $registro['idade'] = array(32, 36);
		// // $registro['peso'] = array(84.5, 81.0);
		// // $registro['profissao'] = array('Estagiário', 'Modelista');
		// array_pop($registro);
		// // unset($registro[0]);
		// 	foreach($registro as $k => $v){
		// 		echo " O índice $k tem o valor: $v <br>";
		// 		// echo '<pre>';
		// 		// print_r($registro['nome'][1]);
		// 		// echo '</pre>';
		// 	}
		// echo '<hr>';
		// // $registro[] = 10;
		// // array_unshift($registro, 12);
		// foreach($registro as $k => $v){
		// 	echo " O índice $k tem o valor: $v <br>";
		// }
		// echo '<hr>';
		// // array_shift($registro);
		// // array_push($registro, 11);
		// // sort($registro); ordena um array
		// // rsort($registro); // ordena reversamente
		// // asort($registro); // ordena um vetor mas mantem os índices
		// // arsort($registro); // ordena um vetor reversamente mas mantem os índices
		// // ksort($registro); // ordena as chaves d um vetor n seus valores
		// krsort($registro); // ordena reversamente as chaves d um vetor n seus valores
		// foreach($registro as $k => $v){
		// 	echo " O índice $k tem o valor: $v <br>";
		// }

		// $a=10;
		// $b=2;
		// $j=$a/2;
		// for ($i=0;$i<$j;$i++){
		// 	// echo $i.'<br>';
		// if ($i % $b == 1) 
		// 	echo "$i";
		// }

		// for($i=0; $i<=10; $i++){
		// 	if($i % 3 == 0)
		// 			continue;
		// 	echo $i."-";
 		// 	}
		 // echo "Fim"

		 
		 /* Classes em PHP - Relembrando e Exercitando - 25/06/21 - Curso em Vídeo */

// 		 class Caneta{
// 			public $cor;
// 			private $ponta;
// 			protected $tampada;

// 			public function __construct($c){ // constructor é utilizado para instanciar uma classe sempre com os mesmos atributos e mesmo assim com atributos padrões eu posso alterá-los quando iniciar uma instância
// 				// $this->cor = 'vermelha';
// 				$this->ponta = 'média';
// 				$this->cor = $c;
// 				// $this->setPonta($p);
// 				$this->tampar();
// 				// $this->tampada = true;
// 				//$this->escrever();
// 			}

// 			public function getPonta(){
// 				return $this->ponta;
// 			}
// 			public function setPonta($ponta){
// 				$this->ponta = $ponta;
// 			}

// 			public function getTampa(){
// 				return $this->tampada;
// 			}
// 			public function setTampa($tampada){
// 				$this->tampada = $tampada;
// 			}
// 			public function escrever(){
// 				if($this->tampada == true){
// 					echo 'Retire a tampa para me utilizar';
// 				}else{
// 					echo 'Estou pronta para ser usada';
// 				}
// 			}

// 			public function tampar(){
// 				$this->tampada = true;
// 			}

// 			public function destampar(){
// 				$this->tampada = false;
// 			}
// 		 }

// 		 $cnt = new Caneta('azul'); // instanciando uma classe com parâmetros passados pelo constructor 
// 		//  $cnt->cor = 'azul';
// 		//  $cnt->ponta = 'fina'; // sem usar getters e sem usar setters
// 		$cnt->setPonta('fina'); // usando getters e usando setters
// 		//  $cnt->tampada = true; // sem usar getters e sem usar setters
// 		$cnt->setTampa(true); // usando getters e usando setters
// 		 $cnt->escrever();
// 		 echo '<br>';
// 		 $cnt->destampar();
// 		 $cnt->escrever();
		 

// 		 echo'<hr>';
// 		 echo '<pre>';
// 		 print_r($cnt);
// 		 echo '</pre>';

// 		 echo '<hr>';

// 		 $cnt2 = new Caneta('preta');
// 		//  $cnt2->cor = 'preta';
// 		//  $cnt2->ponta = 'grossa'; // sem usar getters e sem usar setters
// 		$cnt2->setPonta('grossa'); // usando getters e usando setters
// 		//  $cnt2->tampada = false; // sem usar getters e sem usar setters
// 		$cnt2->setTampa(false); // usando getters e usando setters
// 		 $cnt2->escrever();
// 		 echo '<br>';
// 		 $cnt2->tampar();
// 		 $cnt2->escrever();
		 

// 		 echo'<hr>';
// 		 echo '<pre>';
// 		 print_r($cnt2);
// 		 echo '</pre>';

// 		 echo "<br> Eu tenho duas canetas: uma <span style='color: blue;'>$cnt->cor</span> de ponta {$cnt->getPonta()} e uma <span style='font-weight: bold;'>$cnt2->cor</span> de ponta {$cnt2->getPonta()}";

// 		 echo '<br>';

// 		 $cnt3 = new Caneta('vermelha'); // mesmo esperando dois parâmetros eu posso passar apenas um e finalizar com ou sem uma vírgula, não dará erro 

// 		 echo '<pre>';
// 		 print_r($cnt3);
// 		 echo '</pre>';

// 		 echo '<br>';
// 		 $cnt3->setTampa(false);
// 		 $cnt3->escrever();

/*Praticando POO 28-06-21 - Curso em Vídeo*/

// class ContaBancaria{
// 	//Atributos
// 	public $numConta;
// 	protected $tipo;
// 	private $dono;
// 	private $saldo;
// 	private $status;

// 	//Métodos Especiais
// 	function __construct($nc, $dono, $tc){
// 		$this->setSaldo(0);
// 		$this->setStatus(false);
// 		$this->setNumConta($nc);
// 		$this->setDono($dono);
// 		$this->abrirConta($tc);
// 	}
// 	function setNumConta($nc){
// 		$this->numConta = $nc;
// 	}
// 	function getNumConta(){
// 		return $this->numConta;
// 	}
// 	function setTipo($tc){
// 		$this->tipo = $tc;
// 	}
// 	function getTipo(){
// 		return $this->tipo;
// 	}
// 	function setDono($dono){
// 		$this->dono = $dono;
// 	}
// 	function getDono(){
// 		return $this->dono;
// 	}
// 	function setSaldo($saldo){
// 		$this->saldo = $saldo;
// 	}
// 	function getSaldo(){
// 		return $this->saldo;
// 	}
// 	function setStatus($status){
// 		$this->status = $status;
// 	}
// 	function getStatus(){
// 		return $this->status;
// 	}

// 	//Métodos
// 	public function abrirConta($tc){
// 		$this->setTipo($tc);
// 		$this->setStatus(true);
// 		if($this->tipo == "CC" || $this->tipo == "Cc" || $this->tipo == "cC" || $this->tipo == "cc"){
// 			$this->setSaldo(50);
// 		}elseif($this->tipo == "CP" || $this->tipo == "Cp" || $this->tipo == "cP" || $this->tipo == "cp") {
// 			$this->setSaldo(150);
// 		}else{
// 			echo "<p>Tipo de conta inválido.</p>";
// 			$this->setStatus(false);
// 		}
// 		if($this->getStatus()){
// 			echo "<p>Conta de número: ". $this->getNumConta() ." aberta com sucesso para: ". $this->getDono() .".</p>";
// 		}else{
// 			echo "<p>Erro ao tentar abrir conta de número: ". $this->getNumConta() ." para: ". $this->getDono() .".</p>";
// 		}
// 	}
// 	public function fecharConta(){
// 		if($this->getSaldo() > 0){
// 			echo "<p>Você precisa zerar a conta antes de fechá-la.</p>";
// 		}elseif($this->getSaldo() < 0){
// 			echo "<p>A conta possui algumas pendências.<br>Não pode ser encerrada.</p>";
// 		}else{
// 			$this->setStatus(false);
// 			echo "<p>Conta de número: ".$this->getNumConta()." encerrada com sucesso.</p>";
// 		}
// 	}
// 	public function depositar($deposito){
// 		if($this->getStatus()){
// 			$this->setSaldo($this->getSaldo() + $deposito);
// 		}else{
// 			echo "<p>Não foi possível depositar.<br>Conta encerrada.</p>";
// 		}
// 	}
// 	public function sacar($saque){
// 		if($this->getStatus()){
// 			if($this->getSaldo() >= $saque){
// 				$this->setSaldo($this->getSaldo() - $saque);
// 			}else{
// 				echo "<p>Saque não realizado.<br><span style='color: red'>Saldo insuficiente</span>.</p>";
// 				echo "SALDO: ". $this->getSaldo();
// 			}
// 		}else{
// 			echo "<p>Saque não realizado.<br>Conta encerrada.</p>";	
// 		}
// 	}
// 	public function pagarMensalidade(){
// 		if($this->tipo == "CC" || $this->tipo == "Cc" || $this->tipo == "cC" || $this->tipo == "cc"){
// 			$taxa = 12;
// 		}elseif($this->tipo == "CP" || $this->tipo == "Cp" || $this->tipo == "cP" || $this->tipo == "cp"){
// 			$taxa = 20;
// 		}
// 		if($this->getStatus()){
// 			$this->setSaldo($this->getSaldo() - $taxa);
// 			echo "<p>Taxa de R$ $taxa,00 cobrada com sucesso.</p>";
// 		}else{
// 			echo "<p>Erro ao cobrar taxa.<br>Problemas com a conta.</p>";
// 		}
// 	}
// }
// $p1 = new ContaBancaria(1001, "Willyan Carlos", 'cc');
// $p2 = new ContaBancaria(1002, "Ferreira Da Silva", 'cp');

// $p1->depositar(300);
// $p2->depositar(500);

// $p1->sacar(1000);
// $p2->pagarMensalidade();

// $p1->fecharConta();
// $p2->sacar(630);
// $p2->fecharConta();
	
// 	echo "<pre>";
// 	print_r($p1);
// 	echo "</pre>";

// 	echo "<pre>";
// 	print_r($p2);
// 	echo "</pre>";

// /*Praticando POO/Encapsulamento - 29/06/21 - Curso em vídeo*/
// interface Controlador{
// 	//Métodos abstratos - abstrato indica que os métodos não serão implementados/desenvolvidos aqui
// 	public function liga();
// 	public function desliga();
// 	public function abrirMenu();
// 	public function fecharMenu();
// 	public function maisVolume();
// 	public function menosVolume();
// 	public function ligarMudo();
// 	public function desligarMudo();
// 	public function play();
// 	public function pause();
// }

// class ControleRemoto implements Controlador{
// 	//Atributos
// 	private $volume;
// 	private $ligar;
// 	private $reproducao;

// 	//Métodos Especiais
// 	function __construct(){
// 		$this->volume = 25;
// 		$this->ligar = false;
// 		$this->reproducao = false;
// 	}
// 	function setVolume($vol){
// 		$this->volume = $vol;
// 	}
// 	function getVolume(){
// 		return $this->volume;
// 	}
// 	function setLigar($liga){
// 		$this->ligar = $liga;
// 	}
// 	function getLigar(){
// 		return $this->ligar;
// 	}
// 	function setReproducao($reproduzir){
// 		$this->reproducao = $reproduzir;
// 	}
// 	function getReproducao(){
// 		return $this->reproducao;
// 	}

// 	//Métodos
// 	public function liga(){
// 		$this->setLigar(true);
// 	}
// 	public function desliga(){
// 		$this->setLigar(false);
// 	}
// 	public function abrirMenu(){
// 		echo "<div style='border: 1px solid black; background: grey; text-align: center; color: white; padding-bottom: 20px;'><h1 style='color: yellowgreen;'>- MENU -</h1>";
// 		echo "<br>Está ligado?<br>". ($this->getLigar()?"<span style='color: blue;'>SIM</span><br>" : "<span style='color: red;'>NÃO.</span><br>");
// 		echo "<br>Está tocando?<br>";
// 		if($this->getReproducao()){
// 			echo "<span style='color: blue;'>SIM</span><br>";
// 		}elseif(!$this->getReproducao() && $this->getLigar()){
// 			echo "<span style='color: red;'>NÃO.</span> Mas está ligado.<br>";
// 		}else{
// 			echo "<span style='color: red;'>NÃO.</span> Pois está desligado.<br>";
// 		}
// 		echo "<br>Volume:<br>";
// 		if($this->getLigar()){
// 			echo "<span style='color: black;'>".$this->getVolume()."</span>";
// 			for($x=0; $x<$this->getVolume(); $x+=5){
// 				echo "|";
// 			}
// 		}else{
// 			$this->setVolume(0);
// 			echo "<span style='color: black;'>".$this->getVolume()."</span>";
// 		}
// 		// for($i=0; $i<=$this->getVolume(); $i+=10){
// 		// 	echo "|";
// 		// }
// 		// echo "<br>";
// 		echo "</div>";
// 	}
// 	public function fecharMenu(){
// 		echo "<br>Fechando o menu...";
// 	}
// 	public function maisVolume(){
// 		if($this->getLigar()){
// 			$this->setVolume($this->getVolume()+5);
// 		}
// 	}
// 	public function menosVolume(){
// 		if($this->getLigar() && $this->getVolume() > 0){
// 			$this->setVolume($this->getVolume()-5);
// 		}
// 	}
// 	public function ligarMudo(){
// 		if($this->getLigar() && $this->getVolume()>0){
// 			$this->setVolume(0);
// 		}
// 	}	
// 	public function desligarMudo(){
// 		if($this->getLigar() && $this->getVolume()==0){
// 			$this->setVolume(50);
// 	}
// 	}
// 	public function play(){
// 		if(!$this->getLigar()){
// 			echo strtoupper("<span style='color: orange; font-weight: bold;'>Ligue antes de apertar o play.</span>");
// 	}else{
// 		$this->setReproducao(true);
// 	}
// 	}
// 	public function pause(){
// 		if($this->getLigar() && $this->getReproducao()){
// 			$this->setReproducao(false);
// 	}
// 	}
// }

// $cntrl_LG = new ControleRemoto();
// $cntrl_LG->liga();
// $cntrl_LG->play();
// // $cntrl_LG->pause();
// // $cntrl_LG->desliga();
// // $cntrl_LG->ligarMudo();
// // $cntrl_LG->desligarMudo();
// // $cntrl_LG->menosVolume();
// $cntrl_LG->abrirMenu();

// echo "<pre>";
// print_r($cntrl_LG);
// echo "</pre>";

/*Poo - Relacioanmento entre classes/Objetos compostos em PHP - 01/07/21 - Curso em Vídeo*/
// class Lutador{
// 	//Atributos
// 	private $nome;
// 	private $nacionalidade;
// 	private $idade;
// 	private $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

// 	//Métodos especiais
// 	function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
// 		$this->nome = $nome;
// 		$this->nacionalidade = $nacionalidade;
// 		$this->idade = $idade;
// 		$this->altura = $altura;
// 		$this->setPeso($peso);
// 		// $this->peso = $peso;
// 		$this->vitorias = $vitorias;
// 		$this->derrotas = $derrotas;
// 		$this->empates = $empates;
// 	}
// 	function setNome($nome){
// 		$this->nome = $nome;
// 	}
// 	function getNome(){
// 		return $this->nome;
// 	}
// 	function setNacionalidade($nacionalidade){
// 		$this->nacionalidade = $nacionalidade;
// 	}
// 	function getNacionalidade(){
// 		return $this->nacionalidade;
// 	}
// 	function setIdade($idade){
// 		$this->idade = $idade;
// 	}
// 	function getIdade(){
// 		return $this->Idade;
// 	}
// 	function setAltura($altura){
// 		$this->altura = $altura;
// 	}
// 	function getAltura(){
// 		return $this->altura;
// 	}
// 	function setPeso($peso){
// 		$this->peso = $peso;
// 		$this->setCategoria();
// 	}
// 	function getPeso(){
// 		return $this->peso;
// 	}
// 	function setCategoria(){
// 		if($this->peso < 52.2){
// 			$this->categoria = "Inválido: Lutador abaixo do peso mínimo permitido para lutadores.";
// 		}elseif($this->peso < 56.7){
// 			$this->categoria = "Mosca";
// 		}elseif($this->peso < 61.2){
// 			$this->categoria = "Galo";
// 		}elseif($this->peso <= 70.3){
// 			$this->categoria = "Leve";
// 		}elseif($this->peso < 77.1){
// 			$this->categoria = "Meio-Médio";
// 		}elseif($this->peso <= 83.9){
// 			$this->categoria = "Médio";
// 		}elseif($this->peso < 92.9){
// 			$this->categoria = "Meio-Pesado";
// 		}elseif($this->peso <= 120.2){
// 			$this->categoria = "Pesado";
// 		}else{
// 			$this->categoria = "Inválido: Lutador acima do peso máximo permitido para lutadores.";
// 		}
// 	}
// 	function getCategoria(){
// 		return $this->categoria;
// 	}
// 	function setVitorias($vitorias){
// 		$this->vitorias = $vitorias;
// 	}
// 	function getVitorias(){
// 		return $this->vitorias;
// 	}
// 	function setDerrotas($derrotas){
// 		$this->derrotas = $derrotas;
// 	}
// 	function getDerrotas(){
// 		return $this->derrotas;
// 	}
// 	function setEmpates($empates){
// 		$this->empates = $empates;
// 	}
// 	function getEmpates(){
// 		return $this->empates;
// 	}

// 	//Métodos
// 	public function apresentar(){
// 		echo "Nome:" .$this->getNome() ."<br>". "Nacionalidade: ". $this->getNacionalidade() ."<br>"."Peso: " . $this->getPeso(). "<br>" . "Altura: ". $this->getAltura() ."<br>";
// 	}
// 	public function status(){
// 		echo $this->getCategoria();
// 		echo "<br>";
// 		echo $this->getVitorias();
// 		echo "<br>";
// 		echo $this->getDerrotas();
// 		echo "<br>";
// 		echo $this->getEmpates();
// 		echo "<br>";
// 	}
// 	public function ganharLuta(){
// 		$this->setVitorias($this->getVitorias() + 1);
// 		// $this->vitorias += 1; //Outra forma de fazer
// 	}
// 	public function perderLuta(){
// 		$this->setDerrotas($this->getDerrotas() + 1);
// 		// $this->derrotas += 1; //Outra forma de fazer
// 	}
// 	public function empatarLuta(){
// 		$this->setEmpates($this->getEmpates() + 1);
// 		// $this->empates += 1; //Outra forma de fazer
// 	}

//  }
// $l = array();
// $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
// $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
// $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
// $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
// $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
// $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

//  //  echo $l1->getCategoria();
// // $l[0]->apresentar();
// // $l[0]->status();
// // $l[1]->apresentar();
// // $l[1]->status();

// // echo "<pre>";
// // print_r($l);
// // echo "</pre>";

// /*Agregação entre objetos em PHP - 02/07/21 - Curso em Vídeo*/
// class Luta{
// 	//Atributos
// 	private $desafiado;
// 	private $desafiante;
// 	private $rounds;
// 	private $aprovado;

// 	//Métodos públicos
// 	public function marcarLuta($l1, $l2){
// 		if($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)){
// 			$this->aprovado = true;
// 			$this->desafiado = $l1;
// 			$this->desafiante = $l2;
// 		}else{
// 			$this->aprovado = false;
// 			$this->desafiado = null;
// 			$this->desafiante = null;
// 		}
// 	}
// 	public function lutar(){
// 		if($this->aprovado){
// 			$this->desafiado->apresentar();
// 			$this->desafiante->apresentar();
// 			$vencedor = rand(0,2);
// 			switch($vencedor){
// 				case 0: // Empate
// 					echo "<p>Empate!</p>";
// 					$this->desafiado->empatarLuta();
// 					$this->desafiante->empatarLuta();
// 					break;
// 				case 1: // Desafiado vence
// 					echo "<p>O Vencedor é: ". $this->desafiado->getNome() ."</p>";
// 					$this->desafiado->ganharLuta();
// 					$this->desafiante->perderLuta();
// 					break;
// 				case 2: // Desafiante vence
// 					echo "<p>O Vencedor é: ". $this->desafiante->getNome() ."</p>";
// 					$this->desafiante->ganharLuta();
// 					$this->desafiado->perderLuta();
// 					break;
// 			}
// 		}else{
// 			echo "<p>A luta não pode acontecer</p>";
// 		}
// 	}
	
// 	//Métodos especiais
// 	function setDesafiado($desafiado){
// 		$this->desafiado = $desafiado;
// 	}
// 	function getDesafiado(){
// 		return $this->desafiado;
// 	}
// 	function setDesafiante($desafiante){
// 		$this->desafiante = $desafiante;
// 	}
// 	function getDesafiante(){
// 		return $this->desafiante;
// 	}
// 	function setRounds($rounds){
// 		$this->rounds = $rounds;
// 	}
// 	function getRounds(){
// 		return $this->rounds;
// 	}
// 	function setAprovado($aprovado){
// 		$this->aprovado = $aprovado;
// 	}
// 	function getAprovado(){
// 		return $this->aprovado;
// 	}
// }
// $UEC = new Luta();
// $UEC->marcarLuta($l[5], $l[4]);
// $UEC->lutar();
// echo "<pre>";
// print_r($UEC); 
// echo "</pre>";



/*Código de um jogo(retirado da internet) q pede para o usuário adivinhar um número entre 1 e 100 - 02/07/21*/ 
// //inicia a sessão para guardar o número escolhido pelo PC 
// session_start(); 
// //cria o formulário para interação 
// echo "
// 	<p>Adivinhe o Número que eu estou pensando entre 1 e 100.</p>
// 	<form action='#' method='post'>
// 		<input type='text' name='entrada'>
// 		<input type='submit' value='Tentar'>
// 	</form><br/>
// "; 

// //se o jogo não foi iniciado ainda, inicia a contagem de tentativas e sorteia o número
// if (!isset($_SESSION['tentativa'])) { 
// 	$_SESSION['tentativa'] = 1; 
// 	$_SESSION['numero'] = rand(1,100); 
// }

// //se o usuário digitou algo e não foi a letra s 
// if (isset($_POST['entrada']) && $_POST['entrada'] != "s") { 
// 	//lê a entrada do usuário 
// 	$entrada = $_POST['entrada'];
// 	//se o número digitado for o mesmo que o sorteado exibe mensagem para reinício 
// 	if ($_SESSION['numero'] == $entrada) { 
// 		echo "
// 			Parabéns, você acertou! O número era <strong>".$_SESSION['numero']."</strong>.<br/> 
// 			Você usou <strong>".$_SESSION['tentativa']."</strong> tentativas.<br/>
// 			Para jogar novamente digite <strong>s</strong>. 
// 		"; 
// 	//se o número digitado for menor... 
// } 
// 	elseif ($_SESSION['numero'] > $entrada) { 
// 		echo "O número é maior que ".$entrada."!"; 
// 		//se o número digitado for maior... 
// 	} else { 
// 		echo "O número é menor que ".$entrada."!"; 
// 	} 

// 	//incrementa a tentativa 
// 	$_SESSION['tentativa']++; 
// //se o usuário digitou a letra s para começar de novo, destroi a variável de sessão com o número sorteado 
// } elseif (isset($_POST['entrada']) && $_POST['entrada'] == "s") { 
// 	unset($_SESSION['numero']); session_destroy(); 
// } 

/*Exercíco prático de POO - Curso em Vídeo - aula#09b - 07/07/21 */
// interface Publicacao{
// 	public function abrir();
// 	public function fechar();
// 	public function folhear($p);
// 	public function avancarPagina();
// 	public function voltarPagina();
// 	}

// class Pessoa{
// 	private $nome;
// 	private $idade;
// 	private $sexo;

// 	function __construct($nome, $idade, $sexo){
// 		$this->nome = $nome;
// 		$this->idade = $idade;
// 		$this->sexo = $sexo;
// 	}

// 	public function setNome($nome){
// 		$this->nome = $nome;
// 	}
// 	public function getNome(){
// 		return $this->nome;
// 	}
// 	public function setIdade($idade){
// 		$this->idade = $idade;
// 	}
// 	public function getIdade(){
// 		return $this->idade;
// 	}
// 	public function setSexo($sexo){
// 		$this->sexo = $sexo;
// 	}
// 	public function getSexo(){
// 		return $this->sexo;
// 	}

// 	public function niver(){
// 		$this->idade++;
// 	}
// }

// class Livro implements Publicacao{
// 	private $titulo;
// 	private $autor;
// 	private $totalPaginas;
// 	private $paginaAtual;
// 	private $aberto;
// 	private $leitor;

// 	function __construct($titulo, $autor, $totPag, $leitor){
// 		$this->titulo = $titulo;
// 		$this->autor = $autor;
// 		$this->totalPaginas = $totPag;
// 		$this->leitor = $leitor;
// 		$this->paginaAtual = 0;
// 		$this->aberto = false;
// 	}

// 	public function setTitulo($titulo){
// 		$this->titulo = $titulo;
// 	}
// 	public function getTitulo(){
// 		return $this->titulo;
// 	}
// 	public function setAutor($autor){
// 		$this->autor = $autor;
// 	}
// 	public function getAutor(){
// 		return $this->autor;
// 	}
// 	public function setTotPag($totPag){
// 		$this->totalPaginas = $totPag;
// 	}
// 	public function getTotPag(){
// 		return $this->totalPaginas;
// 	}
// 	public function setPagAtual($pagAtual){
// 		$this->paginaAtual = $pagAtual;
// 	}
// 	public function getPagAtual(){
// 		return $this->paginaAtual;
// 	}
// 	public function setAberto($aberto){
// 		$this->aberto = $aberto;
// 	}
// 	public function getAberto(){
// 		return $this->aberto;
// 	}
// 	public function setLeitor($leitor){
// 		$this->leitor = $leitor;
// 	}
// 	public function getLeitor(){
// 		return $this->leitor;
// 	}

// 	public function detalhes(){
// 		echo "O livro: ".$this->titulo;
// 		echo "<br>Está sendo lido por: ".$this->leitor->getNome();
// 		EcHo "<br>Tem um total de ".$this->getTotPag()." páginas e está na página ".$this->getPagAtual();
// 		echo "<hr>";
// 	}

// 	public function abrir(){
// 		$this->aberto = true;
// 	}
// 	public function fechar(){
// 		$this->aberto = false;
// 	}
// 	public function folhear($p){
// 		if($p <= $this->totalPaginas){
// 			$this->paginaAtual = $p;
// 		}else{
// 			return $this->paginaAtual;
// 		}
// 	}
// 	public function avancarPagina(){
// 		if ($this->aberto) {
// 			if ($this->paginaAtual < $this->totalPaginas){
// 				$this->paginaAtual++;
// 			}else{
// 				echo "O livro chegou ao final e por isso não pode passar para uma página que não existe.";
// 			}
// 		}else{
// 			echo "O livro precisa está aberto para avançar páginas.<br>";
// 		}
// 	}
// 	public function voltarPagina(){
// 		if ($this->aberto) {
// 			if($this->getPagAtual() > 0){
// 				$this->paginaAtual--;
// 			}
// 		}else {
// 			echo "O livro precisa está aberto para voltar páginas.<br>";
// 		}
// 	}
// }

// $p = array();
// $l = array();

// $p[0] = new Pessoa('Willyan Ferreira', 32, 'M');
// $p[1] = new Pessoa('Carlos Ferreira', 32, 'M');

// $l[0] = new Livro('Javascrip', 'Devs', 900, $p[0]);
// $l[1] = new Livro('PHP', 'Devs', 700, $p[1]);

// $l[1]->abrir();
// $l[0]->abrir();
// $l[0]->folhear(800);
// // $l[1]->avancarPagina();
// // $l[1]->avancarPagina();
// // $l[1]->avancarPagina();
// $l[0]->voltarPagina();
// $l[0]->avancarPagina();
// $l[0]->avancarPagina();
// $l[0]->avancarPagina();
// $l[0]->avancarPagina();
// // $l[1]->voltarPagina();
// // $l[1]->avancarPagina();
// $l[1]->folhear(699);
// // $l[1]->folhear(809);
// $l[1]->avancarPagina();
// $l[1]->avancarPagina();

// echo "<pre>";
// print_r($l);
// echo "</pre>";

// echo "<hr>";

// echo $l[1]->detalhes();
// echo $l[0]->detalhes();

/*POO/Herança - Curso em Vídeo - Aula 10b 13/07/21*/

// abstract class Pessoa{
// 	private $nome;
// 	private $idade;
// 	private $sexo;

// 	#Métodos simples
// 	public final function aniv(){
// 		$this->idade++;
// 	}
	
// 	#Métodos especiais
// 	public function __construct($nome, $idade, $sexo){
// 		$this->setNome($nome);
// 		$this->setIdade($idade);
// 		$this->setSexo($sexo);
// 	}
// 	public function setNome($nome){
// 		$this->nome = $nome;
// 	}
// 	public function getNome(){
// 		return $this->nome;
// 	}
// 	public function setIdade($idade){
// 		$this->idade = $idade;
// 	}
// 	public function getIdade(){
// 		return $this->idade;
// 	}
// 	public function setSexo($sexo){
// 		$this->sexo = $sexo;
// 	}
// 	public function getSexo(){
// 		return $this->sexo;
// 	}
// }

// class Aluno extends Pessoa{
// 	private $matr;
// 	private $curso;

// 	#Métodos simples
// 	public function cancelarMatr(){
// 		$this->matr = false;
// 	}
// 	public function pagarCurso(){
// 		echo "Curso pago";
// 	}

// 	#Métodos especiais
// 	public function setMatr($matr){
// 		$this->matr = $matr;
// 	}
// 	public function getMatr(){
// 		return $this->matr;
// 	}
// 	public function setCurso($curso){
// 		$this->curso = $curso;
// 	}
// 	public function getCurso(){
// 		return $this->curso;
// 	}
// }

// class Professor extends Pessoa{
// 	private $especialidade;
// 	private $salario;

// 	#Métodos simples
// 	public function receberAum(){
// 		$this->salario = $this->salario + (($this->salario / 100) * 10);
// 	}

// 	#Métodos especiais
// 	public function setEspec($especialidade){
// 		$this->especialidade = $especialidade;
// 	}
// 	public function getEspec(){
// 		return $this->especialidade;
// 	}
// 	public function setSala($salario){
// 		$this->salario = $salario;
// 	}
// 	public function getSala(){
// 		return $this->salario;
// 	}
// }

// class Funcionario extends Pessoa{
// 	private $setor;
// 	private $trabalhando;

// 	#Métodos simples
// 	public function mudarTrabalho(){
// 		$this->trabalhando = ! $this->trabalhando;
// 	}

// 	#Métodos especiais
// 	public function setSetor($setor){
// 		$this->setor = $setor;
// 	}
// 	public function getSetor(){
// 		return $this->setor;
// 	}
// 	public function setTrabalhando($trabalhando){
// 		$this->trabalhando = $trabalhando;
// 	}
// 	public function getTrabalhando(){
// 		return $this->trabalhando;
// 	}

// }

// /*POO/PHP - Herança - Aula 11b parte 2 - Curso em Vídeo - 21/07/21 */
// class Visitante extends Pessoa{}

// class Bolsista extends Aluno{
// 	private $bolsa;

// 	#Métodos simples
// 	public function renovarBolsa(){
// 		echo "Bolsa renovada";
// 	}
// 	public function pagarCurso(){
// 		echo "Bolsista tem desconto";
// 	}


// 	#Métodos especiais
// 	public function setBolsa($bolsa){
// 		$this->bolsa = $bolsa;
// 	}
// 	public function getBolsa(){
// 		return $this->bolsa;
// 	}
// }

// $pes = array();
// $alu = array();
// $pro = array();
// $fun = array();
// $bol = array();

// $vis[0] = new Visitante('Pamela', 36, 'F');
// $alu[0] = new Aluno('Willyan', 32, 'M');
// $pro[0] = new Professor('Odecilia', 40, 'F');
// $fun[0] = new Funcionario('Etevaldo', 49, 'M');
// $bol[0] = new Bolsista('Jariene', 19, 'M');
// $fun[0]->setTrabalhando(False);
// $fun[0]->mudarTrabalho();
// echo "<pre>";
// print_r($vis[0]);
// print_r($alu[0]);
// print_r($pro[0]);
// print_r($fun[0]);
// print_r($bol[0]);
// echo "</pre>";
// $alu[0]->pagarCurso();
// echo "<br>";
// $bol[0]->pagarCurso();

/*POO/PHP Polimorfismo - Aula 12b parte 1 - Curso em Vídeo - 23/07/21*/
abstract class Animal{
	protected $peso;
	protected $idade;
	protected $membros;
	
	#Métodos simples
	abstract function locomover();
	abstract function alimentar();
	abstract function emitirSom();

	#Métodos especiais
	protected function setIdade($idade){
		$this->idade = $idade;
	}
	protected function getIdade(){
		return $this->idade;
	}
	protected function setPeso($peso){
		$this->peso = $peso;
	}
	protected function getPeso(){
		return $this->peso;
	}
	protected function setMembros($membros){
		$this->membros = $membros;
	}
	protected function getMembros(){
		return $this->membros;
	}
}

class Mamifero extends Animal{
	private $corPelo;

	#Métodos simples
	public function locomover(){
		echo "Caminhando<br>";
	}
	public function alimentar(){
		echo "mamar<br>";
	}
	public function emitirSom(){
		echo "Som de mamífero<br>";
	}

	#Métodos especiais
	public function setCorPelo($corPelo){
		$this->corPelo = $corPelo;
	}
	public function getMembros(){
		return $this->corPelo;
	}
}
class Reptil extends Animal{
	private $corEscama;

	#Métodos simples
	public function locomover(){
		echo "Rastejando<br>";
	}
	public function alimentar(){
		echo "Comer vegetais<br>";
	}
	public function emitirSom(){
		echo "Som de réptil<br>";
	}

	#Métodos especiais
	public function setCorEscama($corEscama){
		$this->corEscama = $corEscama;
	}
	public function getCorEscama(){
		return $this->corEscama;
	}
}
class Peixe extends Animal{
	private $corEscama;

	#Métodos simples
	public function locomover(){
		echo "Nadando<br>";
	}
	public function alimentar(){
		echo "Comer substâncias<br>";
	}
	public function emitirSom(){
		echo "Peixe não faz som<br>";
	}
	public function soltarBolhas(){
		echo "Soltando bolhas<br>";
	}

	#Métodos especiais
	public function setCorEscama($corEscama){
		$this->corEscama = $corEscama;
	}
	public function getCorEscama(){
		return $this->corEscama;
	}
}
class Ave extends Animal{
	private $corPena;

	#Métodos simples
	public function locomover(){
		echo "Voando<br>";
	}
	public function alimentar(){
		echo "Comer Frutas<br>";
	}
	public function emitirSom(){
		echo "Som de ave<br>";
	}
	public function fazerNinho(){
		echo "Ninho feito<br>";
	}

	#Métodos especiais
	public function setCorPena($corPena){
		$this->corPena = $corPena;
	}
	public function getCorPena(){
		return $this->corPena;
	}
}

class Cachorro extends Mamifero{}
class Canguru extends Mamifero{
	public function locomover(){
		echo "Pulando<br>";
	}
}
class Cobra extends Reptil{}
class Tartaruga extends Reptil{
	public function locomover(){
		echo "Anda bem devagar<br>";
	}
}
class PeixeDourado extends Peixe{}
class Arara extends Ave{}

$m = new Mamifero();
$r = new Reptil();
$p = new Peixe();
$a = new Ave();
$ca = new Cachorro();
$can = new Canguru();
$co = new Cobra();
$t = new Tartaruga();
$pd = new PeixeDourado();
$arara = new Arara();

$m->locomover();
$r->locomover();
$p->locomover();
$a->locomover();

echo "<div style='border: 1px solid green;'>";
echo "Cachorro: ".$ca->locomover();
echo "</div>";

echo "<div style='border: 1px solid green;'>";
echo "Canguru: ".$can->locomover();
echo "</div>";

echo "<div style='border: 1px solid green;'>";
echo "Cobra: ".$co->locomover();
echo "</div>";

echo "<div style='border: 1px solid green;'>";
echo "Tartaruga: ".$t->locomover();
echo "</div>";

echo "<div style='border: 1px solid green;'>";
echo "Peixe Dourado: ".$pd->locomover();
echo "</div>";

echo "<div style='border: 1px solid green;'>";
echo "Arara: ".$arara->locomover();
echo "</div>";

?>
<!-- <h3 id="estilo"><?php //echo $txt;?></h3> -->
</body>
</html> 