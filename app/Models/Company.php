<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'abbr', 'vendor_id', 'customer_id',
    ];

    protected $casts = [

    ];

    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }
}
