<?php

namespace Webflax\Portfolio\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'exercise_set_detail_id',
        'seconds'
    ];

    /**
     * the name of user table
     *
     * @var array<int, string>
     */

    protected $table = 'reports';

    /**
     * One-to-many relationship with users
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * one-to-one relationship with report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exerciseSetDetail()
    {
        return $this->belongsTo(ExerciseSetDetail::class);
    }
}
