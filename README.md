# api-series
Uma API Rest para cadastro de Series com seus episodios construida em LUMEN

Utilizei sqlite para rodar o banco. Para utilizar em outro banco basta descomentar o arquivo .env com as informações do banco.

No arquivo routes\web.php está disposto as rotas utilizadas no projeto. Elas estão protegidas com o midllewere. Basta tirar o autenticador para deixar todas as rotas livres.

Execute as migrations.

Para se logar na aplicação basta acessar a rota /api/login enviando o email e password ('claudio@mail.com' e 'senha' respectivamente) no corpo da requisição - isso se você usar o sqlite que já está no projeto. Você receberá um token que deve ir no cabeçalho das requisições para as demais rotas.


