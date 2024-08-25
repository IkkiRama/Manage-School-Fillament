<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periode extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function hoomeRoom(): HasMany
    {
        return $this->hasMany(HomeRoom::class);
    }

    public function studentHasClass(): HasMany
    {
        return $this->hasMany(StudentHasClass::class);
    }
}
