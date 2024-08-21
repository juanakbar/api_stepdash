<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = true;
    protected $fillable = ['id_order', 'status', 'midtrans_transaction_id', 'payment_type', 'va_number', 'payload', 'total', 'keterangan'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }
}
