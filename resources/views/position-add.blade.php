<x-layout>
    <x-slot name="heading">
        Add Position
    </x-slot>

    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <x-position-form :action="route('position.store')" buttonText="Add Position" />
    </div>
</x-layout>
