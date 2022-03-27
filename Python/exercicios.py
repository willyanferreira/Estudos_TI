"""lendo livro de algoritimos e praticando python 17/03/22"""

# import math
# PI = 3.14
# r = float(input('Digite o valor do raio: \n'))
# a = float(PI * (math.pow(r,2)))
# print("O valor da área é:\n",a)

"""lendo livro de algoritimos e praticando python 18/03/22"""

HT = int(input('Informe quantas horas você trabalhou esse mês:\n'))
VH = float(input('Informe o valor da hora/aula:\n'))
PD = float(input('Informe o percentual de desconto:\n'))
SB = float(HT * VH)
TD = float(PD / 100)
SL = float(SB - (SB * TD))

print('Seu salário bruto é:', SB, 'e seu salário líquido é:',SL)