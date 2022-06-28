<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    use HasFactory;
    protected $table='page_translations';
    protected $fillable=[
        'id',
        'page_id',
        'title',
        'text',
        'local'];
    protected $hidden=['page_id','local'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
