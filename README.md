# Laravel 5 &amp; Firebase Chatroom Example+video chat


## Requirements
- Laravel 5.6
- Laravel Firebase Sync by [@mpociot](https://github.com/mpociot)

### Installation
- Clone this repository
```
 git clone https://github.com/haythemlp/chat-app.git
```
- Run these commands
```
cd laravel-firebase-chatroom-example
composer install

# create .env file
cp .env.example .env

# migrate database
php artisan key:generate

# Set your database connection in .env file
php artisan migrate
```
- Go to the [Firebase Console](https://console.firebase.google.com) and create a new project
- Open the `config/services.php` file and adjust the details of your firebase project or see the [instructions here](https://github.com/mpociot/laravel-firebase-sync#configuration)
- Done

