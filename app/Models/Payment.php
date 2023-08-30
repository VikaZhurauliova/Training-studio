<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';

    protected $fillable = [
        'status',
        'subscription_id',
        'session_id',
        'hash'
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
