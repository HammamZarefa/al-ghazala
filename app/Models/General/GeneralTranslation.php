<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralTranslation extends Model
{
    use HasFactory;
    protected $table='general_translations';
    protected $fillable=[
        'id',
        'general_id',
        'title',
        'address1',
        'address2',
        'footer',
        'tawkto',
        'disqus',
        'gverification',
        'sharethis',
        'keyword',
        'meta_desc',
        'local'];
    protected $hidden=['general_id','local'];

    public function general()
    {
        return $this->belongsTo(General::class);
    }
}
