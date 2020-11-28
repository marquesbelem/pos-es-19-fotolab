# Fotolab

## O que é o fotolab?

Fotolab é uma plataforma que tem, como principal objetivo, facilitar o contato entre fotográfo e cliente, dando ferramentas para divulgar, catalogar e contratar serviços de profissionais.


## Instalação do projeto

Siga os passos abaixo para instalar uma versão do fotolab em um ambiente de desenvolvimento local corretamente:


### Banco de dados

Antes de começar a instalar o projeto e suas dependencias, sugiro que comece pela instalação e configuração do banco de dados.

O projeto utiliza o banco de dados mysql 8, então instale-o e:

- Crie um banco de dados novo com o comando:

    `CREATE DATABASE seu_banco`

- Crie um usuário novo para seu projeto com o comando:

    `CREATE USER 'seu_usuario'@'localhost' IDENTIFIED BY 'sua_senha';`

- Depois disso, adicione a permissáo deste usuário para o banco criado:

    `GRANT ALL PRIVILEGES ON seu_banco.* TO 'seu_usuario'@'localhost'`;


Depois disso basta adicionar todas essas informações no seu .env e ele ficará mais ou menos assim:

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Lembre-se de que caso tenha mudado outras configurações como o número da porta ou esteja usando o banco em outro host você terá que adicionar essas informações lá no env também.

### Fotolab

A instalação do fotolab é semelhante a de diversos projetos laravel, tendo que ser executados os comandos do script install.sh, execute o comando com ./install.sh.

Obs.: Usuários do windows devem usar o shell do git para rodar o script de instalação.

Após a conclusão da instalação, execute os comandos abaixo:

```
php artisan migrate:fresh
php artisan db:seed --class=CreateProfileTypes
php artisan db:seed --class=CreateTestUser
```

Estes são os comandos para criar as tabelas, os tipos de perfís e um usuário de teste. Caso tenha configurado tudo corretamente, as migrations serão executadas e o usuário será criado.
Após isso, se tudo estiver certo, basta dar um `php artisan serve` e acessar a página `localhost:8000` no seu navegador.

