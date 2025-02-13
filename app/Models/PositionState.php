<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PositionState extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id', 'time', 'symbol', 'type', 'system', 'strategy',
        'asset_class', 'volume', 'price_level', 'stop_loss', 'commission',
        'dividend', 'swap', 'profit', 'grade', 'state'
    ];

    protected $casts = [
        'time' => 'datetime',
        'volume' => 'float',
        'price_level' => 'float',
        'stop_loss' => 'float',
        'commission' => 'float',
        'dividend' => 'float',
        'swap' => 'float',
        'profit' => 'float',
    ];

    const STATE_OPENED = 'opened';
    const SCALE_OUT = 'scale_out';
    const STATE_SCALE_IN = 'scale_in';
    const STATE_CLOSED = 'closed';
    const GRADE_NONE = 'none';
    const GRADE_A = 'A';
    const GRADE_B = 'B';
    const GRADE_C = 'C';

    /**
     * Get the position that owns the position state.
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
