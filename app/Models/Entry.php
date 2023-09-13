<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $table = 'entries';
    protected $fillable = [
        'user_id',
        'date',
        'meal',
        'calories',
        'protein',
        'carbohydrates',
        'fat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getTotalCalories($date)
    {
        return self::where('date', $date)->sum('calories');
    }
}
