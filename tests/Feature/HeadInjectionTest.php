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
