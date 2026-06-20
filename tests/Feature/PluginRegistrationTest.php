<?php

use JeffersonGoncalves\Filament\Pwa\FilamentPwaPlugin;

it('registers the plugin in the panel', function () {
    $plugin = filament()->getCurrentPanel()?->getPlugin('filament-pwa');

    expect($plugin)->toBeInstanceOf(FilamentPwaPlugin::class);
});

it('has the correct plugin id', function () {
    $plugin = filament()->getCurrentPanel()?->getPlugin('filament-pwa');

    expect($plugin->getId())->toBe('filament-pwa');
});
