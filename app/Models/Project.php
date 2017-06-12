<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 */
class Project extends Model
{
    protected $table = 'projects';

    public $timestamps = true;

    protected $fillable = [
        'code',
        'title',
        'desc',
        'image',
        'supervisorid'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return mixed
	 */
	public function getDesc() {
		return $this->desc;
	}

	/**
	 * @return mixed
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @return mixed
	 */
	public function getSupervisorid() {
		return $this->supervisorid;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setCode($value) {
		$this->code = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTitle($value) {
		$this->title = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDesc($value) {
		$this->desc = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setImage($value) {
		$this->image = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSupervisorid($value) {
		$this->supervisorid = $value;
		return $this;
	}



}