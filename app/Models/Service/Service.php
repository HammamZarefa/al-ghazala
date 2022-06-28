<?php

namespace App\Models\Service;

use App\Scopes\ServiceScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='services';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'icon',
        'slug',
        'is_active',
        'title',
        'quote',
        'desc',
        'local'
    ];
    public $translatable = ['title', 'quote', 'desc'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new ServiceScope);
    }
//    public function ServiceTranslation()
//    {
//        return $this->hasMany(ServiceTranslation::class);
//    }
}
