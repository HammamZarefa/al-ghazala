<?php

namespace App\Models\Tag;

use App\Scopes\TagScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $primaryKey = 'id';
    protected $table='tags';
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
//        static::addGlobalScope(new TagScope);
    }
//    public function TagTranslation()
//    {
//        return $this->hasMany(TagTranslation::class);
//    }

    public function Posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
