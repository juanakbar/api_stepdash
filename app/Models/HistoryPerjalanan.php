<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPerjalanan extends Model
{
    
    protected $primaryKey = 'id_history_perjalanan';
    public $incrementing = true;
    protected $fillable = ['id_order', 'pembayaran_id'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'pembayaran_id', 'id_pembayaran');
    }
}
