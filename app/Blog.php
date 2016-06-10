<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";

    protected $fillable = [
        'name',
        'description'
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }

}
