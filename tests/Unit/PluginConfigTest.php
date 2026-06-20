<?php

use JeffersonGoncalves\Filament\Pwa\FilamentPwaPlugin;

it('exposes a fluent configuration api', function () {
    $plugin = FilamentPwaPlugin::make()
        ->themeColor('#123456')
        ->manifestUrl('/custom-manifest.json');

    expect($plugin)->toBeInstanceOf(FilamentPwaPlugin::class)
        ->and($plugin->getId())->toBe('filament-pwa');
});

it('makes a new plugin instance', function () {
    expect(FilamentPwaPlugin::make())->toBeInstanceOf(FilamentPwaPlugin::class);
});
