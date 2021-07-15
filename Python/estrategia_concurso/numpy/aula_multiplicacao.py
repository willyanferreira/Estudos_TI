import numpy as np
primeiro = [2, 3, 4]
segundo = [5, 7, 8]
resultado_final = []
#Multiplicação entre arrays do jeito tradicional
for i in range(len(primeiro)):
    resultado = primeiro[i] * segundo[i]
    resultado_final.append(resultado)

print(resultado_final)
#Multiplicação entre arrays usando numpy
num_primeiro = np.array(primeiro)
num_segundo = np.array(segundo)


# print(type(primeiro))
# print(type(num_primeiro))

num_resultado = num_primeiro * num_segundo
print(num_resultado)

