<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\PositionState;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $position = Position::create(); // Creates a new position without a name

        PositionState::create([
            'position_id' => $position->id,
            'time' => now(),
            'symbol' => 'AAPL',
            'type' => 'Buy',
            'system' => 'System 1',
            'strategy' => 'Breakout',
            'asset_class' => 'Stocks',
            'volume' => 10,
            'price_level' => 150.50,
            'stop_loss' => 145.00,
            'commission' => 1.5,
            'dividend' => 0.5,
            'swap' => 0.2,
            'profit' => 20.75,
            'grade' => 'A',
            'state' => 'Open',
        ]);
    }
}
