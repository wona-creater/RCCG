<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Crypto extends Model
{
    //

    protected $fillable = ['cryptocurrency', 'wallet_address', 'network'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
