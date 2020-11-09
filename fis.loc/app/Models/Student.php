<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function getStudent($student_id)
    {
        return $this->query()
            ->select('students.*')
            ->where('students.sid','=',$student_id)
            ->get();
    }
}
