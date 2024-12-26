<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['event', 'management', 'validations'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function management(): BelongsTo
    {
        return $this->belongsTo(Management::class);
    }

    public function validations(): HasMany
    {
        return $this->hasMany(Validation::class);
    }
}
