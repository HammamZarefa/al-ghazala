<?php

namespace App\Models\Testimonial;

use App\Scopes\TestimonialScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='testimonials';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'photo',
        'status',
        'is_active',
        'name',
        'profession',
        'desc',
        'local'
    ];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new TestimonialScope);
    }
//    public function TestimonialTranslation()
//    {
//        return $this->hasMany(TestimonialTranslation::class);
//    }
}
