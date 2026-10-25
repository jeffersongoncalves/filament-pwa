# Changelog

All notable changes to this project will be documented in this file.

## 2.2.0 - 2026-10-24

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/3
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/6
* ci: standardize update-changelog workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/9
* ci: standardize tests workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/16
* chore(deps): bump actions/checkout from 6.1.0 to 7.0.1 in the actions-deps group across 1 directory by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-pwa/pull/14
* ci: standardize tests workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/19
* ci: auto-merge dependabot github-actions minor/patch by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/22
* ci: let the Pint workflow push its fixes by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/25
* chore(deps): bump shivammathur/setup-php from 2.37.2 to 2.40.0 in the actions-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-pwa/pull/27
* feat: accept a Closure in themeColor() (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-pwa/pull/32

**Full Changelog**: https://github.com/jeffersongoncalves/filament-pwa/compare/2.1.0...2.2.0

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
