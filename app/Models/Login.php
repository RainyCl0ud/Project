<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Login extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'logtime',
        'logdate',
    ];

    protected $casts = [
        'logtime' => 'datetime',
        'logdate' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
