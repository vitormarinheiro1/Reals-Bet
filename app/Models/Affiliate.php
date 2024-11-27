<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    protected $fillable = [
        "name",
        "cpf",
        "birth_date",
        "email",
        "phone",
        "address",
        "city",
        "active",
    ];
}
