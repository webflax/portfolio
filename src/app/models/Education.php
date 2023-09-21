<?php

namespace Webflax\Portfolio\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree',
        'institution',
        'field_of_study',
        'start_date',
        'end_date',
    ];
}
