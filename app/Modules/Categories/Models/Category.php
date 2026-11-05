<?php

namespace App\Modules\Categories\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Columns that may be filled with create() / update().
     */
    protected $fillable = [
        'name',
        'is_active',
    ];

    /**
     * Default values for new models (matches the database default),
     * so a freshly created category already has is_active in its JSON.
     */
    protected $attributes = [
        'is_active' => true,
    ];

    /**
     * Convert database values to PHP types.
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
