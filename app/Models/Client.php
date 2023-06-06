<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * @var string[]
     * @created 06-06-2023
     */
    protected $fillable = [
        'name',
        'contact_name',
        'contact_email',
    ];

}
