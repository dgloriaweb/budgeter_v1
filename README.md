# Budgeter V1
url: http://localhost:8000/mileages

## setup and run on localhost
run laravel: php artisan serve
url: http://localhost:8000/

### install breeze
composer require laravel/breeze --dev
php artisan breeze:install vue

run frontend: npm run serve
url: http://localhost:5173/

App url on localhost: http://localhost:8000/dashboard

### Run migration on a single file
php artisan migrate:refresh --path=database\migrations\2023_02_13_063527_create_mileages_table.php

