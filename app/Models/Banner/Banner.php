<?php

namespace App\Models\Banner;

use App\Scopes\BannerScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $primaryKey = 'id';
    protected $table='banners';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'cover',
        'link',
        'is_active',
        'title','desc','local'
    ];
    public $translatable = ['title','desc'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new BannerScope);
    }
//    public function BannerTranslation()
//    {
//        return $this->hasMany(BannerTranslation::class);
//    }
}
