<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $fillable = ['portfolio_id', 'image'];

    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio\Portfolio');
    }
}
