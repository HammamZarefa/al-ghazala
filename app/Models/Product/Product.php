<?php

namespace App\Models\Product;

use App\Models\Partner\ProductTranslation;
use App\Scopes\ProductScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $primaryKey = 'id';
    protected $table='products';
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
        'name',
        'local'
    ];
    public $translatable = ['name'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new ProductScope);
    }
//    public function ProductTranslation()
//    {
//        return $this->hasMany(ProductTranslation::class);
//    }
}
