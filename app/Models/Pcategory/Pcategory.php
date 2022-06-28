<?php

namespace App\Models\Pcategory;

use App\Models\Portfolio\Portfolio;
use App\Scopes\PcategoryScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Pcategory extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $primaryKey = 'id';
    protected $table='pcategories';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'is_active',
        'name',
        'local'
    ];
    public $translatable = ['name'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new PcategoryScope);
    }
//    public function PcategoryTranslation()
//    {
//        return $this->hasMany(PcategoryTranslation::class);
//    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }
}
