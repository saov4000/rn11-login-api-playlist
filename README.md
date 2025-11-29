Sistema de login – api laravel

composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

criar a tabela user
php artisan migrate

criar o controller
php artisan make:controller UserController   ou AuthController

fazer testes no Postman, Insomnia ou ThunderClient
