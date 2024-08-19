<?php

namespace App\Traits;

use App\Enums\StatusPembayaran;

trait HasStatusPembayaran
{
    public function getStatusPembayaranLabelAttribute(): string
    {
        return match ($this->status) {
            StatusPembayaran::Pending => 'Pending',
            StatusPembayaran::Settlement => 'Settlement',
            StatusPembayaran::Deny => 'Deny',
            StatusPembayaran::Expire => 'Expire',
            StatusPembayaran::Cancel => 'Cancel',
            StatusPembayaran::Refund => 'Refund',
            StatusPembayaran::PartialRefund => 'Partial Refund'
        };
    }
}