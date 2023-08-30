<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'description',
        'is_active',
        'image'
    ];

    public function team(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'teams');
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_classes','classes_id', 'users_id');
    }

//    public function reviews(): HasMany
//    {
//        return $this->hasMany(ClassReview::class);
//    }

}
