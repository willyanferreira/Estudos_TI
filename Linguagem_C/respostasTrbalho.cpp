#include <stdio.h>
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

	
	return 0;
}