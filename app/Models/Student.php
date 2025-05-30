<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    public $incrementing = false; // karena primary key-nya bukan integer auto-increment
    protected $keyType = 'string';

    protected $fillable = [
        'student_id',
        'name',
        'email',
        'NIM',
        'major',
        'enrollment_year',
    ];
}
