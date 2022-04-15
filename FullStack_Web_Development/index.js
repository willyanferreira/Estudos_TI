//Exercícios de Javascript
//Programa de cálculo de salário 27/03/22

/*let ht, vh, pd, td, sb, sl;
ht = prompt('Digite quantas horas você trabalhos esse mês:');
vh = prompt('Digite o valor da sua hora de trabalho:');
pd = prompt('Digite o percentual de desconto:');
sb = ht * vh;
td = (pd / 100) * sb;
sl = sb - td;
if(ht == ''){
    console.log('Você não informou a quantidade de horas trabalhadas')
}else if(vh == ''){
    console.log('Você não informou o valor da sua hora de trabalho')
}else if(pd == ''){
    console.log('Você não informou o percentual de desconto')
}else{
    console.log('Seu salário base é: ' + sb + ' e seu salário líquido é: ' + sl);
}*/

//FIM

//Programa para converter de Celsius para Fahrenheit e vice-versa 27/03/22

/*let c, f, escala = prompt('Digite 1 para converter para Fahrenheit e 2 para Celsius:');
if (escala == '1') {
    c = prompt('Digite a temperatura em Graus Celsius:');
    f = c * 9 / 5 + 32;
    console.log("A temperatura em Fahrenheit é: " + f);
} else if (escala == '2') {
    f = prompt('Digite a temperatura em Graus Fahrenheit:');
    c = (f - 32) * 5 / 9;
    console.log("A temperatura em Celsius é: " + c);
}else {
    console.log("Você não escolheu uma escala.");
}*/

//FIM

//Programa que troca valores de duas variáveis 27/03/22

/*let a = prompt('digite um valor:'), b = prompt('digite outro valor:'), c;
c = a;
a = b;
b = c;
console.log('Trocando os valores das variáveis...')
console.log('O valor de A é: \n' + a + '\nO valor de B é: \n' + b);*/

//FIM

//Programa para calcular volume 28/03/22

/*const PI = 3.14;
let raio = prompt('Digite o raio');
let altura = prompt('Digite a altura');
let volume = (PI * (raio ** 2)) * altura;
console.log(volume);*/

//FIM

//Programa para calcular a qntd de lt de combustível gasto em uma viagem 28/03/22

/*let tempo, distancia, velocidade, litros_usados;
tempo = prompt('Digite o tempo gasto na viagem em minutos:')
velocidade = prompt('Digite a velocidade média utilizada:')
const KM_por_LT = 12;
distancia = tempo * velocidade;
litros_usados = distancia / KM_por_LT;
console.log('Seu veículo se movimentou a uma velocidade média de \ ' + velocidade + '\
km/h e  levou um tempo total de ' + tempo + ' hora(s) e percorreu uma distância de ' + distancia + '\
km e utilizou ' + litros_usados + ' litros de combustível.'
);*/

//FIM

//Programa para calcular de uma prestação em atraso 28/03/22

/*let prestacao, valor, taxa, tempo;
valor = parseInt(prompt('Digite o valor original da prestação:'));
taxa = parseInt(prompt('Digite o percentual da taxa de juros:'));
tempo = parseInt(prompt('Digite a quantidade de dias em atraso:'));
prestacao = valor + (valor * ((taxa / 100) * tempo));
console.log("O valor da prestção atualizada com juros é: R$" + prestacao);*/

//FIM

/*Programa que ler 4 valores numéricos e apresenta a multiplicação e a soma usando
o mesmo raciocínio de propriedades distributivas*/

/*let a = parseInt(prompt('Digite um número inteiro:')), 
b = parseInt(prompt('Digite um número inteiro:')), 
c = parseInt(prompt('Digite um número inteiro:')), 
d = parseInt(prompt('Digite um número inteiro:'));
let soma1 = a + b, soma2 = a + c, soma3 = a + d, soma4 = b + c, soma5 = b + d, soma6 = c + d;
let multi1 = a * b, multi2 = a * c, multi3 = a * d, multi4 = b * c, multi5 = b * d, multi6 = c * d;
console.log('SOMA');
console.log("A + B é: " + soma1 + "\nA + C é: " + soma2 + "\nA + D é: " + soma3 + "\nB + C é: " + soma4 + "\nB + D é: " + soma5 + "\nC + D é: " + soma6);
console.log('MULTIPLICAÇÃO');
console.log("A x B é: " + multi1 + "\nA x C é: " + multi2 + "\nA x D é: " + multi3 + "\nB x C é: " + multi4 + "\nB x D é: " + multi5 + "\nC x D é: " + multi6);*/

