<?php

namespace App\Jobs;

use App\Models\Note;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SendNoteEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Note $note)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $noteUrl = config('app.url').'/notes/'.$this->note->id;

        $emailContent = "Hello, you've received a new note. View it here: {$noteUrl}";
        Log::info('Sending email', [
            'from' => 'sendnotes@zimfy.co',
            'to' => $this->note->recipient,
            'subject' => 'You have a new note from ' . $this->note->user->name,
            'body' => $emailContent,
        ]);

        // Mail::raw($emailContent, function ($message) {
        //     $message->from('sendnotes@zimfy.co', 'The Notes App')
        //         ->to($this->note->recipient)
        //         ->subject('You have a new note from '.$this->note->user->name);
        // });
    }
}
