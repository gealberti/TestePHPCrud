# Projeto de PHP para Vaga de Desenvolvedor PHP Júnior
 Olá, bem vindo ao projeto.

## Requisitos
Servidor da Web (por exemplo, Apache) com suporte ao PHP.
Banco de dados MySQL (ou outro SGBD compatível, as recomenda-se MySQL).
PHP 7 ou superior (foi utilizado 8).
Composer (opcional, mas recomendado para facilitar o gerenciamento de dependências).
Configuração
Clone ou faça o download deste repositório para o diretório do seu servidor web (recomenda-se VisualStudio Code).

### Configure a conexão com o banco de dados:

Vá para o arquivo config.php na raiz do projeto.
Edite as variáveis de conexão com o banco de dados ($servername, $username, $password e $database) para corresponder às configurações do seu ambiente.

**Importe o banco de dados:**

Na pasta database, você encontrará um arquivo SQL chamado database.sql. Importe este arquivo para o seu SGBD para criar as tabelas necessárias.
Instale as dependências (caso esteja usando Composer):

No diretório raiz do projeto, execute o comando composer install para instalar as dependências do projeto, incluindo o MySQLi.

**Como Rodar**
Após a configuração, inicie o servidor web e o servidor MySQL.

Abra um navegador da web e acesse o projeto, por exemplo, http://localhost/crud.

Você será direcionado para a página inicial, onde poderá escolher entre a gestão de clientes, produtos, pedidos ou itens de pedidos. Cada seção fornece opções para listar, adicionar, visualizar, editar e remover registros.

Clique nas opções de menu para realizar operações CRUD nas entidades desejadas.

### Estrutura de Pastas
app: Contém os arquivos PHP para os controladores, modelos e visualizações de cada entidade (Clientes, Produtos, Pedidos e Itens de Pedidos).

config.php: Arquivo de configuração para a conexão com o banco de dados.

database: Pasta que contém o arquivo SQL para importar as tabelas do banco de dados.

public: Pasta pública para ativos da web (CSS, JavaScript, imagens).

Créditos
Geovanna Alberti.

