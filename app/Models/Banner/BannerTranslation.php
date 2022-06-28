<?php

namespace App\Models\Banner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerTranslation extends Model
{
    use HasFactory;
    protected $table='banner_translation';
    protected $fillable=['id','banner_id','title','desc','local'];
    protected $hidden=['banner_id','local'];

    public function banner()
    {
        return $this->belongsTo(Banner::class);
    }
}
