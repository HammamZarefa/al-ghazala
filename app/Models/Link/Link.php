<?php

namespace App\Models\Link;

use App\Scopes\LinkScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Link extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $primaryKey = 'id';
    protected $table='links';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'link',
        'is_active', 'name',
        'local'
    ];
    public $translatable = ['name'];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new LinkScope);
    }
//    public function LinkTranslation()
//    {
//        return $this->hasMany(LinkTranslation::class);
//    }
}
