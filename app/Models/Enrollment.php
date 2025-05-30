<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollment'; // karena nama tabel bukan jamak (default: enrollments)

    protected $primaryKey = 'enrollment_id';

    public $incrementing = false; // karena primary key bukan auto-increment
    protected $keyType = 'string';

    protected $fillable = [
        'enrollment_id',
        'student_id',
        'course_id',
        'department',
        'attendance',
        'status',
    ];
}
