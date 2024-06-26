<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-accent-1 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-bkg overflow-hidden shadow-sm sm:rounded-lg p-6 text-content">


                <div >
                    <livewire:notes.show lazy>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
