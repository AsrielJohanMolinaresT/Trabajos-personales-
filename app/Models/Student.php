<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $perPage = 10;

    protected $fillable = ['name', 
    'code_student', 
    'identification_card', 'age', 
    'date_birth', 
    'P_birth', 
    'address',
    'gender',
    'nacionality', 
    'ethnic', 
    'telephone', 
    'country', 
    'mail',
    'department',
    'municipilaty', 
    'degree', 
    'marital_status'];

    public function tuitions ()
    { 
        return $this->hasMany(Tuition::class);
    }
    public function notes ()
    {
        return $this->hasMany(Note::class); 
    }
}
