<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPhone extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'price',
        'specification',
        'description',
        'image',
        
    ];
}

