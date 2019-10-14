#enteros = [1, 20, 54, 33, -15, 7]
#enteros.sort()

#for x in enteros: 
#    print(x)
    



def ordenamiento(lista):
    for x in range(len(lista)-1, 0, -1):
        for i in range(x):
            if lista[i]>lista[i+1]:
                temp = lista[i]
                lista[i] = lista[i+1]
                lista[i+1] = temp
                
enteros = [1, 20, 54, 33, -15, 7]
ordenamiento(enteros)
print(enteros)