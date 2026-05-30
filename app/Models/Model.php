<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\WithoutTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[WithoutTimestamps]
class Model extends EloquentModel
{
    /** @use HasFactory<\Database\Factories\ModelFactory> */
    use HasFactory;

    public function pcs(): HasMany
    {
        return $this->hasMany(Pc::class);
    }
}
