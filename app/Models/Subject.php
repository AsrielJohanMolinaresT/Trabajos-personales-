<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory; 
    protected $perPage = 10; 
    protected $fillable = [ 
        'name',
        'mode',
        'units', 
        'shift',
        'code_subject',
        'section_id',
        'career_id',];  
         public function section () 
         {
            return $this->belongsTo(Section::class);
         }
         public function career ()
         {
            return $this->belongsTo(Career::class);
         }
         public function note()
         {
            return $this->hasOne(Note::class);
         }
}









