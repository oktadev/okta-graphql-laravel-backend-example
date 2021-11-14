<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Issue extends Model
{
    use HasFactory;

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function assignee(): BelongsTo {
        return $this->belongsTo(User::class, 'assignee_id');
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}
