<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;
    protected $fillable=[ 
        'fullname',
        'position',
        'email',
         'phone',
         'Leavetype',
         'vacation',
         'DateTo',
    ];
}
