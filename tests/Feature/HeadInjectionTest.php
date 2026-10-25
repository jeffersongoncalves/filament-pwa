<?php

it('injects the pwa manifest link into the panel head', function () {
    $this->get('/admin/login')
        ->assertOk()
        ->assertSee('rel="manifest"', false)
        ->assertSee('href="/manifest.json"', false);
});

it('injects the theme-color meta tag into the panel head', function () {
    $this->get('/admin/login')
        ->assertOk()
        ->assertSee('name="theme-color"', false)
        ->assertSee('content="#0ea5e9"', false);
});

it('evaluates a theme-color closure on every request', function () {
    filament()->getPanel('admin')->getPlugin('filament-pwa')
        ->themeColor(fn (): string => request()->cookie('theme') === 'light' ? '#fffef9' : '#0b0a09');

    $this->withCookie('theme', 'light')
        ->get('/admin/login')
        ->assertOk()
        ->assertSee('content="#fffef9"', false);

    $this->withCookie('theme', 'dark')
        ->get('/admin/login')
        ->assertOk()
        ->assertSee('content="#0b0a09"', false);
});
