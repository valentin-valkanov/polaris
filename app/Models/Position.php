<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [];

    /**
     * Get the position states associated with the position.
     */
    public function positionStates(): HasMany
    {
        return $this->hasMany(PositionState::class);
    }
}
