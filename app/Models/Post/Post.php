<?php

namespace App\Models\Post;

use App\Models\Category\Category;
use App\Models\Tag\Tag;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\PostScope;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;

    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $table='posts';

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    protected $guarded = [];

    protected $fillable = ['category_id',
        'author_id',
        'slug',
        'cover',
        'views',
        'status',
        'is_active',
        'title',
        'body',
        'keyword',
        'meta_desc',
        'local'];

    public $translatable = ['title','body','keyword','meta_desc'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new PostScope);
    }

//    public function PostTranslation()
//    {
//        return $this->hasMany(PostTranslation::class);
//    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'author_id');
    }

    // public function admin()
    // {
    //     return $this->belongsTo(Admin::class,'author_id');
    // }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
