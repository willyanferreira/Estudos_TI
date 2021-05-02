#Criando um programa que ler um número real qualquer e mostre sua porção inteira
import math
# Outra forma de importar a biblíoteca é:
#from math import trunc dessa forma n é preciso usar math.trunc(), basta usar trunc()

"""num = float(input("Digite um número:"))
print("O valor digitado foi {} e sua porção inteira é {}".format(num, trunc(num)))"""

#Outra forma de resolver o mesmo exercício

num = float(input("Digite um número:"))
print("O valor digitado foi {} e sua porção inteira é {}".format(num, int(num)))

