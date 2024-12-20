<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'content', 'author_id',
    ];

    protected $casts = [

    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(JobPosition::class, 'author_id');
    }
}