//FIM

//Programa que apresenta o volume de uma caixa retangular 01/04/22

/*let volume, comprimento, largura, altura;
comprimento = prompt("Digite o comprimento da caixa:");
largura = prompt("Digite a largura da caixa:");
altura = prompt("Digite a altura da caixa:");
volume = comprimento * largura * altura;
console.log(volume);*/

//FIM

//Programa que ler um número inteiro e exibe seu valor ao quadrado 01/04/22

/*let number = prompt('Digite um número inteiro:');
console.log('O valor de ' + number + ' ao quadrado é: ' + number * number);*/

//FIM

//Programa que exibe o quadrado da diferença de um valor em relação a outro valor

/*let num1, num2, valor_final;
num1 = prompt('Digite um valor inteiro:');
num2 = prompt('Digite outro valor inteiro:');
valor_final = num1 % num2;
console.log(valor_final**2);*/

//FIM

//Programa que converte Real pra Dólar e vice-versa 04/04/22

/*let cotacao, real, dolar, conversao;
conversao = prompt('Digite 1 para converter de Real para Dólar e 2 para converter de Dólar para real');
if(conversao == '1'){
    cotacao = prompt('Digite o valor da cotação do Dólar:');
    real = prompt('Digite a quantida de Reais que você tem:');
    conversao = real / cotacao;
    console.log(conversao);
}else if(conversao == 2){
    cotacao = prompt('Digite o valor da cotação do Dólar:');
    dolar = prompt('Digite a quantida de Dólares que você tem:');
    conversao = dolar * cotacao;
    console.log(conversao);
}else{
    console.log('Você não escolheu uma opção!');
}*/

//FIM

//Programa que ler três valores numéricos inteiros e apresenta o resultado da soma dos quadrados 12/04/22

/*let A, B, C, Soma, Resultado_Final;
A = parseInt(prompt('Digite um número inteiro: '))**2;
B = parseInt(prompt('Digite um número inteiro: '))**2;
C = parseInt(prompt('Digite um número inteiro: '))**2;
Soma = A + B + C;
Resultado_Final = Soma;
console.log(Resultado_Final);*/

//FIM

//Programa que ler três valores numéricos inteiros e apresenta o resultado do quadrado da soma 12/04/22

/*let A, B, C, Soma, Resultado_Final;
A = parseInt(prompt('Digite um número inteiro: '));
B = parseInt(prompt('Digite um número inteiro: '));
C = parseInt(prompt('Digite um número inteiro: '));
Soma = A + B + C;
Resultado_Final = Soma**2;
console.log(Resultado_Final);*/

//FIM

//Programa que ler 4 valores numéricos inteiros e apresenta o produto do 1° com o 3° e a soma do 2° com o 4° 12/04/22

/*let A, B, C, D, P, S;
A = parseInt(prompt('Digite o primeiro valor para multiplicação:'));
B = parseInt(prompt('Digite o primeiro valor para adição:'));
C = parseInt(prompt('Digite o segundo valor para multiplicação:'));
D = parseInt(prompt('Digite o segundo valor para adição:'));
P = A * C;
S = B + D;
console.log(`A multiplicação entre ${A} e ${C} é: ${P} e a soma entre ${B} e ${D} é: ${S}`);*/

//FIM

//Programa que ler o salário do usuário, o percentual de um reajuste e apresenta o valor do novo salário 13/04/22

