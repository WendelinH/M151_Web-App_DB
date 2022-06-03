<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property boolean size_small
 * @property boolean state_free
 * @property boolean international
 * @property int number
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Gate extends Model
{
    use HasFactory;
}
