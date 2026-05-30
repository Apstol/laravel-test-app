<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\WithoutTimestamps;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[WithoutTimestamps]
#[Fillable(['model_id', 'ram', 'hd', 'price'])]
class Pc extends EloquentModel
{
    /** @use HasFactory<\Database\Factories\PcFactory> */
    use HasFactory;

    public function model(): BelongsTo
    {
        return $this->belongsTo(Model::class);
    }
}
