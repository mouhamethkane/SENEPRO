<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App/user');
    }

    public function comments()
    {
        return $this->morphMany('App/comments', 'commentable')->latest();
    }
}
