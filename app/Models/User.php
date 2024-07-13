<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $encryptable = [
        'username',
        'usertype',
        'name',
        'email',
        'password',
        'year_level',
        'course',
    ];

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (in_array($key, $this->encryptable)) {
            return decrypt($value);
        }

        return $value;
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable)) {
            $value = encrypt($value);
        }

        parent::setAttribute($key, $value);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'username', 'username');
    }

    public function logins()
    {
        return $this->hasMany(Login::class, 'username', 'username');
    }
}
