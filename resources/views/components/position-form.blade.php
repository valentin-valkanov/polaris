@props(['action', 'buttonText'])

<form method="POST" action="{{ $action }}">
    @csrf

    <div class="mb-4">
        <label class="block">Time</label>
        <input type="datetime-local" name="time" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Symbol</label>
        <input type="text" name="symbol" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Type</label>
        <input type="text" name="type" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Volume</label>
        <input type="number" name="volume" step="0.01" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Price Level</label>
        <input type="number" name="priceLevel" step="0.01" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Stop Loss</label>
        <input type="number" name="stopLoss" step="0.01" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Commission</label>
        <input type="number" name="commission" step="0.01" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Dividend</label>
        <input type="number" name="dividend" step="0.01" class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Profit</label>
        <input type="number" name="profit" step="0.01" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Strategy</label>
        <input type="text" name="strategy" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Asset Class</label>
        <input type="text" name="assetClass" required class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block">Grade</label>
        <select name="grade" required class="w-full border rounded p-2">
            <option value="none">None</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
        </select>
    </div>

    <div class="mb-4">
        <label class="block">State</label>
        <select name="state" required class="w-full border rounded p-2">
            <option value="opened">Opened</option>
            <option value="scale_out">Scale Out</option>
            <option value="scale_in">Scale In</option>
            <option value="closed">Closed</option>
        </select>
    </div>

    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
        {{ $buttonText }}
    </button>
</form>

