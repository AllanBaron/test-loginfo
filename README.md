# Porjeto feito como CakePHP Framework

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

Sistema criado com [CakePHP](https://cakephp.org) versão 3.x.

O código fonte do framework pode ser encontrado aqui: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation	

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) ou atualize `composer self-update`.

2. Faça o Download ou clone, executando:

```bash
git clone https://github.com/AllanBaron/test-loginfo.git
```

3. Com o projeto baixado, execute:

```bash
composer install
```

4. Com o projeto baixado, duplique os arquivo `.env.default` para `.env` e `app.default.php` para `app.php`.

5. No arquivo `.env` adicione as informações de DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD para conexão como o banco de dados.

6. Como o Banco de Dados conectado, execute o comando `migration`:

```bash
bin/cake migrations migrate
```

7. Para iniciar alguns exemplos, execute:

```bash
 bin/cake migrations seed
```

8. Para iniciar o servidor, execute:

```bash
bin/cake server
```

Em seguida, visite `http://localhost:8765`.