<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table='homes';
    protected  $fillable=[
        'home_title',
        'home_description',
        'logo',
        'home_image',
        'status',
    ];
}

