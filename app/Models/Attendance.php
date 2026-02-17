<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'company_id',
        'employee_id',
        'attendance_date',
        'clock_in',
        'clock_out',
        'working_minutes',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
