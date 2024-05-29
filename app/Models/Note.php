<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Note extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'title',
        'body',
        'send_date',
        'is_published',
        'heart_count',
        'recipient',
    ];

    protected $casts = [
        'send_date' => 'date',
        'is_published' => 'boolean',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function publishedNotes(User $user)
    {
        return $user->notes()->where('is_published', true)->get();
    }

}
