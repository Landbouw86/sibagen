<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKategori extends Model
{
    use HasFactory;

    protected $fillable = ['name','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function surat()
    {
        return $this->hasMany(Surat::class);
    }
}
