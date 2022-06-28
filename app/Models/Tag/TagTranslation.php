<?php

namespace App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag\Tag;

class TagTranslation extends Model
{
    use HasFactory;
    protected $table='tag_translations';
    protected $fillable=['id','tag_id','name','keyword','meta_desc','local'];
    protected $hidden=['tag_id','local'];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
