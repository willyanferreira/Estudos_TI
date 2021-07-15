primeiro = [2, 3, 4]
segundo = [5, 7, 8]
resultado_final = []

for i in range(len(primeiro)):
    resultado = primeiro[i] * segundo[i]
    resultado_final.append(resultado)

print(resultado_final)