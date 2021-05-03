#Criando um programa que ler um número real qualquer e mostre sua porção inteira
#import math
# Outra forma de importar a biblíoteca é:
#from math import trunc dessa forma n é preciso usar math.trunc(), basta usar trunc()

"""num = float(input("Digite um número:"))
print("O valor digitado foi {} e sua porção inteira é {}".format(num, trunc(num)))"""

#Outra forma de resolver o mesmo exercício

"""num = float(input("Digite um número:"))
print("O valor digitado foi {} e sua porção inteira é {}".format(num, int(num)))"""

#Exercíco 17
"""Um programa que ler o comprimento do cateto oposto e do cateto adjacente de um triângulo retângulo, 
calcula e mostra o comprimento da hipotenusa"""
"""co = float(input('Comprimento do cateto oposto: '))
ca = float(input('Comprimento do cateto adjacente: '))
hi = hypot(co, ca)
print('A hipotenusa vai medir {:.2f}'.format(hi))"""

"""Exercício 18 - Um programa que ler um ângulo qualquer e mostra na tela o seno, cosseno e tangente desse ângulo

#import math
#Outra forma de fazer
from math import radians, cos, sin, tan
angulo = float(input('Digite o ângulo que você deseja: '))
#seno = math.sin(math.radians(angulo))
seno = sin(radians(angulo))
print('O ângulo de {} tem o seno de {:.2f}'.format(angulo, seno))
#cosseno = math.cos(math.radians(angulo))
cosseno = cos(radians(angulo))
print("O ângulo de {} tem o cosseno de {:.2f}".format(angulo, cosseno))
#tangente = math.tan(math.radians(angulo))
tangente = tan(radians(angulo))
print('O ângulo de {} tem a tangente de {:.2f}'.format(angulo, tangente))"""

"""Exercíco 19 - Sorteando um item em uma lista
import random
n1 = str(input('Primeiro aluno: '))
n2 = str(input('Segundo aluno: '))
n3 = str(input('Terceiro aluno: '))
n4 = str(input('Quarto aluno: '))
lista = [n1, n2, n3, n4]
escolhido = random.choice(lista)
print('O aluno escolhido foi {}'.format(escolhido))"""