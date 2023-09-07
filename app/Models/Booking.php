<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_added',
        'classes_id',
        'slot_id',
    ];

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }

    public function slot()
    {
        return $this->belongsTo(Slot::class);
    }
}
