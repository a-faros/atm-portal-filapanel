<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_number', 'asset_class_id', 'short_description', 'description', 'object_id', 'make_id', 'asset_state_id', 'maintained_by',
    ];

    protected $casts = [

    ];

    public function assetClass(): BelongsTo
    {
        return $this->belongsTo(AssetClass::class, 'assetclass_id');
    }

    public function object(): BelongsTo
    {
        return $this->belongsTo(Object::class, 'object_id');
    }

    public function assetState(): BelongsTo
    {
        return $this->belongsTo(AssetState::class, 'assetstate_id');
    }
}
