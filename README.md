# Aesir (PHP Laravel)

Aesir is a web-based Anime Database Management System that have a purpose to let user manage their anime database. PHP Laravel and published version of the project. Created in order to fulfill own desire.

## Development Tools

1. PHP Laravel
2. XAMPP
3. MariaDB
4. Visual Studio Code

## Run Dev Server

1. Open terminal in your project folder
2. Use below command in the terminal  
   `php artisan serve`
3. Access development server in http://localhost:8000

## Deployment Database Setup

1. Create `aesir` database in your RDMBS
2. Run migration  
   `php artisan migrate`
3. Run seeder  
   `php artisan db:seed`

## Docker Deployment

1. Duplicate `.env.example` to `.env` and fill the values in it
2. Run this command `docker-compose up -d`

## Developer Team

Muhammad Fakhri ([@muhammad-fakhri](https://github.com/muhammad-fakhri))
