# catalog-api

Solution to [challenge](challenge.md).

## Dependencies

Same as [Laravel 5.0](https://laravel.com/docs/5.0/installation#server-requirements):

- [PHP](https://php.net/) 5.4
- [Composer](https://getcomposer.org/) 1.0

## Installation

1. Clone this repository `git clone git@github.com:willystadnick/catalog-api.git`
1. Enter the project folder `cd catalog-api`
1. Install dependencies `composer install`
3. Publish dependencies `php artisan vendor:publish`
1. Copy environment file template `cp .env.example .env`
1. Generate application key `php artisan key:generate`
1. Edit database info on environment file `vi .env`
1. Run database migrations `php artisan migrate`
1. [Optional] Run database seeds `php artisan db:seed`
1. Serve application `php artisan serve`

## Autor

| [<img src="https://avatars2.githubusercontent.com/u/1824706?s=120&v=4" width=120><br><sub>@willystadnick</sub>](https://github.com/willystadnick) |
| :---: |
