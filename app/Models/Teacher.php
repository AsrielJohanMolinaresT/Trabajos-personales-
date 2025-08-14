<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory; 
    protected $perPage = 10; 
    protected $fillable = [
        'Name',
        'code_teacher',
        'identification_card',
        'age',
        'bierthdate',
        'P_birth',
        'address',
        'gender',
        'nationality',
        'ethnic',
        'telephone',
        'responsible',
        'country',
        'mail',
        'department',
        'degree',
        'marital_status',
    ];
    public function notes ()
    {
        return $this->hasMany(Note::class);
    }
}
