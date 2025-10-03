<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoadmapStep extends Model
{
    use HasFactory;
    protected $fillable = ['roadmap_id', 'step_number', 'title', 'description'];

    public function roadmap(): BelongsTo
    {
        return $this->belongsTo(Roadmap::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(RoadmapCard::class);
    }
}
