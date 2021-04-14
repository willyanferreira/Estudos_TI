#include <stdio.h>
#include <locale.h>


int main(void)  
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
	<https://teams.microsoft.com/l/message/19:bb1620727d6845ba99429ec0902a06e9@thread.tacv2/1618358068284?tenantId=da49a844-e2e3-40af-86a6-c3819d704f49&amp;groupId=bd6eb2e2-69f5-4be2-b2a9-79689e6f9340&amp;parentMessageId=1614599117917&amp;teamName=INTRODUÇÃO À PROGRAMAÇÃO ESTRUTURADA EM C (ARA0017/3670399) 3001&amp;channelName=Geral&amp;createdTime=1618358068284>
	*/

	return 0;
}