<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function kpn()
    {
        return $this->hasMany(Kpn::class);
    }
}
