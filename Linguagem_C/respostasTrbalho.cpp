#include <iostream>
#include <locale.h>


int main(void)  
{
	setlocale(LC_ALL,"Portuguese");

	/*Questão 1: Cálculo de um salário líquido de um professor. Serão fornecidos valor da hora aula, número de aulas dadas e o % de desconto do INSS.*/

	/*float saLiquido, valor_A_H, descINSS;
	int numAulas;

	printf("Informe o valor da aula/hota: \n");
	scanf("%f", &valor_A_H);

	printf("Informe a quantidade de horas trabalhadas: \n");
	scanf("%d", &numAulas);

	printf("Informe o valor do desconto do INSS(entre 7.5%% à 14%%): \n");
	scanf("%f", &descINSS);

	saLiquido = valor_A_H * numAulas - (((valor_A_H * numAulas) / 100) * descINSS);

	printf("Seu salário é R$c%.2f",saLiquido);*/


	//printf("O valor da hora aula é: %.2f\n", valor_A_H);
	//printf("O número de horas trabalhadas é: %d\n", numAulas);
	//printf("O valor do desc do INSS é: %0.f%%\n", descINSS);

	/*Questão 2: Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês, mais uma comissão também fixa para cada carro vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de carros por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e escreva o salário final do vendedorSolicitar salário, prestação. Se prestação for maior que 20% do salário, imprimir: Empréstimo não pode ser concedido. Senão imprimir Empréstimo pode ser concedido.*/

	/*float salarioFinal, salarioFixo, comissaoFixa, comissaoVendas = 0.05,
	valorVendido, prestacao;
	int qtdCarrosVendidos;

	printf("Digite o seu salário fixo: \n");
	scanf("%f", &salarioFixo);

	printf("Digite a sua comissão fixa: \n");
	scanf("%f", &comissaoFixa);

	printf("Digite a quantidade de carros vendidos: \n");
	scanf("%d", &qtdCarrosVendidos);

	printf("Digite o valor total vendido: \n");
	scanf("%f", &valorVendido);

	salarioFinal = salarioFixo + (comissaoFixa * qtdCarrosVendidos) + (valorVendido * 0.05);

	printf("O valor do seu salário esse mês é: R$%.2f\n", salarioFinal);

	printf("Digite o valor de seu salário: \n");
	scanf("%f", &salarioFixo);

	printf("Digite o valor da prestação desejada: \n");
	scanf("%f", &prestacao);	
	
	if (prestacao>=(salarioFixo*0.2)){
		printf("Empréstimo negado.\n");
	}else {
		printf("Empréstimo liberado\n");
	}*/

	/*Questão 3: Uma empresa quer verificar se um empregado está qualificado para a aposentadoria ou não. Para estar em condições, um dos seguintes requisitos deve ser satisfeito: 
	- Ter no mínimo 65 anos de idade. 
	- Ter trabalhado no mínimo 30 anos. 
	- Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos. 
	Com base nas informações acima, faça um algoritmo que leia: o número do empregado (código), o ano de seu nascimento e o ano de seu ingresso na empresa. O programa deverá escrever a idade e o tempo de trabalho do empregado e a mensagem 'Requerer aposentadoria' ou 'Não requerer'.*/

	/*int matricula, anoNascimento, anoAdmissao, idade, tempoDeServico;

	printf("Informe sua matrícula: \n");
	scanf("%d", &matricula);

	printf("Informe o ano do seu nascimento: \n");
	scanf("%d", &anoNascimento);

	printf("Informe o ano da sua contratação: \n");
	scanf("%d", &anoAdmissao);

	idade = 2021 - anoNascimento;
	tempoDeServico = 2021 - anoAdmissao;

	if (idade >= 65)
	{
		printf("Sua idade é %da e você contribuiu %da-\n Requerer aposentadoria\n", idade, tempoDeServico);
	}else if (tempoDeServico >= 30)
	{
		printf("Sua idade é %da e você contribuiu %da -\n Requerer aposentadoria\n", idade, tempoDeServico);
	}else if (idade >= 60 && tempoDeServico >= 25)
	{
		printf("Sua idade é %da e você contribuiu %da -\n Requerer aposentadoria\n", idade, tempoDeServico);
	}else {
		printf("Sua idade é %da e você contribuiu %da -\n Não requerer aposentadoria\n", idade, tempoDeServico);
	}*/

	/*Questão 4: Escreva um algoritmo que leia as idades de 2 homens e de 2 mulheres (considere que as idades dos homens serão sempre diferentes entre si, bem como as das mulheres). Calcule e escreva a soma das idades do homem mais velho com a mulher mais nova, e o produto das idades do homem mais novo com a mulher mais velha.*/

	int idadeH1, idadeH2, idadeM1, idadeM2, soma, produto;

	printf("Digite a idade do primeiro homem:\n");
	scanf("%d",&idadeH1);

	printf("Digite a idade do segundo homem:\n");
	scanf("%d",&idadeH2);

	printf("Digite a idade da primeira mulher:\n");
	scanf("%d",&idadeM1);

	printf("Digite a idade da segunda mulher:\n");
	scanf("%d",&idadeM2);

	if (idadeH1 > idadeH2 && idadeM1 > idadeM2)
	{
		printf("O primeiro homem é mais velho que o segundo homem e a primeira mulher é mais velha que a segunda mulher, logo...\n");
		soma = idadeH1 + idadeM2;
		produto = idadeH2 * idadeM1;
		printf("...A soma da idade do homem mais velho com a mulher mais nova é: %d\n e o produto da idade do homem mais novo com a mulher mais velha é: %d\n",soma, produto );
	}else if (idadeH1 > idadeH2 && idadeM1 < idadeM2)
	{
		printf("O primeiro homem é mais velho que o segundo homem e a primeira mulher é mais nova que a segunda mulher, logo...\n");
		soma = idadeH1 + idadeM1;
		produto = idadeH2 * idadeM2;
		printf("...A soma da idade do homem mais velho com a mulher mais nova é: %d\n e o produto da idade do homem mais novo com a mulher mais velha é: %d\n",soma, produto );
	}else if (idadeH1 < idadeH2 && idadeM1 > idadeM2)
	{
		printf("O primeiro homem é mais novo que o segundo homem e a primeira mulher é mais velha que a segunda mulher, logo...\n");
		soma = idadeH2 + idadeM2;
		produto = idadeH1 * idadeM1;
		printf("...A soma da idade do homem mais velho com a mulher mais nova é: %d\n e o produto da idade do homem mais novo com a mulher mais velha é: %d\n",soma, produto );
	}else if (idadeH1 < idadeH2 && idadeM1 < idadeM2)
	{
		printf("O primeiro homem é mais novo que o segundo homem e a primeira mulher é mais nova que a segunda mulher, logo...\n");
		soma = idadeH2 + idadeM1;
		produto = idadeH1 * idadeM2;
		printf("...A soma da idade do homem mais velho com a mulher mais nova é: %d\n e o produto da idade do homem mais novo com a mulher mais velha é: %d\n",soma, produto );
	}else {
		printf("Você declarou idades iguais e isso não é permitido!\n");
	}
	return 0;
}