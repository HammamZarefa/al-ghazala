<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    use HasFactory;
    protected $table='category_translations';
    protected $fillable=['id','category_id','name','keyword','meta_desc','local'];
    protected $hidden=['category_id','local'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
