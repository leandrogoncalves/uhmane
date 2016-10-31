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

4-Faça a migração das tabelas e crie registros de teste

```sh
$ php artisan migrate
$ php artisan db:seed
```

5-Use o artisan serve para rodar o servidor php builtin

```sh
$ php artisan serve
```

6-Abra o browser e acesse o link http://localhost:8000
