<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supervisor
 */
class Supervisor extends Model
{
    protected $table = 'supervisors';

    public $timestamps = true;

    protected $fillable = [
        'empcode',
        'designation'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getEmpcode() {
		return $this->empcode;
	}

	/**
	 * @return mixed
	 */
	public function getDesignation() {
		return $this->designation;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setEmpcode($value) {
		$this->empcode = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDesignation($value) {
		$this->designation = $value;
		return $this;
	}



}