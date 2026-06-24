<div class="filament-hidden">

![Filament PWA](https://raw.githubusercontent.com/jeffersongoncalves/filament-pwa/1.x/art/jeffersongoncalves-filament-pwa.png)

</div>

# Filament PWA

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-pwa.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-pwa)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-pwa/run-tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-pwa/actions?query=workflow%3Arun-tests+branch%3A1.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-pwa/fix-php-code-style-issues.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-pwa/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-pwa.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-pwa)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-pwa.svg?style=flat-square)](LICENSE.md)

A thin Filament plugin that turns your panels into installable Progressive Web Apps. It registers a `PanelsRenderHook::HEAD_START` render hook that injects the PWA `<head>` markup into your panels:

- the web app manifest `<link rel="manifest">`,
- the `<meta name="theme-color">` tag, and
- the Apple touch icon `<link>` tags produced by [laravel-pwa-favicon](https://github.com/jeffersongoncalves/laravel-pwa-favicon).

This plugin is built on top of the [laravel-pwa-favicon](https://github.com/jeffersongoncalves/laravel-pwa-favicon) package. The favicon/manifest routes (`/manifest.json`, `/browserconfig.xml`, `/favicon.ico`, ...) are registered by that package's service provider — **this plugin only injects the matching `<head>` tags into your Filament panels.**

## Compatibility

| Branch | Filament | PHP | Laravel |
|--------|----------|-----|---------|
| **1.x** | **^3.0** | **^8.2 \| ^8.3** | **11.\*** |
| **2.x** | **^4.0** | **^8.2 \| ^8.3 \| ^8.4** | **11.\* \| 12.\*** |
| **3.x** | **^5.0** | **^8.3** | **12.\* \| 13.\*** |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-pwa:^1.0
```

The `jeffersongoncalves/laravel-pwa-favicon` package is installed as a dependency. Follow its README to publish the favicon assets and enable the manifest/favicon routes — without it the manifest link will point at a route that does not exist.

## Usage

Register the plugin in your `PanelProvider`:

```php
use JeffersonGoncalves\Filament\Pwa\FilamentPwaPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentPwaPlugin::make(),
        ]);
}
```

The plugin will inject the manifest link, the `theme-color` meta tag and the Apple touch icon links into the panel's `<head>`.

### Customisation

```php
FilamentPwaPlugin::make()
    ->themeColor('#0ea5e9')          // <meta name="theme-color">, defaults to #ffffff
    ->manifestUrl('/manifest.json'), // <link rel="manifest"> href, defaults to /manifest.json
```

The render hook is scoped to the panel it is registered on, so you can enable the PWA `<head>` markup per panel.

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

- [Jefferson Goncalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
