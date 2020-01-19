# Laravel + Vue + Tailwind

## Setup

- `npm install`
- `composer install`
- copy `.env.example` and create your `.env` file
- update your `APP_URL` if not using artisan's dev server
- set an `APP_KEY` with `php artisan key:generate`

## Laravel

This is a Laravel setup straight from the Laravel CLI, `laravel new`. You can run `php artisan -V` to check version. Artisan can handle local dev or you can load spin up your own dev server with something like [Valet](https://laravel.com/docs/6.x/valet).
Some good Laravel links:
- [Laravel 6.x Docs](https://laravel.com/docs/6.x)
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Vue

Vue comes packaged in with Laravel 6.x. Components are globally registered when a `.vue` file is saved to `/resources/js/components`. This is currently an SPA mockup, so I'm importing `vue-router`.

## Tailwind CSS

Tailwind is awesome, so use it. Laravel Mix is wrapping webpack and doing all kinds of magic with your resources files. If you need to edit what Mix is doing that's here: `./webpack.mix.js`. [Mix Docs](https://github.com/JeffreyWay/laravel-mix).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
