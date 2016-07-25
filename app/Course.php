<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ghanem\Rating\Contracts\Ratingable;
use Ghanem\Rating\Traits\Ratingable as RatingTrait;

class Course extends Model implements Ratingable
{
	use SoftDeletes;
	use Sluggable;
	use RatingTrait;

	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = "courses";

	/**
	* Attributes that should be mass-assignable.
	*
	* @var array
	*/
	protected $fillable = ['name', 'description', 'category_id', 'image', 'active', 'max_students', 'price'];

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

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function price()
	{
		return $this->price;
	}

	public function averageRatingRound()
	{
		return round($this->averageRating());
	}
}
