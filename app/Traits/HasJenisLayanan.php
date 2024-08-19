<?php

namespace App\Traits;

use App\Enums\JenisLayanan;

trait HasJenisLayanan
{
    public function getStatusLabelAttribute(): string
    {
        return match ($this->gender) {
            JenisLayanan::Bengkel => 'bengkel',
            JenisLayanan::Footstep => 'footstep'
        };
    }
}
