<?php

namespace App\Models\Post;
namespace App\Models;
namespace App\User;

use App\Models\Photo;
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

    //inverse relationship

    public function user(){
        return $this->belongsTo(User::class);
    }

    //polymorphic relationship
    public function photos()
    {
        return $this->morphMany(Photo::class,'imageable');
    }


    use SoftDeletes;
    use HasFactory;
}
