<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $perPage = 10; 
    protected $fillable = [
        'note',
        'type',
        'semester',
        'code_note',
        'student_id',
        'teacher_id',
        'subject_id',
    ];
    public function student ()
    {
        return $this->belongsTo(Student::class);
    }
    public function teacher ()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function subject ()
    {
        return $this->belongsTo(Subject::class);
    }
}
