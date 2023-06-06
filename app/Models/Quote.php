<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($quote) {
            $quote->number = 'QT-' . str_pad(static::max('id') + 1, 5, '0', STR_PAD_LEFT);
        });
    }
}
