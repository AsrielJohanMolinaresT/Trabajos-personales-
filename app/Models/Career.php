<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $perPage = 10; 
    protected $fillable = [
        'Name',
        'mode',
        'shift',
        'code_career',
        'duration',
        'specialty',
    ];
    public function tuition ()
    {
        return $this->hasOne(Tuition::class);
    }
    public function subjects ()
    {
        return $this->hasMany(Subject::class);
    }
}
