<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Roadmap extends Model
{
    use HasFactory;
    protected $fillable = ['roadmap_type_id', 'slug', 'title', 'description'];

    public function type(): belongsTo
    {
        return $this->belongsTo(RoadmapType::class, 'roadmap_type_id');
    }

    public function steps(): HasMany
    {
        return $this->hasMany(RoadmapStep::class)->orderBy('step_number');
    }
}
