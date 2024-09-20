import json

import requests

dollars = float(input("Digite a quantidade, em dolares, que deseja converter para reais: "))

symbols = "USD_BRL"
auth = "15413|hJKSXMzlx3B7rkMxrc7U6Yysu2l6Re5K"
endpoint_external_api = f"https://api.invertexto.com/v1/currency/{symbols}?token={auth}"

response = requests.get(endpoint_external_api).text

data_object = json.loads(response)

quote = data_object[f"{symbols}"]["price"]

real_converted = dollars * quote

print(f"US${dollars} equivale a R${round(real_converted, 2)}")

# dollars = float(input("Digite a quantidade, em dolares, que deseja converter para reais: "))
#
# data_to_convert = input("Digite no formato xx-yy-zzzz para selecionar a data que deseja converter para reais: ")
#
# endpoint_external_api = f"https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='{data_to_convert}'&$top=100&$format=json"
#
# response = requests.get(endpoint_external_api).text
#
# data_object = json.loads(response)
#
# purchase_quote = data_object["value"][0]["cotacaoCompra"]
# sales_quote = data_object["value"][0]["cotacaoVenda"]
# date_time_quote = data_object["value"][0]["dataHoraCotacao"]
#
# print(f"Quota de compra do dolar: {purchase_quote}\n\""
# f"Quota de compra do dolar: {sales_quote}\n\
# Data dq quota {date_time_quote}")
