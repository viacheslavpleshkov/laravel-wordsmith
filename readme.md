<p align="center">
    <a href="https://laravel.com/" target="_blank">
        <img src="https://laravel.com/assets/img/components/logo-laravel.svg">
    </a>
    <a href="https://wordsmith.slavapleshkov.com/" target="_blank">
        <img src="https://wordsmith.slavapleshkov.com/images/logo.svg" height="100px">
    </a>
    <h1 align="center">laravel-wordsmith</h1>
    <br>
</p>
<p align="center">The blog was created using the Laravel Framework</p>

## Installation

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your reCAPTCHA credentials in your `.env` file. Specifically `NOCAPTCHA_SITEKEY` and `NOCAPTCHA_SECRET`
1. Set your `APP_URL` in your `.env` file. This is needed for Voyager to correctly resolve asset URLs.
1. `php artisan config:cache`
1. `php artisan db:seed`
1. `npm install`
1. `npm run dev`
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser
