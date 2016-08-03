<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use SoftDeletes;

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "educations";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image'];

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function name()
	{
		return nl2br(strtoupper($this->name));
	}

	public function image()
	{
		return nl2br($this->image);
	}

}
