<?php

use Livewire\Volt\Component;

new class extends Component {
    // properties notes model
    // public $title;
    public $title;
    public $body;
    public $send_date;
    public $is_published;
    public $recipient;

    public function submit()
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'min:5'],
            'body' => ['required', 'string', 'min:20'],
            'recipient' => ['required', 'email'],
            'send_date' => ['required', 'date'],
        ]);

        auth()
            ->user()
            ->notes()
            ->create([
                'title' => $this->title,
                'body' => $this->body,
                'recipient' => $this->recipient,
                'send_date' => $this->send_date,
                'is_published' => true,
            ]);

        redirect(route('notes.index'));
    }

}; ?>

<div>
    <form wire:submit='submit' class="space-y-4">
        <x-input wire:model="title" label="Note Title" placeholder="It's been a great day." />
        <x-textarea wire:model="body" label="Your Note" placeholder="Share all your thoughts with your friend." />
        <x-input icon="user" wire:model="recipient" label="Recipient" placeholder="yourfriend@email.com" type="email" />
        <x-input icon="calendar" wire:model="send_date" type="date" label="Send Date" />
        {{-- <x-input :min="now()" icon="calendar" wire:model="send_date" type="date" label="Send Date" /> --}}
        <div class="pt-4">
            <x-button type="submit" primary right-icon="calendar" spinner>Schedule Note</x-button>
        </div>
        <x-errors />
    </form>
</div>
