<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    use HasFactory;
    protected $table='about_translations';
    protected $fillable=['id','about_id','title','subject','desc','local'];
    protected $hidden=[];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
}
