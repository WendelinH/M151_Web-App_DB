<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property Carbon start_time
 * @property Carbon landing_time
 * @property int number
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'landing_time',
        'number',
    ];
}
