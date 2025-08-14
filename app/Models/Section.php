<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $perPage = 10; 
    protected $fillable = [
        'Name',
        'state',
        'area',
        'responsible',
        'pavillion',
        'type',
        'capacity',
    ]; 
    public function subjects ()
    {
        return $this->hasMany(Subject::class);
    }
}
