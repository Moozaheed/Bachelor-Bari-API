# Bachelor Bari

Simple README for the Bachelor Bari Laravel project. Use this file at the repository root and push to Git.

## Overview

Bachelor Bari is a Laravel 11 application with API endpoints, Swagger docs, Docker setup and local development scripts.

## Quickstart (Docker)

1. Build and start services:
   ```sh
   docker-compose up --build -d
   ```
   See [docker-compose.yml](docker-compose.yml) and [docker/php/Dockerfile](docker/php/Dockerfile).

2. App will be served by Nginx on http://localhost:8081 — Nginx config: [nginx/default.conf](nginx/default.conf).

3. To run Composer in container:
   ```sh
   docker-compose run --rm composer
   ```
   Entrypoint: [src/composer.json](src/composer.json) and CLI helper: [src/artisan](src/artisan).

## Local development (no Docker)

- Install PHP deps:
  ```sh
  composer install
  ```
  See [src/composer.json](src/composer.json).

- Install Node deps and run Vite:
  ```sh
  npm install
  npm run dev
  ```
  Configs: [package.json](src/package.json) and [src/vite.config.js](src/vite.config.js).

## Environment

Copy example env:
```sh
cp src/.env.example src/.env
```
Edit values as needed. See [src/.env.example](src/.env.example).

## Database

- Migrate:
  ```sh
  php src/artisan migrate
  ```
  Migrations live in [src/database/migrations](src/database/migrations). Example users migration: [src/database/migrations/0001_01_01_000000_create_users_table.php](src/database/migrations/0001_01_01_000000_create_users_table.php).

- Seed:
  ```sh
  php src/artisan db:seed
  ```
  Seeder: [src/database/seeders/DatabaseSeeder.php](src/database/seeders/DatabaseSeeder.php). Example factory: [src/database/factories/UserFactory.php](src/database/factories/UserFactory.php).

## Running Tests

Run PHPUnit:
```sh
vendor/bin/phpunit --configuration src/phpunit.xml
```
Config: [src/phpunit.xml](src/phpunit.xml).

## API & Swagger

- API controllers are under [src/app/Http/Controllers/Api](src/app/Http/Controllers/Api). Example: [`App\Http\Controllers\Api\AuthController`](src/app/Http/Controllers/Api/AuthController.php).

- Swagger UI is available at `/api/documentation` (route defined in [src/routes/web.php](src/routes/web.php)). Generated spec: [src/storage/api-docs/api-docs.json](src/storage/api-docs/api-docs.json). Config: [src/config/l5-swagger.php](src/config/l5-swagger.php).

## Important Files & Symbols

- Application bootstrap: [src/bootstrap/app.php](src/bootstrap/app.php)
- Service provider: [`App\Providers\AppServiceProvider`](src/app/Providers/AppServiceProvider.php)
- User model: [`App\Models\User`](src/app/Models/User.php)
- Routes: [src/routes/web.php](src/routes/web.php)
- Public entry: [src/public/index.php](src/public/index.php)
- Frontend assets: [src/resources/js/app.js](src/resources/js/app.js) and [src/resources/css/app.css](src/resources/css/app.css)
- README inside src: [src/README.md](src/README.md)

## Logging / Activity

- Activity log package config: [src/config/activitylog.php](src/config/activitylog.php)
- Activity migrations: [src/database/migrations/2025_11_05_092753_create_activity_log_table.php](src/database/migrations/2025_11_05_092753_create_activity_log_table.php)
- Migration that adds `event` column: [src/database/migrations/2025_11_05_092754_add_event_column_to_activity_log_table.php](src/database/migrations/2025_11_05_092754_add_event_column_to_activity_log_table.php)

## Common Commands

- Run artisan:
  ```sh
  php src/artisan <command>
  ```
- Clear caches:
  ```sh
  php src/artisan cache:clear
  php src/artisan config:clear
  php src/artisan route:clear
  php src/artisan view:clear
  ```

## Contributing

Follow CODE OF CONDUCT and guidelines in [src/README.md](src/README.md).

## License

Open source — see license in the project.

---

If you want this README modified (more sections, badges, or templates), tell me which parts to expand.
