<?php

namespace App\Enums;

enum StatusPembayaran: string
{
    case Pending = 'pending';
    case Settlement = 'settlement';
    case Deny = 'deny';
    case Expire = 'expire';
    case Cancel = 'cancel';
    case Refund = 'refund';
    case PartialRefund = 'partial_refund';
}
