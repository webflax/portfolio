<?php

namespace Webflax\Portfolio\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewExerciseRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coach_id',
        'desceiption'
    ];

    protected $table = "new_exercise_requests";
}
