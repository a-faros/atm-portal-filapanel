<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'class', 'description',
    ];

    protected $casts = [

    ];
}