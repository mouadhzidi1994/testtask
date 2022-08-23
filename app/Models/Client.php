<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table="_client";
    protected $fillable =[

        'first_name',
        'last_name',
        'email',
        'passport_num',
        'gender'



    ];
}
