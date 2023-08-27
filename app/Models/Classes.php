<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classes extends Model
{
    use HasFactory;

    public function team(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'teams');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'users');
    }
}
