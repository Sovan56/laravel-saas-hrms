<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'company_id',
        'employee_code',
        'name',
        'email',
        'image',
        'department',
        'date_of_joining',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

