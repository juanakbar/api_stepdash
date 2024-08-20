<?php

namespace App\Traits;

use App\Enums\StatusPesanan;

trait HasStatusPesanan
{
    public function getStatusPesananLabelAttribute(): string
    {
        return match ($this->gender) {
            StatusPesanan::Diterima => 'Diterima',
            StatusPesanan::Diantar => 'Diantar',
            StatusPesanan::Diproses => 'Diproses',
            StatusPesanan::Selesai => 'Selesai'
        };
    }
}
