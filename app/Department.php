<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $fillable = [
        'dname','dloc'
    ];
    public $timestamps = false;

    public function employees(){
        return $this->hasMany(Employee::class);
    }


}
