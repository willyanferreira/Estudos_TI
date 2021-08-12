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

#Aula 09 Curso em Vídeo - Manipulando String 12/08/21

frase = "estudando PYTHON 12/08/21"

print(frase[1::2]); #dessa forma o programa entende de onde deve começar e só para no final pq n foi informada a parada e pula de dois em dois
print(len(frase)); 
print(frase.count("n")) # procura por um valor dentro de uma string e retorna quantas vezes foi localizada
print(frase.count("n", 9,25)) # posso indicar onde começar a procurar e onde terminar.
print(frase.find('p')) # retorna a POSIÇÃO em que um valor foi encontrado.
print(frase.find('w')) # quando um valor não é encontrado a função retorna -1
print('python' in frase) # retorna true se o valor for encontrado ou false se não for encontrado
print(frase.title().replace('estudando', 'Willyan está estudando'))
print(frase.upper())
print(frase.lower())
print(frase.capitalize())
print(frase.title())
frase.strip() # retira os espaços em branco antes e depois da string
frase.rstrip() # retira os espaços em branco do lado direito
frase.lstrip() # retira os espaços em branco do lado esquerdo
print(frase.split())
print('-'.join(frase)) # junta a instrig com um '-' ou outro separador que for informado 

