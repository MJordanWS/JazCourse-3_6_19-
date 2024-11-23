<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketBelajar extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
    ];

    public function pembelajaran()
    {
        return $this->hasMany(Pembelajaran::class);
    }
}
