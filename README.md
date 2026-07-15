# Laravel Order Management Demo

A production-style Laravel application demonstrating clean code, structured validation, Eloquent models, resource controllers, factories, and feature testing.

This repository is designed as a focused code sample for technical review. It demonstrates Laravel development practices without including proprietary client code or confidential business information.

## Features

* Product management foundation
* Resource controller and route model binding
* Form Request validation
* Unique SKU validation
* Pagination
* Eloquent factories
* Feature tests
* Database migrations
* Mass-assignment protection
* Attribute casting

## Tech Stack

* PHP 8.2+
* Laravel 12
* MySQL or SQLite
* PHPUnit
* Blade

## Installation

Clone the repository:

```bash
git clone https://github.com/mrdnrj88-laravel/laravel-order-management-demo.git
cd laravel-order-management-demo
```

Install PHP dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure the database connection in `.env`, then run:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

## Running Tests

```bash
php artisan test
```

To run only the Product feature tests:

```bash
php artisan test --filter=ProductTest
```

## Project Structure

```text
app/
├── Http/
│   ├── Controllers/
│   └── Requests/
├── Models/
database/
├── factories/
├── migrations/
└── seeders/
resources/
└── views/
routes/
tests/
└── Feature/
```

## Security

No real credentials, API keys, customer information, or proprietary source code are included in this repository.

The `.env` file is excluded from Git. Only `.env.example` is committed as a configuration reference.

## Roadmap

* Complete Product CRUD views
* Order and Order Item entities
* REST API resources
* Authorization policies
* Additional feature tests
* GitHub Actions continuous integration

## Author

Senior PHP/Laravel Developer with more than 10 years of software development experience.

## License

This project is available under the MIT License.
