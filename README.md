# TrabalhoPHP

## Índice
- [Sobre o Projeto](#sobre-o-projeto)
- [Instalação](#instalação)
- [Problemas](#problemas-reconhecidos)

## Sobre o projeto

TicketMaster é uma plataforma de venda de ingressos dedicada a eventos de e-sports. Desenvolvida em PHP com integração a um banco de dados robusto, a aplicação oferece uma experiência de usuário envolvente, utilizando scripts JavaScript para alto nível de interatividade e uma navegação fluida. O design visual combina técnicas CSS experimentais e inovadoras, visando oferecer uma interface atraente e moderna que se destaca pela usabilidade e pelo estilo dinâmico.

## Instalação
Para testar esse website siga os seguintes passos:

1. Instale um servidor local (XAMPP ou WAMP)

2. Após instalar, inicie o Apache e o MySQL no painel de controle do XAMPP ou WAMP.

3. Acesse o phpMyAdmin no navegador, geralmente acessível em:
    ```bash
   http://localhost/phpmyadmin

4. Crie um novo banco de dados chamado: **trabalhophp**

5. No banco de dados **trabalhophp**, crie uma tabela chamada **login_data** com as seguintes colunas:
    ```bash
    username(VARCHAR, comprimento: 255)
    email(VARCHAR, comprimento: 255)
    passkey(VARCHAR, comprimento: 255)

6. Clone este repositório na pasta htdocs(xampp) ou www(wamp):
   ```bash
   git clone https://github.com/LuigiBMacario/TicketMaster-UNICID-.git

7. Com o servidor local e o banco de dados configurados, você poderá acessar o TicketMaster no navegador em:
    ```bash
   http://localhost/trabalhophp/

## Problemas reconhecidos

1. #### Página de SOBRE não adaptada aos padrões CSS do projeto.

2. #### Valores individuais dos ingressos aparecem incorretamente no arquivo PDF.

3. #### Caso o usuário use o navegador para salvar seu login e senha, a animação dos inputs para de funcionar.

4. #### O Valor das compras continua a aparecer mesmo fora da página principal.

5. #### Ícone de sacola decorativo. Usá-lo te redirecionará a uma página inexistente.

### Limitações do projeto (DEMO)

1. #### Projeto não adaptado a dispositivos móveis.

2. #### Não é possível acrescentar informações sobre o usuário, pois há limitações a cerca do uso do banco de dados.

3. #### Projeto não grava compras passadas do usuário.

4. #### Footer demonstrativo, nenhuma de suas funcionalidades funciona.

5. #### Não é possível alterar os dados inseridos no site de forma nativa. Para alterá-los é necessário alterar diretamente no banco de dados.

6. #### O projeto pode sofrer de problemas de performasse ou adaptação em certos computadores/navegadores. Para a criação desse projeto, foi revisado nos navegadores:
    1. Opera
    2. Edge
    3. Chrome


