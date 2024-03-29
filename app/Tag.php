<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Fillable fields for tab
     *
     * @var array
     *
     */
    protected $fillable = [
        'name'
    ];
    /**
     *
     * Get the articles associted with the give tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     */
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
