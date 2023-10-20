# An AI exception solution provider for laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/braceyourself/laravel-ai-solutions.svg?style=flat-square)](https://packagist.org/packages/braceyourself/laravel-ai-solutions)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/braceyourself/laravel-ai-solutions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/braceyourself/laravel-ai-solutions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/braceyourself/laravel-ai-solutions/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/braceyourself/laravel-ai-solutions/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/braceyourself/laravel-ai-solutions.svg?style=flat-square)](https://packagist.org/packages/braceyourself/laravel-ai-solutions)

## Installation

You can install the package via composer:

```bash
composer require braceyourself/laravel-ai-solutions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-ai-solutions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-ai-solutions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-ai-solutions-views"
```

## Usage

```php
$aiSolution = new Braceyourself\AiSolution();
echo $aiSolution->echoPhrase('Hello, Braceyourself!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [braceyourself](https://github.com/braceyourself)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
