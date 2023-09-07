<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'time',
        'remaining_spots'
    ];

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
