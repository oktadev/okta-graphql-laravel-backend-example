<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    public function issue(): BelongsTo {
        return $this->belongsTo(Issue::class);
    }

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'author_id');
    }
}
