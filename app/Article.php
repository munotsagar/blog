<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Article
 * @package App
 */
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
        'published_at',
        'user_id',
        'first_name',
        'last_name'
    ];

    /**
     * Set published_at date as Carbon Format
     *
     * @var array
     */
    protected $dates    = ['published_at']; // $article->published_at->format('Y-m');
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
        //$query->where('published_at', '<=', Carbon::now());


        $query->whereRaw('published_at <="'. Carbon::now(). '" and user_id ='. Auth::user()->id);
    }
    /**
     * Scope queries to articles that have not been published
     *
     * @param $query
     *
     */
    public function scopeUnpublished($query)
    {
        //$query->where('published_at', '>=', Carbon::now());

        $query->whereRaw('published_at >="'. Carbon::now(). '" and user_id ='. Auth::user()->id);
    }

    /**
     * A article is owned by a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    } // $article->user

    /**
     *
     * Get the tags associted with the given article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get the tag ids associited with the current article
     *
     * @return array
     *
     */
    public function getTaglistAttribute()
    {
        //print_r($this->tags()->lists('id')->toArray());
        return $this->tags()->lists('id')->toArray();
    }
}
