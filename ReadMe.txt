// install composer
composer i
composer require "laravelcollective/html ^5.4.0"

composer create-project --prefer-dist laravel/laravel mylibrary "5.5.*"

php artisan make:migration create_books_table --create=books
php artisan make:migration create_authors_table --create=authors
php artisan make:migration create_publishers_table --create=publishers

php artisan make:model Book
php artisan make:model Author
php artisan make:model Publisher
php artisan make:model Home
php artisan make:model Tenant

php artisan make:controller BookController
php artisan make:controller AuthorController
php artisan make:controller PublishersController
php artisan make:controller HomeController
php artisan make:controller TenantController

php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
composer require tymon/jwt-auth 1.0.0-rc.1
php artisan jwt:secret

php artisan make:resource AuthorResource
php artisan make:resource BookResource
php artisan make:resource PublisherResource

php artisan make:resource AuthorCollection
php artisan make:resource PublisherCollection
php artisan make:resource BookCollection
