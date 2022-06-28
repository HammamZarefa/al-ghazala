<?php

namespace App\Models\Category;

use App\Models\Post\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\CategoryScope;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $primaryKey = 'id';
    protected $table='categories';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'slug',
        'is_active','name','keyword','meta_desc','local'
    ];
    public $translatable = ['name','keyword','meta_desc'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new CategoryScope);
    }

//    public function CategoryTranslation()
//    {
//        return $this->hasMany(CategoryTranslation::class);
//    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
