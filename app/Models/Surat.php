<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function suratkategori()
    {
        return $this->belongsTo(SuratKategori::class);
    }

    public function getPdfFileUrlAttribute()
    {
        return asset('storage/' . $this->pdf_file);
    }
}
