<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table='education';
    protected $fillable=[
        'institution_name',
        'degree_type',
        'department',
        'start_year',
        'passing_year',
        'status',
    ];
}
