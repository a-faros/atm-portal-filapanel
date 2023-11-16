<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetState extends Model
{
    use HasFactory;

    protected $fillable = [
        'state', 'substate',
    ];

    protected $casts = [

    ];
}
