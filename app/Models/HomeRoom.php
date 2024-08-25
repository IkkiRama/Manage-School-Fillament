<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeRoom extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function periode(): BelongsTo
    {
        return $this->belongsTo(Periode::class);
    }

    public function studentHasClass(): HasMany
    {
        return $this->hasMany(StudentHasClass::class);
    }
}
