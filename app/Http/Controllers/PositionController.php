<?php

namespace App\Http\Controllers;

use App\Http\Requests\PositionStateRequest;
use App\Models\Position;
use App\Models\PositionState;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PositionController extends Controller
{
    public function showAllPositions(): View
    {
        // Fetch closed positions (adjust 'closed' condition based on your logic)
        $closedPositions = PositionState::where('state', 'closed')->get();

        return view('positions', ['closedPositions' => $closedPositions]);
    }

    public function addPosition()
    {
        $action = route('position.store'); // Assuming you have a route named 'position.store' for the form submission
        return view('position-add', compact('action'));
    }

    public function storePosition(PositionStateRequest $request): RedirectResponse
    {
        PositionState::create($request->validated());

        return redirect()->route('position.index')->with('success', 'Position added successfully!');
    }
}
