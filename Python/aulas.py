#Aula 09 Curso em Vídeo - Manipulando String 03/08/21

frase = 'Python Curso em Vídeo'
tamanho = len(frase)
print(frase.count('o'))
#Fatiando uma string
print(frase[0]) # pega o primeiro valor q estiver no index 0
print(frase[0:6]) #pega os valores que estão na posição 0 até a posição 5 pq n imprime o valor da posição 6 embora esteja sendo usado como parâmetro
print(frase[0:12:2]) #retorna os valores da posição 0 até 12 pulando de 2 em dois - lembrando q ele para d contar na posição 12 mas retorna até o valor da posição 11
"""Omitir o parâmetro de inicio ex: [:1] o programa entende q é p/ começar do zero e parar no 1 e o mesmo para o inverso omitindo o último parâmetro ex: [0:] o programa entende q deve começar do zero e parar no último"""
print(frase[:8])
print(frase[0:])