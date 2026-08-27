# Changelog

All notable changes to this project will be documented in this file.

## 2.1.0 - 2026-08-27

Update to laravel-pwa-favicon ^2.0 (adds jeffersongoncalves/laravel-favicon as a transitive dependency). No API changes required for filament-pwa consumers.

## 2.0.0 - 2026-06-23

Filament v4 support (branch 2.x). Requires filament/filament ^4.0, PHP ^8.2|^8.3|^8.4, Laravel ^11|^12.

## 1.0.2 - 2026-06-20

chore: ignore the .phpunit.cache directory.

## 1.0.1 - 2026-06-20

Fix: replace the test workflow that failed to build (startup_failure) with the canonical run-tests workflow so the suite actually runs in CI. No library code changes; requires jeffersongoncalves/laravel-pwa-favicon ^1.0 (published on Packagist).

## 1.0.0 - 2026-06-20

Initial release.
