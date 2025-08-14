<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    use HasFactory;
    protected $perPage = 10;

    protected $fillable = 
    ['e_center',
    'D_tuition', 
    'type', 
    'semeste', 
    'year',
     'student_id', 
     'career_id'];

    public function student ()
    {
        return $this->belongsTo(Student::class);
    }
    public function career ()
    {
        return $this->belongsTo(Career::class);
    }

}
