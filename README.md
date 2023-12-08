1. Clone repo and setup .env:
```
$ git clone https://github.com/shepard153/projekt-merito
$ cd projekt-merito
$ touch database/database.sqlite
$ mv .env.example .env
```
2. Fill in .env following values to fit your config, e.g.:
```
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=sqlite
#DB_DATABASE=laravel
```
3. Install dependencies:
```
$ docker compose up -d
$ docker compose run --rm composer install --ignore-platform-reqs
$ npm install
$ npm run build
```
4. Generate app key and seed database:
```
$ docker compose exec app php artisan key:generate
$ docker compose exec app chown -R www-data:www-data storage
$ docker compose exec app php artisan migrate:fresh --seed
$ docker compose exec app php artisan storage:link
```