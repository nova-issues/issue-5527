<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnowflakeExample extends Model
{
    use HasFactory;

    /**
     * Casts the Snowflake ID as a string.
     */
    protected function id(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => (string) $value,
            set: fn ($value) => (int) $value,
        );
    }
}
