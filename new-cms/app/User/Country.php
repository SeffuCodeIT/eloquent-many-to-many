<?php

namespace App\Models;

use App\User\Post;
use App\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class, 'country_id', 'user_id');
    }
    use HasFactory;
}
