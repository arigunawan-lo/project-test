<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poscode extends Model
{
    use HasFactory;

    protected $fillable = ['kode_pos', 'desa', 'kecamatan', 'kota', 'province_id'];

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
