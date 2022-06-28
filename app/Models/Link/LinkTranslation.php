<?php

namespace App\Models\Link;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkTranslation extends Model
{
    use HasFactory;
    protected $table='link_translations';
    protected $fillable=[
        'id',
        'link_id',
        'name',
        'local'];
    protected $hidden=['link_id','local'];

    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}
