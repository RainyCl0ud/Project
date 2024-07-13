<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}

