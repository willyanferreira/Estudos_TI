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