<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-accent-1">
            {{ __('Create Notes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden text-content bg-bkg shadow-sm sm:rounded-lg">
                <x-button icon="arrow-left"  class="mb-8" href="{{ route('notes.index') }}" wire:navigate>All Notes</x-button>

                <div >
                   <livewire:notes.create>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
