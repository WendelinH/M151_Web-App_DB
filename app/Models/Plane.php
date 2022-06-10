<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int pasengers
 * @property double refuel_time
 * @property boolean jet
 * @property boolean propeller
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Plane extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasengers',
        'refuel_time',
        'jet',
        'propeller'
    ];
}
