<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
	use SoftDeletes;

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "units";

	/**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 
    	'order',
    	'course_id', 
    	'description', 
    	'image', 
    ];
	
	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function name()
	{
		return nl2br($this->name);
	}

	public function description()
	{
		return nl2br($this->description);
	}

	public function image()
	{
		return nl2br($this->image);	
	}

	public function course()
	{
		return $this->belongsTo('App\Course');
	}
}