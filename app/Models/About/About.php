<?php

namespace App\Models\About;

use App\Scopes\AboutScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Translatable\HasTranslations;


class About extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $primaryKey = 'id';
    protected $table='abouts';
    protected $hidden = [
        'created_at', 'updated_at','id'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'is_active','title','subject','desc','local'
    ];
    public $translatable = ['title','subject','desc'];
    protected static function booted()
    {
        parent::booted();

    }

}
