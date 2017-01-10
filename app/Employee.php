<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function getProfilePicAttribute ($value)
    {
        return $this->attributes['profilepic'];

    }


    public function getEnameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getIdAttribute($value)
    {
        return $value;
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'employee_id');
    }


}
