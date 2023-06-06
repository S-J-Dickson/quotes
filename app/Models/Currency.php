<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * @package App\Models
 * @created 06-06-2023
 */
class Currency extends Model
{
    use HasFactory;

    /**
     * @var string[]
     * @created 06-06-2023
     */
    protected $fillable = [
        'code',
        'exchange_rate',
        'decimal_digits',
    ];

}
