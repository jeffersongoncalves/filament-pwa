<?php

namespace JeffersonGoncalves\Filament\Pwa;

use Closure;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;

class FilamentPwaPlugin implements Plugin
{
    use EvaluatesClosures;

    protected string|Closure $themeColor = '#ffffff';

    protected string $manifestUrl = '/manifest.json';

    protected ?string $appTitle = null;

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
                // The complete PWA <head> (icons + apple touch icons + manifest
                // + msapplication tiles + theme-color + mobile web-app metas) is
                // rendered by jeffersongoncalves/laravel-pwa-favicon's shared
                // view, so a panel emits the exact same tags as a public site
                // layout using the same package. Larastan analyses the package
                // in isolation and cannot resolve the runtime view namespace,
                // so the literal is pinned to view-string here.
                /** @var view-string $view */
                $view = 'pwa-favicon::head';

                return view($view, [
                    'themeColor' => $this->getThemeColor(),
                    'manifestUrl' => $this->manifestUrl,
                    'title' => $this->appTitle,
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

    public function themeColor(string|Closure $color): static
    {
        $this->themeColor = $color;

        return $this;
    }

    public function getThemeColor(): string
    {
        // Evaluated when the head renders, not at panel registration, so a
        // Closure stays per-request under Octane's long-lived workers.
        return $this->evaluate($this->themeColor);
    }

    public function manifestUrl(string $url): static
    {
        $this->manifestUrl = $url;

        return $this;
    }

    public function appTitle(?string $title): static
    {
        $this->appTitle = $title;

        return $this;
    }
}
