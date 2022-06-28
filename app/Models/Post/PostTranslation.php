<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    use HasFactory;
    protected $table='post_translations';
    protected $fillable=['id','post_id','title','body','keyword','meta_desc','local'];
    protected $hidden=['post_id','local'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
