<?php

namespace App;

use App\Unit;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KnowledgeUnit extends Model
{
    use SoftDeletes;
    use Sluggable;

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
    protected $table = "knowledge_units";

    /**
    * Attributes that should be mass-assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'order',
        'unit_id',
        'description',
        'image',
        'media_link',
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

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }

    public function media_link()
    {
        return nl2br($this->media_link);
    }
}
