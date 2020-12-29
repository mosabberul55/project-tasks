<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokeData extends Model
{
    use HasFactory;
    protected $table = "stoke_data";
    protected $fillable = ['date', 'trade_code', 'high', 'low', 'open', 'close', 'volume'];
}

