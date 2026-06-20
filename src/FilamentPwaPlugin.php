<?php

namespace JeffersonGoncalves\Filament\Pwa;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use JeffersonGoncalves\PwaFavicon\PwaFavicon;

class FilamentPwaPlugin implements Plugin
{
    protected string $themeColor = '#ffffff';

    protected string $manifestUrl = '/manifest.json';

    public function getId(): string
    {
        return 'filament-pwa';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_START,
            function (): View {
                // 'filament-pwa::head' is registered as a package view namespace
                // at runtime via hasViews(). Larastan analyses the package in
                // isolation and cannot resolve that namespace, so the literal is
                // pinned to view-string here to keep static analysis honest.
                /** @var view-string $view */
                $view = 'filament-pwa::head';

                return view($view, [
                    'themeColor' => $this->themeColor,
                    'manifestUrl' => $this->manifestUrl,
                    'appleLinks' => $this->appleHeadLinks(),
                ]);
            },
        );
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function themeColor(string $color): static
    {
        $this->themeColor = $color;

        return $this;
    }

    public function manifestUrl(string $url): static
    {
        $this->manifestUrl = $url;

        return $this;
    }

    /**
     * Apple touch icon <link> tags produced by the laravel-pwa-favicon
     * package. The package is a hard dependency, but the class_exists guard
     * keeps the <head> injection (manifest link + theme-color) working even
     * if the favicon routes are not yet published.
     *
     * @return array<int, array{rel: string, sizes?: string, href: string, media?: string}>
     */
    protected function appleHeadLinks(): array
    {
        if (! class_exists(PwaFavicon::class)) {
            return [];
        }

        return PwaFavicon::appleHeadLinks();
    }
}
