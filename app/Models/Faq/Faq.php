<?php

namespace App\Models\Faq;

use App\Scopes\FaqScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $primaryKey = 'id';
    protected $table='faqs';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'is_active','question','answer','local'
    ];
    public $translatable = ['question','answer'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new FaqScope);
    }
//    public function FaqTranslation()
//    {
//        return $this->hasMany(FaqTranslation::class);
//    }
}
