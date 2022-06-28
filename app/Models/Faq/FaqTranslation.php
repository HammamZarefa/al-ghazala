<?php

namespace App\Models\Faq;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTranslation extends Model
{
    use HasFactory;
    protected $table='faq_translations';
    protected $fillable=['id','faq_id','question','answer','local'];
    protected $hidden=['faq_id','local'];

    public function faq()
    {
        return $this->belongsTo(Faq::class);
    }
}
