print("Bem vindo a AquiLanches!")
client_name = input("Digite o nome do cliente: ")

total_purchase = 0
new_order = True
while new_order:
    print(f"\
Código\tITEM\tPREÇO\n\
01\tHot dog\tR$ 11,20\n\
02\tHamburguer\tR$ 16,60\n\
03\tCheeseburguer\tR$ 22,00\n\
04\tRefrigerante em lata\tR$ 8,00\n\
05\tBatatas fritas\tR$ 32,50\n\
06\tMisto quente\tR$ 13,00\n")

    order = int(input("Escolha o que deseja de acordo com o cõdigo do produto: "))

    if order == 1:
        total_purchase += 11.20
    elif order == 2:
        total_purchase += 16.60
    elif order == 3:
        total_purchase += 22
    elif order == 4:
        total_purchase += 8
    elif order == 5:
        total_purchase += 32
    elif order == 6:
        total_purchase += 13
    else:
        print("Código digitado invalido")

    new_order = input("Deseja adicionar um novo pedido? [S/N]: ").upper() == "S"

print(f"{client_name} gastou R${total_purchase} em suas compras!")