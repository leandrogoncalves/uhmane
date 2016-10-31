# uhmane
Laravel based project for the company Uhmane. A example of API REST to usage basic CRUD with webservice

## Instalação

1-Clone o projeto em seu pc

```sh
# Clone this repo ...
$ git clone git@github.com:leandrogoncalves/uhmane.git
$ cd uhmane/uhmane_project
```

2-Baixe as dependências

```sh
$ composer update
```

3-Crie um banco de dados no mysql com o nome db_uhmane

```sh
$ mysql -uroot -proot
$mysql>>>> create database db_uhmane;
$mysql>>>> exit;
```

4 - Renomeie o arquivo .env.example da raiz do projeto  para .env

```sh
$ mv .env.example .env
```

5 - Configure a conexão com o banco de dados

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=db_uhmane
DB_USERNAME=root
DB_PASSWORD=root
```

6-Gere a chave de criptografia a aplicacao

```sh
$ php artisan key:generate

7-Faça a migração das tabelas e crie registros de teste

```sh
$ php artisan migrate
$ php artisan db:seed
```

8-Use o artisan serve para rodar o servidor php builtin

```sh
$ php artisan serve
```

9-Abra o browser e acesse o link http://localhost:8000
