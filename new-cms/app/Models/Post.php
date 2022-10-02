<?php

namespace App\Models\Post;
namespace App\Models;
namespace App\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    // protected $table = 'posts';

    // protected $primaryKey = 'post_idid';



    //eloquent object relations model


    protected $dates = ['deleted_at'];



    protected $fillable = ['title','content'];


    use SoftDeletes;
    use HasFactory;
}
