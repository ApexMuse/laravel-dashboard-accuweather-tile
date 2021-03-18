# A tile for Spatie's Laravel Dashboard to display weather

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apexmuse/laravel-dashboard-accuweather-tile.svg?style=flat-square)](https://packagist.org/packages/apexmuse/laravel-dashboard-accuweather-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/apexmuse/laravel-dashboard-accuweather-tile/run-tests?label=tests)](https://github.com/apexmuse/laravel-dashboard-accuweather-tile/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/apexmuse/laravel-dashboard-accuweather-tile/Check%20&%20fix%20styling?label=code%20style)](https://github.com/apexmuse/laravel-dashboard-accuweather-tile/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/apexmuse/laravel-dashboard-accuweather-tile.svg?style=flat-square)](https://packagist.org/packages/apexmuse/laravel-dashboard-accuweather-tile)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-laravel-dashboard-accuweather-tile-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-laravel-dashboard-accuweather-tile-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require apexmuse/laravel-dashboard-accuweather-tile
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="ApexMuse\LaravelDashboardAccuweatherTile\LaravelDashboardAccuweatherTileServiceProvider" --tag="dashboard-accuweather-tile-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="ApexMuse\LaravelDashboardAccuweatherTile\LaravelDashboardAccuweatherTileServiceProvider" --tag="dashboard-accuweather-tile-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-dashboard-accuweather-tile = new ApexMuse\LaravelDashboardAccuweatherTile();
echo $laravel-dashboard-accuweather-tile->echoPhrase('Hello, ApexMuse!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Todd Twiggs](https://github.com/ApexMuse)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
