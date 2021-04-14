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

	float imc, altura, peso;

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
	}

	return 0;
}