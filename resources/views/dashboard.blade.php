<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-accent-1">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-bkg sm:rounded-lg">
                <div class="p-6 text-content-900">
                    <livewire:dashboardstats/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
