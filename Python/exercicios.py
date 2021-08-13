#Criando um programa que ler um número real qualquer e mostre sua porção inteira
#import math
# Outra forma de importar a biblíoteca é:
#from math import trunc dessa forma n é preciso usar math.trunc(), basta usar trunc()

"""num = float(input("Digite um número:"))
print("O valor digitado foi {} e sua porção inteira é {}".format(num, trunc(num)))"""

#Outra forma de resolver o mesmo exercício
import random

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

"""Exercíco 20 - Sorteando um item em uma lista
n1 = str(input('Primeiro aluno: '))
n2 = str(input('Segundo aluno: '))
n3 = str(input('Terceiro aluno: '))
n4 = str(input('Quarto aluno: '))
lista = [n1, n2, n3, n4]
random.shuffle(lista)
print('A ordem de apresentação será {}'.format(lista))"""

"""Exercício 21 - Tocando um MP3
import pygame
pygame.mixer.init()
pygame.mixer.music.load('musica.mp3')
pygame.mixer.music.play()
pygame.event.wait()"""

"""Exercício 22 - Programa que ler o nome do usuário e retorna em maiúsculo minúsculo, quantos letras tem sem os espaços em branco, quantas tem o primeiro nome"""
# nome = str(input("Digite seu nome: "))
# print("Analisando seu nome...")
# print("Seu nome todo em letras maiúsculas: {}".format(nome.upper()))
# print("Seu nome todo em letras minúsculas: {}".format(nome.lower()))
# print("Seu nome tem ao todo {} letras".format(len(nome) - nome.count(' ')))
# print("Seu primeiro nome tem {} letras".format(nome.find(' ')))

"""Exercício 23 - Separando os dígitos de uma sequência numérica"""
num = int(input("Digite um número: "))
u = num // 1 % 10
d = num // 10 % 10
c = num // 100 % 10
m = num // 1000 % 10
print('Esse número tem {} unidade(s)'.format(u))
print('Esse número tem {} dezena(s)'.format(d))
print('Esse número tem {} centena(s)'.format(c))
print('Esse número tem {} milhar(es)'.format(m))