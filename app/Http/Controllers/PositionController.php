<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\PositionState;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function showAllPositions()
    {
        // Fetch closed positions (adjust 'closed' condition based on your logic)
        $closedPositions = PositionState::where('state', 'closed')->get();

        return view('positions', ['closedPositions' => $closedPositions]);
    }
}
