<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionValues extends Model
{
    use HasFactory;
    protected $fillable = [
        'value','order','question_id'

    ];
}
