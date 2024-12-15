<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepmasuk extends Model
{
    use HasFactory;
    protected $fillable=['namaresep','deskripsi','bahan','langkah','no','nama','foto'];
}
