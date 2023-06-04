<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $primaryKey = 'child_id';

    protected $fillable = [
        'parent_id',
        'student_id',
    ];

    // Define the relationship with the parent
    public function parent()
    {
        return $this->belongsTo(Parent::class);
    }

    // Define the relationship with the student basic information
    public function student()
    {
        return $this->belongsTo(StudentBasicInformation::class);
    }
}
