<?php

namespace App\Models\Pcategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcategoryTranslation extends Model
{
    use HasFactory;
    protected $table='pcategory_translations';
    protected $fillable=[
        'id',
        'pcategory_id',
        'name',
        'local'];
    protected $hidden=['pcategory_id','local'];

    public function pcategory()
    {
        return $this->belongsTo(Pcategory::class);
    }
}
