# laravel-profile-picture
package to add users profile picture feature to laravel 5 auth scaffold

## Installation

Step 1 : Laravel 5.2 Auth Scafold

    php artisan make:auth

Step 2 : Install Composer dependency

    composer require abhitheawesomecoder/profilepic

Step 3 : Register the Service Provider

Add Abhitheawesomecoder\Profilepic\ProfilepicServiceProvider::class to providers array in *config/app.php*

run the following command: 'php artisan vendor:publish' you can override the views under the folder: 'views/vendor/abhitheawesomecoder/profilepic' 

Step 4 : Run Migration

    php artisan migrate

## Usage

Go to link http://localhost/laravel/public/profile-picture

where http://localhost/laravel/public/ is path to your laravel website
