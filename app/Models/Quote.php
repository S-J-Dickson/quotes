<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;


    /**
     * @created 06-06-2023
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }


    /**
     * @created 06-06-2023
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    protected static function booted()
    {
        static::creating(function ($quote) {
            $quote->number = 'QT-' . str_pad(static::max('id') + 1, 5, '0', STR_PAD_LEFT);
        });
    }
}