/*let SM, PR, NS;
SM = parseInt(prompt('Digite o valor do seu salário:'));
PR = parseInt(prompt('Digite o percentual do reajuste:'));
NS = SM + ((PR / 100) * SM);
console.log(`Seu novo salário é R$${NS.toFixed(2)}`);*/

//FIM

//Programa que calcula a área de uma circunferência 13/04/22

/*let A, R;
R = parseInt(prompt('Digite o valor do raio para o calculo da circunferência:'));
A = 3.14 * (R**2);
console.log(`O valor da circunferência é ${A}`);*/

//FIM

//Programa que exibe os dados de uma eleição sindical 13/04/22

/*let candidato_A, candidato_B, candidato_C, votos_validos, votos_nulos, votos_em_branco, eleitores;
candidato_A = parseInt(prompt('Digite a quantidade de votos do candidato A'));
candidato_B = parseInt(prompt('Digite a quantidade de votos do candidato B'));
candidato_C = parseInt(prompt('Digite a quantidade de votos do candidato C'));
votos_nulos = parseInt(prompt('Digite a quantidade de votos nulos'));
votos_em_branco = parseInt(prompt('Digite a quantidade de votos em brancos'));
votos_validos = candidato_A + candidato_B + candidato_C;
eleitores = votos_validos + votos_nulos + votos_em_branco;
console.log("Votos válidos: " + votos_validos + "\nVotos nulos: " + votos_nulos + "\nVotos em branco: " + votos_em_branco + "\nTotal de eleitores: " + eleitores);

let percentual_de_votos_validos = (votos_validos * 100) / eleitores;
console.log("Votos válidos: "+percentual_de_votos_validos+"%\n");

let percentual_de_votos_validos_candidatoA = (candidato_A * 100) / eleitores;
console.log("Votos candidato A: "+percentual_de_votos_validos_candidatoA+"%\n");

let percentual_de_votos_validos_candidatoB = (candidato_B * 100) / eleitores;
console.log("Votos candidato B: "+percentual_de_votos_validos_candidatoB+"%\n");

let percentual_de_votos_validos_candidatoC = (candidato_C * 100) / eleitores;
console.log("Votos candidato C: "+percentual_de_votos_validos_candidatoC+"%\n");

let percentual_de_votos_nulos = (votos_nulos * 100) / eleitores;
console.log("Votos nulos: "+percentual_de_votos_nulos+"%\n");

let percentual_de_votos_em_branco = (votos_em_branco * 100) / eleitores;
console.log("Votos em branco: "+percentual_de_votos_em_branco+"%\n");*/

//FIM

//Programa que ler 2 valores reais e apresenta as 4 operações aritméticas básicas 15/04/22

/*let valor_a, valor_b, soma, subtracao, multiplicacao, divisao;
valor_a = parseFloat(prompt("Digite um valor real:"));
valor_b = parseFloat(prompt("Digite outro valor real:"));
soma = valor_a + valor_b;
subtracao = valor_a - valor_b;
multiplicacao = valor_a * valor_b;
divisao = valor_a / valor_b;
console.log(`
    O resultado da soma entre ${valor_a} e ${valor_b} é: ${soma.toFixed(1)} \n
    O resultado da subtração entre ${valor_a} e ${valor_b} é: ${subtracao.toFixed(1)} \n
    O resultado da multiplicação entre ${valor_a} e ${valor_b} é: ${multiplicacao.toFixed(1)} \n
    O resultado da divisão entre ${valor_a} e ${valor_b} é: ${divisao.toFixed(1)} \n
`)*/

//FIM

//Programa que calcula, armazena e apresenta em m/s o valor da velocidade de um projétil que percorre uma distância em km a um espaço de tempo em minutos 15/04/22

/*let distancia, tempo, velocidade;
const quilometro = 1000, hora = 60;
distancia = parseFloat(prompt("Digite a distância percorrida em quilômetros:"));
tempo = parseFloat(prompt("Digite o tempo percorrido em minutos:"));
velocidade = (distancia * quilometro) / (tempo * hora);
console.log(`O projétl percorreu uma velocidade de ${velocidade.toFixed(2)}m/s`);*/

//FIM