Landing Page de Venda de Produtos com Banco de Dados Integrado

Descrição

Este projeto é uma landing page de vendas totalmente funcional com integração de banco de dados para gerenciar produtos, clientes e pedidos. O objetivo é oferecer uma interface amigável para os clientes visualizarem produtos e efetuarem compras, enquanto o sistema lida com o armazenamento e manipulação de dados no banco de dados.

Funcionalidades

Exibição de Produtos: A página exibe os produtos disponíveis para compra com detalhes como nome, preço e descrição.

Carrinho de Compras: Os usuários podem adicionar produtos ao carrinho e proceder para a compra.

Processamento de Pedidos: Uma vez finalizada a compra, os pedidos são registrados no banco de dados.

Gestão de Clientes: O sistema gerencia os dados dos clientes, como nome, e-mail e histórico de compras.

Administração de Produtos: Possibilidade de adicionar, remover e editar produtos no banco de dados por meio de um painel de administrador.


Tecnologias Utilizadas

Front-end:

HTML5, CSS3, JavaScript

Bootstrap para responsividade


Back-end:

PHP (ou Node.js, dependendo da escolha da tecnologia)

MySQL para o banco de dados relacional


Servidor Local:

XAMPP ou WAMP (para ambiente de desenvolvimento local)



Requisitos

PHP 7.4+

MySQL 5.7+

Servidor local (XAMPP, WAMP ou similar)

Navegador moderno


Instalação

1. Clone o repositório:

git clone https://github.com/seu-usuario/seu-repositorio.git


2. Configure o banco de dados:

Crie um banco de dados no MySQL.

Importe o arquivo database.sql que se encontra na pasta /config para criar as tabelas necessárias.

Edite o arquivo db.php na pasta /config para configurar as credenciais de acesso ao banco de dados.



3. Execute o servidor local:

Inicie o XAMPP (ou similar) e certifique-se de que o Apache e MySQL estejam rodando.



4. Abra o projeto no navegador:

http://localhost/seu-projeto/



Uso

1. Visitar a landing page: Acesse a página inicial para visualizar os produtos.


2. Adicionar produtos ao carrinho: Clique em "Adicionar ao carrinho" para incluir produtos.


3. Finalizar compra: Navegue até o carrinho e finalize a compra preenchendo as informações necessárias.


4. Administração: Acesse o painel administrativo para gerenciar os produtos.



Melhorias Futuras

Implementar autenticação de usuários.

Sistema de pagamento integrado (como PayPal ou Stripe).

Filtros e categorias de produtos.


Contribuição

Sinta-se à vontade para contribuir com este projeto. Basta fazer um fork do repositório, criar um branch para sua funcionalidade e submeter um pull request.



