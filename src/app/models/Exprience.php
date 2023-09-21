<?php

namespace Webflax\Portfolio\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exprience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'description',
        'start_date',
        'end_date'
    ];

    protected $table='expriences';

}
