<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
