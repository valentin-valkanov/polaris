<x-layout>
    <x-slot:heading>
        Positions
    </x-slot:heading>

    {{-- Add Position Button --}}
    <div class="mb-4 flex justify-end">
        <x-button href="{{ route('position.add') }}">
            + Add Position
        </x-button>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
            <tr>
                <th>Entry Time</th>
                <th>Symbol</th>
                <th>Type</th>
                <th>Vol</th>
                <th>Entry</th>
                <th>Stop Loss</th>
                <th>Exit</th>
                <th>Comm</th>
                <th>Exit Time</th>
                <th>Div</th>
                <th>Swap</th>
                <th>Profit</th>
                <th>System</th>
                <th>Strategy</th>
                <th>Asset Class</th>
                <th>Grade</th>
                <th>State</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($closedPositions as $position)
                <tr>
                    <td>{{ $position->entry_time }}</td>
                    <td>{{ $position->symbol }}</td>
                    <td>{{ $position->type }}</td>
                    <td>{{ $position->volume }}</td>
                    <td>{{ $position->entry_level }}</td>
                    <td>{{ $position->stop_loss }}</td>
                    <td>{{ $position->exit_level }}</td>
                    <td>{{ $position->commission }}</td>
                    <td>{{ $position->exit_time}}</td>
                    <td>{{ $position->dividend }}</td>
                    <td>{{ $position->swap }}</td>
                    <td>{{ $position->profit }}</td>
                    <td>{{ $position->system }}</td>
                    <td>{{ $position->strategy }}</td>
                    <td>{{ $position->asset_class }}</td>
                    <td>{{ $position->grade }}</td>
                    <td>{{ $position->state }}</td>
                    <td>
                        <a href="#">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
