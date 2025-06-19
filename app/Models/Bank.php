<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bank extends Model
{
    //
    protected $fillable = ['bank_name', 'account_number', 'account_name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
