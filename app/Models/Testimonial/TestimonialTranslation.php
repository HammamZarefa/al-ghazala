<?php

namespace App\Models\Testimonial;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialTranslation extends Model
{
    use HasFactory;
    protected $table='testimonial_translations';
    protected $fillable=[
        'id',
        'testimonial_id',
        'name',
        'profession',
        'desc',
        'local'];
        
    protected $hidden=['testimonial_id','local'];

    public function testimonial()
    {
        return $this->belongsTo(Testimonial::class);
    }
}
