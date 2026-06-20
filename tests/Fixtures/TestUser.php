<?php

namespace JeffersonGoncalves\Filament\Pwa\Tests\Fixtures;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TestUser extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $guarded = [];

    protected static function newFactory(): Factory
    {
        return TestUserFactory::new();
    }
}
