<?php

use JeffersonGoncalves\Filament\Pwa\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\Pwa\Tests\TestCase;

uses(TestCase::class)->in('Feature', 'Unit');

function createTestUser(): TestUser
{
    return TestUser::factory()->create();
}
