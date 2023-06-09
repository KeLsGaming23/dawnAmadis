<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parents;
use App\Models\StudentBasicInformation;


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
        return $this->belongsTo(Parents::class, 'parent_id');
    }

    public function student()
    {
        return $this->belongsTo(StudentBasicInformation::class, 'student_id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'child_id', 'child_id');
    }
}
