<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionMpnList extends Model
{
    use HasFactory;

    protected $fillable=[
        'mpn'
    ];
}
