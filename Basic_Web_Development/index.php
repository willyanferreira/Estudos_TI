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

/*Praticando POO/Encapsulamento - 29/06/21 - Curso em vídeo*/
interface Controlador{
	//Métodos abstratos - abstrato indica que os métodos não serão implementados/desenvolvidos aqui
	public function liga();
	public function desliga();
	public function abrirMenu();
	public function fecharMenu();
	public function maisVolume();
	public function menosVolume();
	public function ligarMudo();
	public function desligarMudo();
	public function play();
	public function pause();
}

class ControleRemoto implements Controlador{
	//Atributos
	private $volume;
	private $ligar;
	private $reproducao;

	//Métodos Especiais
	function __construct(){
		$this->volume = 25;
		$this->ligar = false;
		$this->reproducao = false;
	}
	function setVolume($vol){
		$this->volume = $vol;
	}
	function getVolume(){
		return $this->volume;
	}
	function setLigar($liga){
		$this->ligar = $liga;
	}
	function getLigar(){
		return $this->ligar;
	}
	function setReproducao($reproduzir){
		$this->reproducao = $reproduzir;
	}
	function getReproducao(){
		return $this->reproducao;
	}

	//Métodos
	public function liga(){
		$this->setLigar(true);
	}
	public function desliga(){
		$this->setLigar(false);
	}
	public function abrirMenu(){
		echo "<div style='border: 1px solid black; background: grey; text-align: center; color: white; padding-bottom: 20px;'><h1 style='color: yellowgreen;'>- MENU -</h1>";
		echo "<br>Está ligado?<br>". ($this->getLigar()?"<span style='color: blue;'>SIM</span><br>" : "<span style='color: red;'>NÃO.</span><br>");
		echo "<br>Está tocando?<br>";
		if($this->getReproducao()){
			echo "<span style='color: blue;'>SIM</span><br>";
		}elseif(!$this->getReproducao() && $this->getLigar()){
			echo "<span style='color: red;'>NÃO.</span> Mas está ligado.<br>";
		}else{
			echo "<span style='color: red;'>NÃO.</span> Pois está desligado.<br>";
		}
		echo "<br>Volume:<br>";
		if($this->getLigar()){
			echo "<span style='color: black;'>".$this->getVolume()."</span>";
			for($x=0; $x<$this->getVolume(); $x+=5){
				echo "|";
			}
		}else{
			$this->setVolume(0);
			echo "<span style='color: black;'>".$this->getVolume()."</span>";
		}
		// for($i=0; $i<=$this->getVolume(); $i+=10){
		// 	echo "|";
		// }
		// echo "<br>";
		echo "</div>";
	}
	public function fecharMenu(){
		echo "<br>Fechando o menu...";
	}
	public function maisVolume(){
		if($this->getLigar()){
			$this->setVolume($this->getVolume()+5);
		}
	}
	public function menosVolume(){
		if($this->getLigar() && $this->getVolume() > 0){
			$this->setVolume($this->getVolume()-5);
		}
	}
	public function ligarMudo(){
		if($this->getLigar() && $this->getVolume()>0){
			$this->setVolume(0);
		}
	}	
	public function desligarMudo(){
		if($this->getLigar() && $this->getVolume()==0){
			$this->setVolume(50);
	}
	}
	public function play(){
		if(!$this->getLigar()){
			echo strtoupper("<span style='color: orange; font-weight: bold;'>Ligue antes de apertar o play.</span>");
	}else{
		$this->setReproducao(true);
	}
	}
	public function pause(){
		if($this->getLigar() && $this->getReproducao()){
			$this->setReproducao(false);
	}
	}
}

$cntrl_LG = new ControleRemoto();
$cntrl_LG->liga();
$cntrl_LG->play();
// $cntrl_LG->pause();
// $cntrl_LG->desliga();
// $cntrl_LG->ligarMudo();
// $cntrl_LG->desligarMudo();
// $cntrl_LG->menosVolume();
$cntrl_LG->abrirMenu();

echo "<pre>";
print_r($cntrl_LG);
echo "</pre>";
 ?>
<!-- <h3 id="estilo"><?php //echo $txt;?></h3> -->
</body>
</html> 