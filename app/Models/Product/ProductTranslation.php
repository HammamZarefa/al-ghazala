<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    use HasFactory;
    protected $table='product_translations';
    protected $fillable=[
        'id',
        'product_id',
        'name',
        'local'];
    protected $hidden=['product_id','local'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
