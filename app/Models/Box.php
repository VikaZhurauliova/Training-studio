<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $table = 'boxes';

    protected $fillable = [
        'is_added',
        'number',
        'user_id',
    ];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
