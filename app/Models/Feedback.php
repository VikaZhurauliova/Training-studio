<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'file_id',
    ];

    public function file()
    {
        return $this->hasOne(File::class);
    }
}
