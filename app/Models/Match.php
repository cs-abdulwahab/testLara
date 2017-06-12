<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Match
 */
class Match extends Model
{
    protected $table = 'matches';

    public $timestamps = false;



    protected $fillable = [
        'matchtype',
        'matchname',
        'car_id'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getMatchtype() {
		return $this->matchtype;
	}

	/**
	 * @return mixed
	 */
	public function getMatchname() {
		return $this->matchname;
	}

	/**
	 * @return mixed
	 */
	public function getCarId() {
		return $this->car_id;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setMatchtype($value) {
		$this->matchtype = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMatchname($value) {
		$this->matchname = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCarId($value) {
		$this->car_id = $value;
		return $this;
	}



}