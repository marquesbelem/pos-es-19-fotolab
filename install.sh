#!/bin/bash

cp .env.example .env

# Ocorrera alguns erros caso não sejam dadas as permissões para essas pastas
chmod 777 ./bootstrap ./storage

composer install

php artisan key:generate
php artisan optimize

