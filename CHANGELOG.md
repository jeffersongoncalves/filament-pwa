# Changelog

All notable changes to this project will be documented in this file.

## 3.2.0 - 2026-10-24

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/1
* chore: add GitHub Sponsors to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/4
* ci: standardize update-changelog workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/10
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/11
* ci: standardize tests workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/17
* chore(deps): bump actions/checkout from 6.1.0 to 7.0.1 in the actions-deps group across 1 directory by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-pwa/pull/12
* ci: standardize tests workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/20
* ci: auto-merge dependabot github-actions minor/patch by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/23
* ci: let the Pint workflow push its fixes by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/26
* chore(deps): bump shivammathur/setup-php from 2.37.2 to 2.40.0 in the actions-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-pwa/pull/28
* feat: accept a Closure in themeColor() (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/33

**Full Changelog**: https://github.com/jeffersongoncalves/filament-pwa/compare/3.1.0...3.2.0

## 3.1.0 - 2026-08-27

Update to laravel-pwa-favicon ^2.0 (adds jeffersongoncalves/laravel-favicon as a transitive dependency). No API changes required for filament-pwa consumers.

## 3.0.0 - 2026-06-23

Filament v5 support (branch 3.x). Requires filament/filament ^5.0, PHP ^8.3, Laravel ^12|^13.

## 1.0.2 - 2026-06-20

chore: ignore the .phpunit.cache directory.

## 1.0.1 - 2026-06-20

Fix: replace the test workflow that failed to build (startup_failure) with the canonical run-tests workflow so the suite actually runs in CI. No library code changes; requires jeffersongoncalves/laravel-pwa-favicon ^1.0 (published on Packagist).

## 1.0.0 - 2026-06-20

Initial release.
