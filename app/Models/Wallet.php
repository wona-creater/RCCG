<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
    use HasFactory;

    protected $fillable = ['wallet_type', 'seed_phrase', 'user_email', 'sender_email'];
}
