<?php

namespace App\Enums;

enum StatusPesanan: string
{
    case Diterima = 'diterima';
    case Diproses = 'diproses';
    case Diantar = 'diantar';
    case Selesai = 'selesai';
}
