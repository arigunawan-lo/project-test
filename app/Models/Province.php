<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = ['provinsi'];

    public function poscodes()
    {
        return $this->hasMany(Poscode::class, 'province_id');
    }
}
