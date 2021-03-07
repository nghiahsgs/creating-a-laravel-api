# creating-a-laravel-api
creating a laravel api

khoi tao project
composer create-project laravel/laravel example-app

tao model Post va migration cho table do luon
php artisan make:model Post --migration

thuc thi cac migration
php artisan migrate

tao controller cho api luon
php artisan make:controller Api\PostController --api

list tat cac route
php artisan route:list

bonus che do interactive shelll => sieu ngon khi dung python
php artisan tinker