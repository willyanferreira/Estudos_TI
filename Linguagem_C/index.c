#include <stdio.h>
#include <locale.h>
#include <math.h>

int main(char arg, char * args[])  
{
	setlocale(LC_ALL,"Portuguese");
	/*int x, y;

	printf("Digite o valor de X: \n");
	scanf("%d", &x);

	printf("Digite o valor de Y: \n");
	scanf("%d", &y);

	//Estrutura do SE
	if (x>y){
		//instrução
		printf("X é maior que Y!\n");	
	}else if(x<y){
		printf("Y é maior que X!\n");
	}else{
		printf("X e Y são iguais\n");
	}*/

	/*float salario, prestacao;
	printf("Digite o valor de seu salário: \n");
	scanf("%f", &salario);

	printf("Digite o valor da prestação desejada: \n");
	scanf("%f", &prestacao);	
	
	if (prestacao>=(salario*0.2)){
		printf("Empréstimo negado.\n");
	}else {
		printf("Empréstimo liberado\n");
	}*/

	/*int valor, resto;

	printf("Digite um valor: \n");
	scanf("%d", &valor);

	resto = valor%2;
	
	if (resto == 0){
		printf("Esse número é par\n");
	}else{
		printf("Esse número é impar\n");
	}*/

	/*float salario, gastos;

	printf("Digite o valor do seu salário: \n");
	scanf("%f", &salario);

	printf("Digite o valor dos seus gastos: \n");
	scanf("%f", &gastos);

	if(gastos <= salario) {
		printf("Gastos dentro do orçamento.\n");
	}else{
		printf("Você tá gastando mais do que ganha.\n");
	}*/

	/*float nota1, nota2, media;

	printf("Qual a nota1: \n");
	scanf("%f", &nota1);

	printf("Qual a nota2: \n");
	scanf("%f", &nota2);

	media = (nota1+nota2) / 2;

	if (media >= 6)
	{
		printf("Aluno aprovado com média %f. ", media);
	}else{
		printf("Aluno com média %f. Irá fazer AV3.", media);
	}*/

	/*int a, b, c;

	printf("Digite um valor: \n");
	scanf("%d", &a);
	printf("Digite outro valor: \n");
	scanf("%d", &b);

	if (a == b) {
		c = a + b;
		printf("%d mais %d é igual: %d \n", a, b, c);
	}else{
		c = a * b;
		printf("%d vezes %d é igual: %d \n", a, b, c);
	}
	printf("\n");*/

	/*float altura, pesoIdeal;
	char sexo; 
	char nome[30];

	printf("Qual o seu nome? \n");
	//scanf("%s", &nome[100]);
	gets(nome); 

	printf("Qual a sua altura? \n");
	scanf("%f", &altura);

	printf("Qual o seu sexo (F ou M)? \n");
	scanf("%s", &sexo);

	

	if (sexo == 'M')
	{
		pesoIdeal = (72.7 * altura) - 58;
		printf("%s seu peso ideal é: %.2f \n",nome, pesoIdeal);
	}else {
		pesoIdeal = (62.1 * altura) - 44.7;
		printf("%s seu peso ideal é: %.2f \n",nome, pesoIdeal);
	}*/

	/*Escreva um algoritmo que leia o número de identificação, as 3 notas obtidas por um aluno nas 3 verificações e a média dos exercícios que fazem parte da avaliação, e calcule a média de aproveitamento, usando a fórmula:
	MA := (nota1 + nota 2 * 2 + nota 3 * 3 + ME)/7
	A atribuição dos conceitos obedece a tabela abaixo. O algoritmo deve escrever o número do aluno,
	suas notas, a média dos exercícios, a média de aproveitamento, o conceito correspondente e a mensagem 'Aprovado' se o conceito for A, B ou C, e 'Reprovado' se o conceito for D ou E.
	Média de aproveitamento Conceito
	>= 90 A
	>= 75 e < 90 B
	>= 60 e < 75 C
	>= 40 e < 60 D
	< 40 E*/

	/*int mat;
	float n1, n2, n3, me, ma;

	printf("Informe sua matrícula: \n");
	scanf("%d", &mat);

	printf("Informe a sua primeira média: \n");
	scanf("%f", &n1);

	printf("Informe a sua segunda média: \n");
	scanf("%f", &n2);

	printf("Informe a sua terceira média: \n");
	scanf("%f", &n3);

	printf("Informe a sua média das avaliações : \n");
	scanf("%f", &me);

	ma = (n1 + (n2 * 2) + (n3 * 3) + me) / 7;

	if (ma >= 9.0)
	{
		printf("STATUS DO ALUNO \n Mat: %d \n Nota AV1: %.2f \n Nota AV2: %.2f \n Nota AV3: %.2f \n Média das Avaliações: %.2f \n Conceito: A \n Média de Aproveitamento: %.2f \n Situação: Aprovado \n",mat, n1, n2, n3, me, ma );

	}else if (ma >= 7.5 && ma < 9.0)
	{
		printf("STATUS DO ALUNO \n Mat: %d \n Nota AV1: %.2f \n Nota AV2: %.2f \n Nota AV3: %.2f \n Média das Avaliações: %.2f \n Conceito: B \n Média de Aproveitamento: %.2f \n Situação: Aprovado \n",mat, n1, n2, n3, me, ma );

	}else if (ma >= 6.0 && ma < 7.5)
	{
		printf("STATUS DO ALUNO \n Mat: %d \n Nota AV1: %.2f \n Nota AV2: %.2f \n Nota AV3: %.2f \n Média das Avaliações: %.2f \n Conceito: C \n Média de Aproveitamento: %.2f \n Situação: Aprovado \n",mat, n1, n2, n3, me, ma );

	}else if (ma >= 4.0 && ma < 6.0)
	{
		printf("\t STATUS DO ALUNO \n Mat: %d \n Nota AV1: %.2f \n Nota AV2: %.2f \n Nota AV3: %.2f \n Média das Avaliações: %.2f \n Conceito: D \n Média de Aproveitamento: %.2f \n Situação: Reprovado \n",mat, n1, n2, n3, me, ma );

	}else {
		printf("STATUS DO ALUNO \n Mat: %d \n Nota AV1: %.2f \n Nota AV2: %.2f \n Nota AV3: %.2f \n Média das Avaliações: %.2f \n Conceito: E \n Média de Aproveitamento: %.2f \n Situação: Reprovado \n",mat, n1, n2, n3, me, ma );
	}*/


	/*
	O IMC – Indice de Massa Corporal é um critério da Organização Mundial de Saúde para dar
	uma indicação sobre a condição de peso de uma pessoa adulta. A fórmula é IMC = peso / ( altura )2

	Elabore um algoritmo que leia o peso e a altura de um adulto e mostre sua condição de acordo
	com a tabela abaixo.
	IMC em adultos Condição
	Abaixo de 18,5 Abaixo do peso
	Entre 18,5 e 25 Peso normal
	Entre 25 e 30 Acima do peso
	Acima de 30 obeso
	*/

	/*float imc, altura, peso;

	printf("Informe sua Altura: \n");
	scanf("%f", &altura);

	printf("Informe seu Peso: \n");
	scanf("%f", &peso);

	imc = peso / (altura*altura);

	if (imc < 18.5)
	{
		printf("Com o IMC de %.2f você está abaixo do peso\n", imc );
	}else if (imc >= 18.5 && imc < 25)
	{
		printf("Com o IMC de %.2f você está no peso ideal\n", imc );
	}else if (imc >= 25 && imc < 30)
	{
		printf("Com o IMC de %.2f você está acima do peso\n", imc );
	}else {
		printf("Com o IMC de %.2f você está obeso\n", imc );
	}*/


	/* Aula de Revisão - 27-04-21
	3. Escreva um programa solicita o nome do usuário, sua idade e seu sexo (M/F). Se o sexo
	for F (feminino) escreva o nome do usuário, sua idade e a palavra Feminino. Caso seja
	M (masculino) escreva o nome do usuário, sua idade e a palavra Masculino. Faça o
	programa usando a estrutura do SE.*/

	/*int idade;
	char sexo; 
	char nome[30];

	printf("Qual o seu nome? \n");
	//scanf("%s", &nome[100]);
	fgets(nome,30,stdin); 

	printf("Qual o seu sexo (F ou M)? \n");
	scanf("%c", &sexo);

	printf("Qual a sua idade? \n");
	scanf("%d", &idade);

	if (sexo == 'M' || sexo == 'm')
	{
		printf("\t***Status da pessoa***\n Seu nome:\n%s\nSua idade:\n%d\nSeu sexo:\nMasculino\n",nome, idade);
	}else if (sexo == 'F' || sexo == 'f') {
		printf("\t***Status da pessoa***\n Seu nome:\n%s\nSua idade:\n%d\nSeu sexo:\nFeminino\n",nome, idade);
	}else {
		printf("Sexo inválido\n");
	}*/

	/* Aula de Revisão - 27-04-21
	4. Refaça a questão acima usando a estrutura do Switch (escolha).*/

	/*int idade;
	char sexo; 
	char nome[30];

	printf("Qual o seu nome? \n");
	//scanf("%s", &nome[100]);
	fgets(nome,30,stdin); 

	printf("Qual o seu sexo (F ou M)? \n");
	scanf("%s", &sexo);

	printf("Qual a sua idade? \n");
	scanf("%d", &idade);

	switch(sexo) {
		case 'M':
			printf("\t***Status da pessoa***\n Seu nome:\n%s\nSua idade:\n%d\nSeu sexo:\nMasculino\n",nome, idade);
			break;
		case 'm':
			printf("\t***Status da pessoa***\n Seu nome:\n%s\nSua idade:\n%d\nSeu sexo:\nMasculino\n",nome, idade);
			break;
		case 'F':
			printf("\t***Status da pessoa***\n Seu nome:\n%s\nSua idade:\n%d\nSeu sexo:\nFeminino\n",nome, idade);
			break;
		case 'f':
			printf("\t***Status da pessoa***\n Seu nome:\n%s\nSua idade:\n%d\nSeu sexo:\nFeminino\n",nome, idade);
			break;
		default:
		printf("Sexo inválido.\n");
	}*/

    /*int t = 5;
	switch (t)
	{
	case t < 10:
		printf("Hoje ta fazendo muito frio");
		break;
	case t < 25:
		printf("A temperatura está agradavel");
		break;
	default:
		printf("Hoje ta quente pra chuchu");
	}*/

	/*int base, altura;
	float area;
	printf("Digite o valor da base\n");
	scanf("%d", &base);

	printf("Digite o valor da altura\n");
	scanf("%d", &altura);

	area = (base*altura)/2;

	printf("Area do triângulo = %1.f \n", area);*/

	/*Você foi ao mercantil e viu que um determinado produto, se comprado em quantias de até 20 unidades, o preço é R$ 1,80. Caso seja comprado de 21 acima, o valor ficará por R$ 1,40. Faça um algoritmo que leia a quantidade de produto que o cliente queira comprar, calcule a conta final de acordo com os valores praticados e mostre a quantia escolhida e o valor final da conta.*/

	/*int qtdProdutos;
	float preco, valorFinal;

	printf("Quantas quantidades do produto escolhido você deseja levar? \n");
	scanf("%d", &qtdProdutos);

	if (qtdProdutos <= 20)
	{
		preco = 1.80;
	}else {
		preco = 1.40;
	}

	valorFinal = qtdProdutos * preco;

	printf("A quantidade escolhida foi:\n%d\nO preço cobrado por produto foi:\nR$%.2f\nO  valor a ser pago é:\nR$%.2f\n", qtdProdutos, preco, valorFinal);*/

	/*Faça  um  algoritmo  em C  que  simula  uma  calculadora  com  as seguintes  operações:  somar, subtrair, multiplicar, dividir, potência ao quadrado e resto da divisão. O algoritmo deve mostrar as  opções  de  operações  para  o usuárioe  em  seguida  solicitar  os  valores  quee  a  opção  do usuário. Por fimdeve mostrar o resultado.*/

	/*int operacao, a, b, result;
	

	printf("Escolha uma das seguintes operações: 1-Somar; 2-Subtrair; 3-Multiplicar; 4-Dividir; 5-Potência; 6-Resto da divisão: \n");
	scanf("%d",&operacao);

	switch(operacao){
		case 1:
			printf("Digite um valor\n");
			scanf("%d", &a);
			printf("Digite outro valor\n");
			scanf("%d", &b);
			result = a + b;
			printf("A operação escolhida foi soma e o resultado é:\n%d\n", result);
			break;
		case 2:
			printf("Digite um valor\n");
			scanf("%d", &a);
			printf("Digite outro valor\n");
			scanf("%d", &b);
			result = a - b;
			printf("A operação escolhida foi subtração e o resultado é:\n%d\n", result);
			break;
		case 3:
			printf("Digite um valor\n");
			scanf("%d", &a);
			printf("Digite outro valor\n");
			scanf("%d", &b);
			result = a * b;
			printf("A operação escolhida foi multipliação e o resultado é:\n%d\n", result);
			break;
		case 4:
			printf("Digite um valor\n");
			scanf("%d", &a);
			printf("Digite outro valor\n");
			scanf("%d", &b);
			result = a / b;
			printf("A operação escolhida foi divisão e o resultado é:\n%d\n", result);
			break;
		case 5:
			printf("Digite um valor\n");
			scanf("%d", &a);
			printf("Digite outro valor\n");
			scanf("%d", &b);
			result = a ** b;
			printf("A operação escolhida foi potenciação e o resultado é:\n%d\n", result);
			break;
		case 6:
			printf("Digite um valor\n");
			scanf("%d", &a);
			printf("Digite outro valor\n");
			scanf("%d", &b);
			result = a % b;
			printf("A operação escolhida foi resto da divisão e o resultado é:\n%d\n", result);
			break;
		default:
			printf("Opção inválida\n");
	}*/

	/*Faça  um  algoritmo  em C que  solicita  um número do  usuário,caso  seja maior ou  igual a 50 verificar se é par ou ímpar. Caso seja menor verificar se é divisível por 3.*/

	/*int num, parImpar, divPor3;

	printf("Digite um número: \n");
	scanf("%d", &num);

	if (num >= 50)
	{
		parImpar = num % 2;
		if (parImpar == 0)
		{
			printf("O número digitado foi %d e é PAR\n", num);
		}else {
			printf("O número digitado foi %d é IMPAR\n", num);
		}
	}else {
		divPor3 = num % 3;
		if (divPor3 == 0)
		{	
			divPor3 = num / 3;
			printf("O número digitado foi %d e é divisível por 3 e o resultado é %d\n", num , divPor3);
		}else {
			divPor3 = num / 3;
			printf("O número digitado foi %d e não é divisível por 3\n", num);
		}
	}*/

	/*int sexo, qtdM = 0, qtdF = 0, qtdSexo;
	float altura, somaAlturaF = 0, somaAlturaM = 0;

	for (int x = 0; x < 10 ; x++){
		printf("Digite sua altura:\n");
		scanf("%f", &altura);

		printf("Digite seu sexo(0=masculino, 1=feminino\n");
		scanf("%d", &sexo);

		if (sexo == 0)
		{
			qtdM = qtdM + 1;
			somaAlturaM = somaAlturaM + altura;
		}else{
			qtdF = qtdF + 1;
			somaAlturaF = somaAlturaF + altura;
		}
	}
	if (qtdM > qtdF)
	{
		printf("Tem mais homens do que mulheres e o total de homens é %d\n", qtdM );
	}else if (qtdF > qtdM){
		printf("Tem mais mulheres do que homens e o total de mulheres é %d\n", qtdF );
	}else {
		printf("EMPATOU\n");
	}
	if (somaAlturaM > somaAlturaF)
	{
		printf("Os homens são maiores que as mulheres e a altura total deles é %.2f\n", somaAlturaM);
	}else if (somaAlturaF > somaAlturaM) {
		printf("As mulheres são maiores que os homens e a altura total delas é %.2f\n", somaAlturaF);
	}else {
		printf("EMPATOU\n");
	}*/

	/*Aula do dia 18-05-21*/

	int op, val_1, val_2, res;

	while(op != 4){
	  printf("Escolha uma opção:\n");
	  printf("1 - Somar:\n");
	  printf("2 - Subtrair:\n");
	  printf("3 - Multiplicar:\n");
	  printf("4 - Sair:\n");
	  scanf("%d", &op);

	switch(op){
	case 1:
	printf("Digite o primeiro valor\n");
	scanf("%d", &val_1);
	printf("Digite o segundo valor\n");
	scanf("%d", &val_2);
	res = val_1+val_2;
	printf("Resultado = %d\n", res);
	break;
	case 2:
	printf("Digite o primeiro valor\n");
	scanf("%d", &val_1);
	printf("Digite o segundo valor\n");
	scanf("%d", &val_2);
	res = val_1-val_2;
	printf("Resultado = %d\n", res);
	break;
	case 3:
	printf("Digite o primeiro valor\n");
	scanf("%d", &val_1);
	printf("Digite o segundo valor\n");
	scanf("%d", &val_2);
	res = val_1*val_2;
	printf("Resultado = %d\n", res);
	break;
	case 4:
	printf("Você está saindo\n");
	break;
	default:
	printf("Opção inválida!!!\n");
	break;
	}
	}

	return 0;
}./