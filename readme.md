<p align="center">
    <a href="https://laravel.com/" target="_blank">
        <img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" height="100px">
    </a>
    <a href="https://sp-laravel-wordsmith.herokuapp.com/" target="_blank">
        <img src="https://sp-laravel-wordsmith.herokuapp.com/images/logo.svg" height="100px" width="300px">
    </a>
    <h1 align="center">laravel-wordsmith</h1>
    <br>
</p>
<p align="center">📢 The blog was created using the Laravel 6.1 Framework</p>

## Used technologies

HTML5, CSS3, SCSS, JavaScript, Vue.js, jQuery, Bootstrap, Font Awesome, Webpack, Yarn, Gravatar, Heroku, Nginx, PHP, Laravel Framework, Laravel Eloquent, Laravel Socialite, Laravel Blade, Laravel Dusk, Laravel Homestead, Laravel Backup, Composer, Redis, Google reCAPTCHA V3, Amazon S3, Algolia, Pusher, PostgreSQL, New Relic, Timber.io Logging, Mailgun, Mailtrap, Vagrant, Docker.

## Installation Dev (Docker)

1. Clone the repo and `cd` into it
1. Run this command `cd laradock`
1. Run this command `cp env-example .env`
1. Run this command `docker-compose up -d nginx postgres phpmyadmin redis workspace `
1. Run this command `docker-compose exec workspace bash`
1. Run this command `cd var/www/`
1. Run this command `composer install`
1. Rename or copy `.env.docker` file to `.env`
1. Set your GitHub app credentials in your `.env` file
1. Set your amazon s3 credentials in your `.env` file
1. Set your reCAPTCHA v3 credentials in your `.env` file
1. Set your algolia credentials in your `.env` file
1. Set your pusher credentials in your `.env` file
1. Run this command `php artisan key:generate`
1. Run this command `php artisan config:cache`1. Run this command `composer install`
1. Run this command `php artisan migration`
1. Run this command `php artisan db:seed`
1. Run this command `yarn install`
1. Run this command `yarn run dev`
1. Visit `laravel-wordsmith.test` in your browser

## Installation Dev (Vagrant)

1. Clone the repo and `cd` into it
1. Run this command `vagrant box add laravel/homestead`
1. Run this command `composer install`
1. Run this command Mac / Linux `php vendor/bin/homestead make` or Windows `vendor\\bin\\homestead make`
1. Rename or copy `.env.homestead` file to `.env`
1. Set your GitHub app credentials in your `.env` file
1. Set your amazon s3 credentials in your `.env` file
1. Set your reCAPTCHA v3 credentials in your `.env` file
1. Set your algolia credentials in your `.env` file
1. Set your pusher credentials in your `.env` file
1. Run this command `php artisan key:generate`
1. Run this command `php artisan config:cache`
1. Run this command `vagrant up`
1. Run this command `vagrant ssh`
1. Run this command `cd home/vagrant/code/`
1. Run this command `php artisan migration`
1. Run this command `php artisan db:seed`
1. Run this command `yarn install`
1. Run this command `yarn run dev`
1. Visit `laravel-wordsmith.test` in your browser

## Installation Dev

