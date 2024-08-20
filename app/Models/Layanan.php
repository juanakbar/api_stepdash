<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $primaryKey = 'id_layanan';
    public $incrementing = true;
    protected $fillable = ['nama_layanan'];
}
