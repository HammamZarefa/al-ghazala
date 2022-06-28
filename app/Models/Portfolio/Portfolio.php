<?php

namespace App\Models\Portfolio;

use App\Scopes\PortfolioScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Portfolio extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $primaryKey = 'id';
    protected $table='portfolios';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'slug',
        'pcategory_id',
        'cover',
        'link',
        'date',
        'is_active',
        'name',
        'client',
        'desc',
    ];

    public $translatable = ['name', 'client', 'desc'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new PortfolioScope);
    }
//    public function PortfolioTranslation()
//    {
//        return $this->hasMany(PortfolioTranslation::class);
//    }

    public function pcategory()
    {
        return $this->belongsTo(Pcategory::class);
    }
}
