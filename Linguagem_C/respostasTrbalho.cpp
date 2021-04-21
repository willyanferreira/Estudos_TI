#include <stdio.h>
#include <locale.h>


int main(void)  
{
	setlocale(LC_ALL,"Portuguese");
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