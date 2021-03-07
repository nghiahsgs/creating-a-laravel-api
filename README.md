# creating-a-laravel-api
creating a laravel api

### 1. Khởi tạo project
composer create-project laravel/laravel example-app

### 2. tao model Post va migration cho table do luon
php artisan make:model Post --migration

### 3. thuc thi cac migration
php artisan migrate

### 4. tao controller cho api luon
php artisan make:controller Api\PostController --api

### 5. list tat cac route
php artisan route:list

### 6. bonus che do interactive shelll => sieu ngon khi dung python
php artisan tinker
