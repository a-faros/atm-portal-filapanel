<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'to_do', 'task_status', 'activity_id', 'process_id', 'team_id', 'responsible',
    ];

    protected $casts = [

    ];

    public function taskUpdates(): HasMany
    {
        return $this->hasMany(TaskUpdate::class);
    }

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    public function process(): BelongsTo
    {
        return $this->belongsTo(Process::class, 'process_id');
    }

    public function taskStatus(): BelongsTo
    {
        return $this->belongsTo(TaskStatus::class, 'taskstatus_id');
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'team_id');
    }

    public function responsible(): BelongsTo
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }
}
