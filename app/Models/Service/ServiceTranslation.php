<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    use HasFactory;
    protected $table='service_translations';
    protected $fillable=[
        'id',
        'service_id',
        'title',
        'quote',
        'desc',
        'local'];
    protected $hidden=['service_id','local'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
