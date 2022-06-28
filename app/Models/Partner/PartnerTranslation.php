<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerTranslation extends Model
{
    use HasFactory;
    protected $table='partner_translations';
    protected $fillable=[
        'id',
        'partner_id',
        'name',
        'local'];
    protected $hidden=['partner_id','local'];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