1. Clone the repo and `cd` into it
1. Create users and table in PostgreSQL
1. Run this command `composer install`
1. Rename or copy `.env.example` file to `.env`
1. Run this command `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your redis credentials in your `.env` file
1. Set your mail credentials in your `.env` 
1. Set your algolia credentials in your `.env` file
1. Set your pusher credentials in your `.env` file
1. Set your reCAPTCHA v3 credentials in your `.env` file
1. Set your amazon s3 credentials in your `.env` file
1. Set your GitHub app credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_DEBUG` in your `.env` file with the value `true`
1. Set your `TELESCOPE_ENABLED` in your `.env` file with the value `true`
1. Run this command `php artisan config:cache`
1. Run this command `php artisan db:seed`
1. Run this command `php artisan scout:import "App\Models\Article"`
1. Run this command `yarn install`
1. Run this command `yarn run dev`
1. Run this command `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser

## Installation Production

1. Clone the repo and `cd` into it
1. Create users and table in PostgreSQL
1. Configure Nginx with these settings `nginx.conf`
1. Run this command `composer install`
1. Rename or copy `.env.example` file to `.env`
1. Run this command `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your redis credentials in your `.env` file
1. Set your mail credentials in your `.env` file
1. Set your algolia credentials in your `.env` file
1. Set your pusher credentials in your `.env` file
1. Set your reCAPTCHA v3 credentials in your `.env` file
1. Set your amazon s3 credentials in your `.env` file
1. Set your GitHub app credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_DEBUG` in your `.env` file with the value `false`
1. Set your `TELESCOPE_ENABLED` in your `.env` file with the value `false`
1. Run this command `php artisan config:cache`
1. Run this command `php artisan db:seed`
1. Run this command `php artisan scout:import "App\Models\Article"`
1. Run this command `yarn install`
1. Run this command `yarn run production`

## Deploying to Heroku

1. Clone the repo and `cd` into it
1. Run this command `heroku create`
1. Run this command `heroku buildpacks:set heroku/php`
1. Run this command `heroku buildpacks:set heroku/nodejs`
1. Run this command `heroku addons:create heroku-postgresql:hobby-dev`
1. Run this command `heroku addons:create heroku-redis:hobby-dev`
1. Run this command `heroku addons:create scheduler:standard`
1. Run this command `heroku addons:create algoliasearch:free`
1. Run this command `heroku addons:create pusher:free`
1. Run this command `heroku addons:create timber-logging:free`
1. Run this command `heroku addons:create newrelic:free`
1. Run this command `heroku addons:create cloudcube:free`
1. Run this command `heroku addons:create mailtrap:free`
1. Run this command `heroku addons:create mailgun:free`
1. Run this command `heroku config:set APP_NAME=Wordsmith`
1. Run this command `heroku config:set APP_ENV=production`
1. Run this command `heroku config:set APP_KEY=secret`
1. Run this command `heroku config:set APP_DEBUG=secret`
1. Run this command `heroku config:set TELESCOPE_ENABLED=secret`
1. Run this command `heroku config:set APP_URL=secret`
1. Run this command `heroku config:set LOG_CHANNEL=errorlog`
1. Run this command `heroku config:set DB_CONNECTION=pgsql`
1. Run this command `heroku config:set CAPTCHA_HOSTNAME=secret`
1. Run this command `heroku config:set MIX_CAPTCHA_SITE_KEY=secret`
1. Run this command `heroku config:set MIX_CAPTCHA_SECRET_KEY=secret`
1. Run this command `heroku config:set ALGOLIA_APP_ID=secret`
1. Run this command `heroku config:set ALGOLIA_SECRET=secret`
1. Run this command `heroku config:set MIX_ALGOLIA_APP_ID=secret`
1. Run this command `heroku config:set MIX_ALGOLIA_SECRET=secret`
1. Run this command `heroku config:set PUSHER_APP_ID=secret`
1. Run this command `heroku config:set PUSHER_APP_KEY=secret`
1. Run this command `heroku config:set PUSHER_APP_SECRET=secret`
1. Run this command `heroku config:set PUSHER_APP_CLUSTER=secret`
1. Run this command `heroku config:set MIX_PUSHER_APP_KEY=secret`
1. Run this command `heroku config:set MIX_PUSHER_APP_CLUSTER=secret`
1. Run this command `heroku config:set BROADCAST_DRIVER=pusher`
1. Run this command `heroku config:set CACHE_DRIVER=redis`
1. Run this command `heroku config:set SESSION_DRIVER=redis`
1. Run this command `heroku config:set SESSION_LIFETIME=120`
1. Run this command `heroku config:set QUEUE_DRIVER=redis`
1. Run this command `heroku config:set GITHUB_CLIENT_ID=secret`
1. Run this command `heroku config:set GITHUB_CLIENT_SECRET=secret`
1. Run this command `heroku config:set GITHUB_CLIENT_URL=secret`
1. Run this command `heroku config:set FILESYSTEM_DRIVER=s3`
1. Run this command `heroku config:set AWS_ACCESS_KEY_ID=secret`
1. Run this command `heroku config:set AWS_SECRET_ACCESS_KEY=secret`
1. Run this command `heroku config:set AWS_DEFAULT_REGION=secret`
1. Run this command `heroku config:set AWS_BUCKET=secret`
1. Run this command `heroku config:set AWS_URL=secret`
1. Run this command `heroku config:set URL_FILE=secret`
1. Run this command `heroku config:set MIX_URL_FILE=secret`
1. Run this command `heroku config:set MAIL_DRIVER=mailgun`
1. Run this command `heroku config:set MAILGUN_DOMAIN=secret`
1. Run this command `heroku config:set MAILGUN_SECRET=secret`
1. Run this command `heroku config:set MAILGUN_ENDPOINT=secret`
1. Run this command `heroku config:set MAIL_FROM_ADDRESS=secret`
1. Run this command `heroku config:set MAIL_FROM_NAME=Wordsmith Site`
1. Run this command `heroku config:set MAILGUN_DOMAIN=Wordsmith Site`
1. Run this command `heroku config:set MAILGUN_SECRET=Wordsmith Site`
1. Run this command `git push heroku master`
1. Run this command `heroku open`

or

[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

## Database schema

 <img src="https://github.com/slava-pleshkov/laravel-wordsmith/blob/master/public/github/db-schema.png?raw=true">

## Directory Structure
```
├── after.sh
├── aliases
├── app
│   ├── Console
│   │   └── Kernel.php
│   ├── Events
│   │   └── CommentSent.php
│   ├── Exceptions
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── AbstractController.php
│   │   │   ├── Admin
│   │   │   │   ├── AdminController.php
│   │   │   │   ├── ArticleController.php
│   │   │   │   ├── BaseController.php
│   │   │   │   ├── CategoryController.php
│   │   │   │   ├── CommentsController.php
│   │   │   │   ├── PageController.php
│   │   │   │   ├── RoleController.php
│   │   │   │   ├── SeoController.php
│   │   │   │   ├── SettingController.php
│   │   │   │   ├── SociallinkController.php
│   │   │   │   ├── SubscribeController.php
│   │   │   │   └── UserController.php
│   │   │   ├── Api
│   │   │   │   └── v1
│   │   │   │       ├── ArticleController.php
│   │   │   │       ├── BaseController.php
│   │   │   │       ├── CategoryController.php
│   │   │   │       └── CommentController.php
│   │   │   ├── Auth
│   │   │   │   ├── BaseController.php
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   │   └── VerificationController.php
│   │   │   └── Site
│   │   │       ├── ArticleController.php
│   │   │       ├── BaseController.php
│   │   │       ├── CategoryController.php
│   │   │       ├── CommentsController.php
│   │   │       ├── ProfileController.php
│   │   │       ├── SiteController.php
│   │   │       ├── SitemapController.php
│   │   │       └── SubscribeController.php
│   │   ├── Kernel.php
│   │   ├── Middleware
│   │   │   ├── Authenticate.php
│   │   │   ├── CheckForMaintenanceMode.php
│   │   │   ├── CheckRole.php
│   │   │   ├── EncryptCookies.php
│   │   │   ├── RedirectIfAuthenticated.php
│   │   │   ├── TrimStrings.php
│   │   │   ├── TrustProxies.php
│   │   │   └── VerifyCsrfToken.php
│   │   └── Requests
│   │       ├── AbstractRequest.php
│   │       ├── Admin
│   │       │   ├── ArticleStoreRequest.php
│   │       │   ├── ArticleUpdateRequest.php
│   │       │   ├── CategoryStoreRequest.php
│   │       │   ├── CategoryUpdateRequest.php
│   │       │   ├── CommentStoreRequest.php
│   │       │   ├── CommentUpdateRequest.php
│   │       │   ├── PageUpdateRequest.php
│   │       │   ├── RoleUpdateRequest.php
│   │       │   ├── SeoStoreRequest.php
│   │       │   ├── SeoUpdateRequest.php
│   │       │   ├── SettingUpdateRequest.php
│   │       │   ├── SociallinkStoreRequest.php
│   │       │   ├── SociallinkUpdateRequest.php
│   │       │   ├── SubscribeStoreRequest.php
│   │       │   ├── SubscribeUpdateRequest.php
│   │       │   ├── UserStoreRequest.php
│   │       │   └── UserUpdateRequest.php
│   │       └── Site
│   │           ├── CommentRequest.php
│   │           ├── ContactRequest.php
│   │           ├── ProfileEditRequest.php
│   │           ├── ProfilePasswordRequest.php
│   │           ├── SearchRequest.php
│   │           └── SubscribeRequest.php
│   ├── Mail
│   │   └── MailShipped.php
│   ├── Models
│   │   ├── Article.php
│   │   ├── Category.php
│   │   ├── Comment.php
│   │   ├── Page.php
│   │   ├── Role.php
│   │   ├── Seo.php
│   │   ├── Setting.php
│   │   ├── Sociallink.php
│   │   ├── Subscribe.php
│   │   └── User.php
│   ├── Observers
│   │   ├── ArticleObserver.php
│   │   ├── CategoryObserver.php
│   │   ├── CommentObserver.php
│   │   ├── PageObserver.php
│   │   ├── RoleObserver.php
│   │   ├── SeoObserver.php
│   │   ├── SettingObserver.php
│   │   ├── SociallinkObserver.php
│   │   ├── SubscribeObserver.php
│   │   └── UserObserver.php
│   ├── Providers
│   │   ├── AppServiceProvider.php
│   │   ├── AuthServiceProvider.php
│   │   ├── BroadcastServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   ├── RouteServiceProvider.php
│   │   └── TelescopeServiceProvider.php
│   └── Repositories
│       ├── ArticleRepository.php
│       ├── CacheRepository.php
│       ├── CategoryRepository.php
│       ├── CommentRepository.php
│       ├── PageRepository.php
│       ├── RepositoryInterface.php
│       ├── RoleRepository.php
│       ├── SeoRepository.php
│       ├── SettingRepository.php
│       ├── SociallinkRepository.php
│       ├── SubscribeRepository.php
│       └── UserRepository.php
├── app.json
├── artisan
├── bootstrap
│   ├── app.php
│   └── cache
│       ├── config.php
│       ├── packages.php
│       └── services.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── hashing.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── scout.php
│   ├── services.php
│   ├── session.php
│   ├── telescope.php
│   └── view.php
├── database
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 2018_06_24_172602_create_roles_table.php
│   │   ├── 2018_06_24_172603_create_users_table.php
│   │   ├── 2018_06_24_172604_create_password_resets_table.php
│   │   ├── 2018_06_24_172605_create_seos_table.php
│   │   ├── 2018_06_24_172606_create_settings_table.php
│   │   ├── 2018_08_19_120114_create_subscribes_table.php
│   │   ├── 2018_09_07_092849_create_categories_table.php
│   │   ├── 2018_09_11_143425_create_sociallinks_table.php
│   │   ├── 2018_09_22_102802_create_articles_table.php
│   │   ├── 2018_09_23_130248_create_comments_table.php
│   │   ├── 2018_09_24_184220_create_pages_table.php
│   │   ├── 2019_01_24_153837_create_sessions_table.php
│   │   └── 2019_03_30_142204_create_cache_table.php
│   └── seeds
│       ├── ArticlesTableSeeder.php
│       ├── CategoriesTableSeeder.php
│       ├── CommentsTableSeeder.php
│       ├── DatabaseSeeder.php
│       ├── PagesTableSeeder.php
│       ├── RolesTableSeeder.php
│       ├── SeoTableSeeder.php
│       ├── SettingsTableSeeder.php
│       ├── SociallinkTableSeeder.php
│       └── UsersTableSeeder.php
├── LICENSE.md
├── nginx.conf
├── nginx.heroku.conf
├── package.json
├── phpunit.xml
├── Procfile
├── public
│   ├── css
│   │   ├── admin.css
│   │   ├── app.css
│   │   ├── auth.css
│   │   ├── base.css
│   │   ├── error.css
│   │   ├── font-awesome
│   │   │   ├── css
│   │   │   │   ├── fa-brands.css
│   │   │   │   ├── fa-brands.min.css
│   │   │   │   ├── fa-regular.css
│   │   │   │   ├── fa-regular.min.css
│   │   │   │   ├── fa-solid.css
│   │   │   │   ├── fa-solid.min.css
│   │   │   │   ├── fontawesome-all.css
│   │   │   │   ├── fontawesome-all.min.css
│   │   │   │   ├── fontawesome.css
│   │   │   │   └── fontawesome.min.css
│   │   │   └── webfonts
│   │   │       ├── fa-brands-400.eot
│   │   │       ├── fa-brands-400.svg
│   │   │       ├── fa-brands-400.ttf
│   │   │       ├── fa-brands-400.woff
│   │   │       ├── fa-brands-400.woff2
│   │   │       ├── fa-regular-400.eot
│   │   │       ├── fa-regular-400.svg
│   │   │       ├── fa-regular-400.ttf
│   │   │       ├── fa-regular-400.woff
│   │   │       ├── fa-regular-400.woff2
│   │   │       ├── fa-solid-900.eot
│   │   │       ├── fa-solid-900.svg
│   │   │       ├── fa-solid-900.ttf
│   │   │       ├── fa-solid-900.woff
│   │   │       └── fa-solid-900.woff2
│   │   ├── main.css
│   │   ├── site.css
│   │   └── vendor.css
│   ├── favicon.ico
│   ├── fonts
│   │   ├── kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWx8QDP2V.woff2
│   │   ├── kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWxEQDA.woff2
│   │   ├── kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY3KcA.woff2
│   │   ├── kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY5KcCsww.woff2
│   │   ├── kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNXaxMICA.woff2
│   │   ├── kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNZaxM.woff2
│   │   ├── pe01MImSLYBIv1o4X1M8cce4G2JvY10IUql-.woff2
│   │   ├── pe01MImSLYBIv1o4X1M8cce4G2JvY1MIUg.woff2
│   │   ├── pe01MImSLYBIv1o4X1M8cce4G2JvY1wIUql-.woff2
│   │   ├── pe01MImSLYBIv1o4X1M8cce4GwZuY10IUql-.woff2
│   │   ├── pe01MImSLYBIv1o4X1M8cce4GwZuY1MIUg.woff2
│   │   ├── pe01MImSLYBIv1o4X1M8cce4GwZuY1wIUql-.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8aBc5iU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8aBc5jU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8GBs5iU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8GBs5jU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8GBs5tU1E.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8WAc5iU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8WAc5jU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc8WAc5tU1E.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc9iB85iU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc9iB85jU1EQVg.woff2
│   │   ├── pe03MImSLYBIv1o4X1M8cc9iB85tU1E.woff2
│   │   ├── pe0oMImSLYBIv1o4X1M8cce4E9dKdmwp.woff2
│   │   ├── pe0oMImSLYBIv1o4X1M8cce4E9lKdg.woff2
│   │   ├── pe0oMImSLYBIv1o4X1M8cce4E9ZKdmwp.woff2
│   │   ├── pe0qMImSLYBIv1o4X1M8cce9I9s.woff2
│   │   ├── pe0qMImSLYBIv1o4X1M8cceyI9tScg.woff2
│   │   ├── pe0qMImSLYBIv1o4X1M8ccezI9tScg.woff2
│   │   └── vendor
│   │       └── @fortawesome
│   │           ├── fontawesome-free-webwebfa-brands-400.eot
│   │           ├── fontawesome-free-webwebfa-brands-400.svg
│   │           ├── fontawesome-free-webwebfa-brands-400.ttf
│   │           ├── fontawesome-free-webwebfa-brands-400.woff
│   │           ├── fontawesome-free-webwebfa-brands-400.woff2
│   │           ├── fontawesome-free-webwebfa-regular-400.eot
│   │           ├── fontawesome-free-webwebfa-regular-400.svg
│   │           ├── fontawesome-free-webwebfa-regular-400.ttf
│   │           ├── fontawesome-free-webwebfa-regular-400.woff
│   │           ├── fontawesome-free-webwebfa-regular-400.woff2
│   │           ├── fontawesome-free-webwebfa-solid-900.eot
│   │           ├── fontawesome-free-webwebfa-solid-900.svg
│   │           ├── fontawesome-free-webwebfa-solid-900.ttf
│   │           ├── fontawesome-free-webwebfa-solid-900.woff
│   │           └── fontawesome-free-webwebfa-solid-900.woff2
│   ├── github
│   │   └── db-schema.png
│   ├── images
│   │   ├── avatars
│   │   │   └── user.jpg
│   │   ├── icon-arrow-left.svg
│   │   ├── icon-arrow-right.svg
│   │   ├── icon-arrow-up.svg
│   │   ├── icon-location@2x.png
│   │   ├── icon-location.png
│   │   ├── icon-mail.svg
│   │   ├── icon-minus.svg
│   │   ├── icon-plus.svg
│   │   ├── icons
│   │   │   ├── icon-arrow-left.svg
│   │   │   ├── icon-arrow-right.svg
│   │   │   ├── icon-arrow-up.svg
│   │   │   ├── icon-mail.svg
│   │   │   ├── icon-minus.svg
│   │   │   ├── icon-plus.svg
│   │   │   └── icon-search.svg
│   │   ├── icon-search.svg
│   │   ├── logo.png
│   │   ├── logo.svg
│   │   ├── sample-image.jpg
│   │   ├── thumbs
│   │   │   ├── about
│   │   │   │   ├── about-1000.jpg
│   │   │   │   ├── about-2000.jpg
│   │   │   │   └── about-500.jpg
│   │   │   ├── contact
│   │   │   │   ├── contact-1000.jpg
│   │   │   │   ├── contact-2000.jpg
│   │   │   │   └── contact-500.jpg
│   │   │   ├── featured
│   │   │   │   ├── featured-beetle.jpg
│   │   │   │   ├── featured-guitarman.jpg
│   │   │   │   └── featured-watch.jpg
│   │   │   ├── post
│   │   │   │   ├── avian-400.jpg
│   │   │   │   ├── avian-800.jpg
│   │   │   │   ├── beetle-400.jpg
│   │   │   │   ├── beetle-800.jpg
│   │   │   │   ├── flowers-400.jpg
│   │   │   │   ├── flowers-800.jpg
│   │   │   │   ├── fuji-400.jpg
│   │   │   │   ├── fuji-800.jpg
│   │   │   │   ├── guitarist-400.jpg
│   │   │   │   ├── guitarist-800.jpg
│   │   │   │   ├── jump-400.jpg
│   │   │   │   ├── jump-800.jpg
│   │   │   │   ├── lamp-400.jpg
│   │   │   │   ├── lamp-800.jpg
│   │   │   │   ├── music-400.jpg
│   │   │   │   ├── music-800.jpg
│   │   │   │   ├── shutterbug-400.jpg
│   │   │   │   ├── shutterbug-800.jpg
│   │   │   │   ├── sydney-400.jpg
│   │   │   │   ├── sydney-800.jpg
│   │   │   │   ├── tulips-400.jpg
│   │   │   │   ├── tulips-800.jpg
│   │   │   │   ├── watch-400.jpg
│   │   │   │   ├── watch-800.jpg
│   │   │   │   ├── wheel-400.jpg
│   │   │   │   ├── wheel-800.jpg
│   │   │   │   ├── woodcraft-400.jpg
│   │   │   │   └── woodcraft-800.jpg
│   │   │   ├── single
│   │   │   │   └── standard
│   │   │   │       ├── standard-1000.jpg
│   │   │   │       ├── standard-2000.jpg
│   │   │   │       └── standard-500.jpg
│   │   │   └── small
│   │   │       ├── beetle-150.jpg
│   │   │       ├── cookies-150.jpg
│   │   │       ├── salad-150.jpg
│   │   │       ├── shutterbug-150.jpg
│   │   │       ├── tulips-150.jpg
│   │   │       └── wheel-150.jpg
│   │   ├── wheel-1000.jpg
│   │   ├── wheel-2000.jpg
│   │   └── wheel-500.jpg
│   ├── index.php
│   ├── js
│   │   ├── admin.js
│   │   ├── app.js
│   │   ├── auth.js
│   │   ├── error.js
│   │   ├── main.js
│   │   ├── modernizr.js
│   │   ├── plugins.js
│   │   └── site.js
│   ├── mix-manifest.json
│   ├── robots.txt
│   ├── uploads
│   │   └── posts
│   │       └── dwdw.jpg
│   ├── vendor
│   │   └── telescope
│   │       ├── app.css
│   │       ├── app-dark.css
│   │       ├── app.js
│   │       ├── favicon.ico
│   │       └── mix-manifest.json
│   └── web.config
├── readme.md
├── resources
│   ├── fonts
│   │   ├── librebaskerville
│   │   │   └── v6
│   │   │       ├── kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWx8QDP2V.woff2
│   │   │       ├── kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWxEQDA.woff2
│   │   │       ├── kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY3KcA.woff2
│   │   │       ├── kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY5KcCsww.woff2
│   │   │       ├── kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNXaxMICA.woff2
│   │   │       └── kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNZaxM.woff2
│   │   └── nunitosans
│   │       └── v4
│   │           ├── pe01MImSLYBIv1o4X1M8cce4G2JvY10IUql-.woff2
│   │           ├── pe01MImSLYBIv1o4X1M8cce4G2JvY1MIUg.woff2
│   │           ├── pe01MImSLYBIv1o4X1M8cce4G2JvY1wIUql-.woff2
│   │           ├── pe01MImSLYBIv1o4X1M8cce4GwZuY10IUql-.woff2
│   │           ├── pe01MImSLYBIv1o4X1M8cce4GwZuY1MIUg.woff2
│   │           ├── pe01MImSLYBIv1o4X1M8cce4GwZuY1wIUql-.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8aBc5iU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8aBc5jU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8GBs5iU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8GBs5jU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8GBs5tU1E.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8WAc5iU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8WAc5jU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8WAc5tU1E (1).woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc8WAc5tU1E.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc9iB85iU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc9iB85jU1EQVg.woff2
│   │           ├── pe03MImSLYBIv1o4X1M8cc9iB85tU1E.woff2
│   │           ├── pe0oMImSLYBIv1o4X1M8cce4E9dKdmwp.woff2
│   │           ├── pe0oMImSLYBIv1o4X1M8cce4E9lKdg.woff2
│   │           ├── pe0oMImSLYBIv1o4X1M8cce4E9ZKdmwp.woff2
│   │           ├── pe0qMImSLYBIv1o4X1M8cce9I9s.woff2
│   │           ├── pe0qMImSLYBIv1o4X1M8cceyI9tScg.woff2
│   │           └── pe0qMImSLYBIv1o4X1M8ccezI9tScg.woff2
│   ├── images
│   │   ├── icon-location@2x.png
│   │   ├── icon-location.png
│   │   ├── icons
│   │   │   ├── icon-arrow-left.svg
│   │   │   ├── icon-arrow-right.svg
│   │   │   ├── icon-arrow-up.svg
│   │   │   ├── icon-mail.svg
│   │   │   ├── icon-minus.svg
│   │   │   ├── icon-plus.svg
│   │   │   └── icon-search.svg
│   │   ├── logo.svg
│   │   ├── sample-image.jpg
│   │   ├── wheel-1000.jpg
│   │   ├── wheel-2000.jpg
│   │   └── wheel-500.jpg
│   ├── js
│   │   ├── admin.js
│   │   ├── auth.js
│   │   ├── bootstrap.js
│   │   ├── components
│   │   │   ├── Articles.vue
│   │   │   ├── Categories.vue
│   │   │   ├── Comments-List.vue
│   │   │   ├── Comments.vue
│   │   │   ├── Pagination.vue
│   │   │   └── SearchComponent.vue
│   │   ├── error.js
│   │   └── site.js
│   ├── lang
│   │   └── en
│   │       ├── admin.php
│   │       ├── auth.php
│   │       ├── errors.php
│   │       ├── pagination.php
│   │       ├── passwords.php
│   │       ├── site.php
│   │       └── validation.php
│   ├── sass
│   │   ├── admin.scss
│   │   ├── app.scss
│   │   ├── auth.scss
│   │   ├── base.css
│   │   ├── error.scss
│   │   ├── fonts.scss
│   │   ├── main.css
│   │   ├── site.scss
│   │   ├── _variables.scss
│   │   └── vendor.css
│   └── views
│       ├── admin
│       │   ├── articles
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   ├── categories
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   ├── comments
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   ├── home
│       │   │   └── index.blade.php
│       │   ├── includes
│       │   │   ├── error.blade.php
│       │   │   ├── nav.blade.php
│       │   │   ├── success.blade.php
│       │   │   └── title.blade.php
│       │   ├── layouts
│       │   │   └── main.blade.php
│       │   ├── pages
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   ├── roles
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   ├── seo
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   ├── settings
│       │   │   └── index.blade.php
│       │   ├── social-link
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   ├── subscribes
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   └── users
│       │       ├── create.blade.php
│       │       ├── edit.blade.php
│       │       ├── index.blade.php
│       │       └── show.blade.php
│       ├── auth
│       │   ├── includes
│       │   │   └── success.blade.php
│       │   ├── login.blade.php
│       │   ├── passwords
│       │   │   ├── email.blade.php
│       │   │   └── reset.blade.php
│       │   └── register.blade.php
│       ├── emails
│       │   └── mail
│       │       └── shipped.blade.php
│       ├── errors
│       │   ├── 401.blade.php
│       │   ├── 403.blade.php
│       │   ├── 404.blade.php
│       │   ├── 500.blade.php
│       │   └── layouts
│       │       └── error.blade.php
│       └── site
│           ├── articles
│           │   ├── index.blade.php
│           │   └── view.blade.php
│           ├── categories
│           │   └── view.blade.php
│           ├── includes
│           │   ├── error.blade.php
│           │   ├── featured.blade.php
│           │   ├── footer.blade.php
│           │   ├── footer-slide.blade.php
│           │   ├── header.blade.php
│           │   └── success.blade.php
│           ├── layouts
│           │   └── main.blade.php
│           ├── pages
│           │   ├── about.blade.php
│           │   ├── algolia.blade.php
│           │   ├── contact.blade.php
│           │   ├── index.blade.php
│           │   └── privacy-policy.blade.php
│           ├── profile
│           │   ├── edit.blade.php
│           │   ├── index.blade.php
│           │   └── password.blade.php
│           └── sitemap
│               ├── articles.blade.php
│               ├── categories.blade.php
│               ├── index.blade.php
│               └── pages.blade.php
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── server.php
├── storage
│   ├── app
│   │   └── public
│   ├── framework
│   │   ├── cache
│   │   ├── sessions
│   │   ├── testing
│   │   └── views
│   └── logs
├── tests
│   ├── Browser
│   │   ├── console
│   │   ├── ExampleTest.php
│   │   ├── Pages
│   │   │   ├── HomePage.php
│   │   │   └── Page.php
│   │   └── screenshots
│   ├── CreatesApplication.php
│   ├── DuskTestCase.php
│   ├── Feature
│   │   └── ExampleTest.php
│   ├── TestCase.php
│   └── Unit
│       └── ExampleTest.php
├── Vagrantfile
├── webpack.mix.js
└── yarn.lock
```

## License

Collision is an open-sourced software licensed under the [MIT license](LICENSE.md).
