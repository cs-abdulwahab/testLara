<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 */
class Student extends Model
{
    protected $table = 'students';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'regno'
    ];

    protected $guarded = [];

        
}