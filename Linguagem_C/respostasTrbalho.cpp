#include <stdio.h>
#include <locale.h>


int main(void)  
{
	setlocale(LC_ALL,"Portuguese");

	/*Questão 1: Cálculo de um salário líquido de um professor. Serão fornecidos valor da hora aula, número de aulas dadas e o % de desconto do INSS.*/

	float saLiquido, valor_A_H, descINSS;
	int numAulas;

	printf("Informe o valor da aula/hota: \n");
	scanf("%f", &valor_A_H);

	printf("Informe a quantidade de horas trabalhadas: \n");
	scanf("%d", &numAulas);

	printf("Informe o valor do desconto do INSS(entre 7,5%% à 14%%): \n");
	scanf("%f", &descINSS);



	//printf("O valor da hora aula é: %.2f\n", valor_A_H);
	//printf("O número de horas trabalhadas é: %d\n", numAulas);
	//printf("O valor do desc do INSS é: %0.f%%\n", descINSS);

	return 0;
}