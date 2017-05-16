<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FingerPrint extends Model
{
    protected $guarded = [];

    public $timestamps = false;


    protected $attributes = array(
        'fingerdata' => '',
        'finger_mediumText'=>'',
        'finger_longText'=>'',
        'fingerstring'=>'',
    );
}
