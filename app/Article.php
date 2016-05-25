<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'published_at'
    ];

    public function setPublishedAtAttribute($date)
    {
        //echo ($date);
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    public function setExcerptAttribute($excerpt)
    {
        $this->attributes['excerpt'] = $excerpt." From Custom";
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
}
