<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'published_at'
    ];

    /**
     * Set published_at date as Carbon Format
     *
     * @var array
     */
    protected $dates    = ['published_at'];
    /**
     * Set the published at attribute
     *
     * @param $date
     *
     */
    public function setPublishedAtAttribute($date)
    {
        //echo ($date);
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        //$this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * Set the excerpt attribute
     *
     * @param $excerpt
     *
     */
    public function setExcerptAttribute($excerpt)
    {
        $this->attributes['excerpt'] = $excerpt." From Custom";
    }
    /**
     * Scope queries to articles that have been published
     *
     * @param $query
     *
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
    /**
     * Scope queries to articles that have not been published
     *
     * @param $query
     *
     */
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }
}
