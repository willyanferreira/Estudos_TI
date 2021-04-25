#include <iostream>
#include <locale.h>
#include <math.h>

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

	/*int idadeH1, idadeH2, idadeM1, idadeM2, soma, produto;

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
	}*/

	/*Questão 5: Um comerciante comprou um produto e quer vendê-lo com lucro de 45% se o valor da compra for menor que 20,00; caso contrário, o lucro será de 30%. Entrar com o valor do produto e imprimir o valor da venda.*/

	/*float valorCompra, valorVenda, lucro;

	printf("Digite o valor que você comprou o produto\n");
	scanf("%f", &valorCompra);

	if (valorCompra <= 20)
	{
		lucro = valorCompra * 0.45;
		valorVenda = valorCompra + lucro;
		printf("O valor da vendo do produto será de R$%.2f\n", valorVenda);
	}else {
		lucro = valorCompra * 0.3;
		valorVenda = valorCompra + lucro;
		printf("O valor da vendo do produto será de R$%.2f\n", valorVenda);
	}*/

	/*Questão 6: Faça um algoritmo para ler: número da conta do cliente, saldo, débito e crédito. Após, calcular e escrever o saldo atual (saldo atual = saldo - débito + crédito). Também testar se saldo atual for maior ou igual a zero escrever a mensagem 'Saldo Positivo', senão escrever a mensagem 'Saldo Negativo'.*/

	 /*float saldo, debito, credito, saldo_atual;
	 int num_conta;
	   
	   printf("Qual o número da conta?\n");
	   scanf("%d", &num_conta);
	   
	   printf("Qual seu saldo?\n");
	   scanf("%f",&saldo);
	   
	   printf("Qual valor do débito?\n");
	   scanf("%f",&debito);
	   
	   printf("Qual seu crédito?\n");
	   scanf("%f",&credito);
	   
	   saldo_atual = (saldo - debito) + credito;
	   
	  
	   if(saldo_atual>=0){
	   	printf("Seu saldo atual é:\n %.2f \nSituação da conta: \n Saldo Positivo \n", saldo_atual);
	   } else{ 
	   	printf("Seu saldo atual é:\n %.2f \nSituação da conta: \n Saldo Negativo \n", saldo_atual);
	   }*/

	/*Questão 7: Faça um algoritmo para ler: quantidade atual em estoque, quantidade máxima em estoque e quantidade mínima em estoque de um produto. Calcular e escrever a quantidade média ((quantidade média = quantidade máxima + quantidade mínima)/2). Se a quantidade em estoque for maior ou igual a quantidade média escrever a mensagem 'Não efetuar compra', senão escrever a mensagem 'Efetuar compra'. Elaborar um programa que efetue a leitura de valores positivos inteiros até que um valor negativo seja informado. Ao final devem ser apresentados o maior e menor valores informados pelo usuário. */

	/*int estoqueAtual, estoqueMaximo, estoqueMinimo, estoqueMedio;

	printf("Qual a quantida atual em estoque?\n");
	scanf("%d", &estoqueAtual);

	printf("Qual a capacidade máxima do estoque?\n");
	scanf("%d", &estoqueMaximo);

	printf("Qual a capacidade mínima do estoque?\n");
	scanf("%d", &estoqueMinimo);

	estoqueMedio = (estoqueMaximo + estoqueMinimo) / 2;

	if (estoqueAtual >= estoqueMedio)
	{
		printf("Quantidade em estoque:\n%d\nMédia do estoque:\n%d\nEstoque está dentro da média.\nNão efetuar compra.\n",estoqueAtual, estoqueMedio);
	}else {
		printf("\t ***ATENÇÂO!***\nQuantidade em estoque:\n%d\nMédia do estoque:\n%d\nQuantidade em estoque abaixo da média.\nEfetuar compra.\n",estoqueAtual, estoqueMedio);
	}*/

	/* int x,numero=0, maior=0, menor=0;
 	// Tem que inicializar as variaveis maior e menor com zero
 	// Inicializa a variavel numero com zero para entrar no loop while
	 while (numero >= 0)
	 {
	 printf("Informe um valor positivo: ");
	 scanf("%d", &numero);
	 if (numero > 0)
	 // se o numero for positivo
	 if (numero > maior)
	 // se o numero informado for maior que o conteudo atual
	 // da variavel maior, esta variavel recebe o numero informado
	 maior = numero;
	 else
	 // senão a variavel menor recebe o numero informado
	 menor = numero;
	 }
	 printf("O maior é %d e o menor é %d\n", maior, menor);*/

	
		

	return 0;
}